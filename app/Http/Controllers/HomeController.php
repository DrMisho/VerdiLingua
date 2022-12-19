<?php

namespace App\Http\Controllers;

use App\Models\Advance;
use App\Models\Exercise;
use App\Models\Grade;
use App\Models\Phase;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isEmpty;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $phase = $user->phase;
        $grade = $user->grade;
        $phases = $grade->phases;
        $exercises = $user->phase->exercises;
        $grades = Grade::all();
        return view('home', [
            'phase' => $phase,
            'phases' => $phases,
            'exercises' => $exercises,
            'grade' => $grade,
            'grades' => $grades

        ]);
    }

    public function showPhase(Phase $phase)
    {
        // show questions that the user doesn't answer in this phase
        // if the user wants to show the questions even if he answer them then show him alert message first
        $user = Auth::user();

        $is_answered = $this->isAnsweredQuestion($phase);

        if ($is_answered) {
            return redirect()->route('make.sure', ['phase' => $phase]);
        }

        $exercise = $this->getAvailableExercise($phase);

        return view('exercise', [
            'exercise' => $exercise,
            'phase' => $phase,
            'phases' => $user->grade->phases,
            'grade' => $user->grade,
            'grades' => Grade::all(),
        ]);

        // $grade_order = Grade::query()->find($grade_id)->order;
        // $phase = $user->grade->phases->where('id', $phase_id)->first();

        // $exercise_phase_id = $phase->exercises()->newPivotQuery()->get()->pluck('id');
        // $exercise_phase_id_passed = Advance::query()->whereIn('exercise_phase_id', $exercise_phase_id)->where('user_id', $user->id)->where('is_passed', false)->get()->pluck('exercise_phase_id');
        // $exercise_ids = $phase->exercises()->newPivotQuery()->whereIn('id', $exercise_phase_id_passed)->get()->pluck('exercise_id');
        // try {
        //     $exercise = Exercise::query()->whereIn('id', $exercise_ids)->firstOrFail();
        //     // dd($exercise);
        // }
        // catch(ModelNotFoundException $e)
        // {
        //     if($phase->is_final)
        //     {
        //         $user->update([
        //             'grade_id' => Grade::query()->where('order', $grade_order +1)->first()->id,
        //         ]);
        //     }
        //     else
        //     {
        //         $user->update([
        //             'phase_id' => Phase::query()->where('order', $phase->order +1)->first()->id,
        //         ]);
        //         foreach($exercise_phase_id as $id)
        //         {
        //             dd($exercise_phase_id);
        //             Advance::create([
        //                 'exercise_phase_id' => $id,
        //                 'user_id' => $user->id,
        //             ],[
        //                 'is_passed' => false,
        //             ]);
        //         }
        //     }
        //     return redirect()->back();
        // }

    }

    public function makeSure(Phase $phase)
    {
        return view('make-sure', [
            'phase' => $phase,
        ]);
    }
    public function erasePhase(Phase $phase)
    {
        $exercise_phase_ids = $phase->exercises()->newPivotQuery()->get()->pluck('id');
        foreach($exercise_phase_ids as $id)
        {
            Advance::query()
            ->where('user_id', Auth::id())
            ->where('exercise_phase_id', $id)
            ->update([
                'is_passed' => false,
                'time_taken' => 0,
            ]);
        }
        return redirect()->route('show.phase', ['phase' => $phase]);
    }

    protected function isAnsweredQuestion($phase)
    {
        // it returns wether the user answered all questions in this phase or not
        $exercise_phase_ids = $phase->exercises()->newPivotQuery()->get()->pluck('id');

        $exercises_not_done = Advance::query()
        ->where('user_id', Auth::id())
        ->whereIn('exercise_phase_id', $exercise_phase_ids)
        ->where('is_passed', false)
        ->get();

        return $exercises_not_done->isEmpty();

    }

    protected function getAvailableExercise(Phase $phase)
    {
        $exercise_phase_ids = $phase->exercises()->newPivotQuery()->get()->pluck('id');
        $advance_ids =  Advance::query()
        ->where('user_id', Auth::id())
        ->whereIn('exercise_phase_id', $exercise_phase_ids)
        ->where('is_passed', false)
        ->get()
        ->pluck('exercise_phase_id');

        $exercise_ids = $phase->exercises()->newPivotQuery()->whereIn('id', $advance_ids)->get()->pluck('exercise_id');

        return Exercise::query()->whereIn('id', $advance_ids)->first();
    }
    public function answerQuestion()
    {

        $form = request()->validate([
            'is_correct' => 'required',
            'exercise_id' => 'required',
            'phase_id' => 'required',
        ]);
        $phase = Phase::query()->find($form['phase_id']);
        $exercise_phase_id = $phase->exercises()->newPivotQuery()->where('exercise_id', $form['exercise_id'])->first()->id;
        Advance::updateOrCreate(
            [
                'exercise_phase_id' => $exercise_phase_id,
                'user_id' => Auth::user()->id,
            ],
            [
                'is_passed' => $form['is_correct'] === 'true'? true: false,
            ]
        );
        $is_answered = $this->isAnsweredQuestion($phase);

        if ($is_answered) {
            $user = Auth::user();
            if($phase->is_final)
            {
                $next_grade = Grade::query()->where('order', $phase->grade->order + 1)->first();
                $next_phase = $next_grade->phases->orderBy('order')->first();
                $user->update([
                    'grade_id' => $next_grade->id,
                    'phase_id' => $next_phase->id,
                ]);
                $this->makeAdvance($next_phase);
            }
            else
            {
                $next_phase = Phase::query()->where('order', $phase->order + 1)->first();
                $user->update([
                    'phase_id' => $next_phase->id,
                ]);
                $this->makeAdvance($next_phase);
            }

            return redirect()->route('complete');
        }
        return redirect()->back();
    }
    protected function makeAdvance(Phase $next_phase)
    {
        $exercise_phase_ids = $next_phase->exercises()->newPivotQuery()->get()->pluck('id');
        foreach($exercise_phase_ids as $id)
        {
            Advance::create([
                'user_id' => Auth::user()->id,
                'exercise_phase_id' => $id,
                'is_passed' => false,
                'time_taken' => 0,
            ]);
        }

    }
    public function complete()
    {
        return view('complete');
    }
}
