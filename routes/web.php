<?php

use App\Models\User;
use App\Models\Grade;
use App\Models\Phase;
use App\Models\Option;
use App\Models\Advance;
use App\Models\Exercise;
use App\Models\Question;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::post('/', function () {

})->name('translateResult');

Route::get('/make', function () {

    $question1 = [
        'en' => ['question' => 'Identify the following words'],
        'fr' => ['question' => 'Identifiez les mots suivants'],
        'es' => ['question' => 'Identifica las siguientes palabras'],
      ];
    $question2 = [
        'en' => ['question' => 'Translate the following sentences'],
        'fr' => ['question' => 'Traduisez les phrases suivantes'],
        'es' => ['question' => 'Traduce las siguientes oraciones'],
      ];
    $question3 = [
        'en' => ['question' => 'Complete the following text with the right words'],
        'fr' => ['question' => 'Complétez le texte suivant avec les mots qui conviennent'],
        'es' => ['question' => 'Complete el siguiente texto con las palabras correctas'],
      ];
    $question4 = [
        'en' => ['question' => 'Put the days of the week in good order'],
        'fr' => ['question' => 'Mettez les jours de la semaine en bon ordre'],
        'es' => ['question' => 'Pon los días de la semana en buen estado'],
      ];
      $question_1 = Question::create($question1);
      $question_2 = Question::create($question2);
      $question_3 = Question::create($question3);
      $question_4 = Question::create($question4);

      // select qustions
    $exercise1 = [
        'en' => ['word' => 'Apple'],
        'fr' => ['word' => 'Pomme'],
        'es' => ['word' => 'Manzana'],
        'question_id' => $question_1->id,
        'type' => 'select',
    ];
    $exercise2 = [
        'en' => ['word' => 'Table'],
        'fr' => ['word' => 'Table'],
        'es' => ['word' => 'Mesa'],
        'question_id' => $question_1->id,
        'type' => 'select',
      ];
    $exercise3 = [
        'en' => ['word' => 'man'],
        'fr' => ['word' => 'Homme'],
        'es' => ['word' => 'hombre'],
        'question_id' => $question_1->id,
        'type' => 'select',
      ];
    $exercise4 = [
        'en' => ['word' => 'Women'],
        'fr' => ['word' => 'Femmes'],
        'es' => ['word' => 'Mujeres'],
        'question_id' => $question_1->id,
        'type' => 'select',
      ];
    $exercise5 = [
        'en' => ['word' => 'Week'],
        'fr' => ['word' => 'Semaine'],
        'es' => ['word' => 'Semana'],
        'question_id' => $question_1->id,
        'type' => 'select',
    ];
    $exercise6 = [
        'en' => ['word' => 'Day'],
        'fr' => ['word' => 'Jour'],
        'es' => ['word' => 'Día'],
        'question_id' => $question_1->id,
        'type' => 'select',
    ];
    $exercise7 = [
        'en' => ['word' => 'Monday'],
        'fr' => ['word' => 'Lundi'],
        'es' => ['word' => 'Lunes'],
        'question_id' => $question_1->id,
        'type' => 'select',
    ];
    $exercise8 = [
        'en' => ['word' => 'Tuesday'],
        'fr' => ['word' => 'Mardi'],
        'es' => ['word' => 'Martes'],
        'question_id' => $question_1->id,
        'type' => 'select',
    ];
    $exercise9 = [
        'en' => ['word' => 'Wednesday'],
        'fr' => ['word' => 'Mercredi'],
        'es' => ['word' => 'Miércoles'],
        'question_id' => $question_1->id,
        'type' => 'select',
    ];
    $exercise10 = [
        'en' => ['word' => 'Thursday'],
        'fr' => ['word' => 'Jeudi'],
        'es' => ['word' => 'Jueves'],
        'question_id' => $question_1->id,
        'type' => 'select',
    ];
    $exercise11 = [
        'en' => ['word' => 'Friday'],
        'fr' => ['word' => 'Vendredi'],
        'es' => ['word' => 'Viernes'],
        'question_id' => $question_1->id,
        'type' => 'select',
    ];
    $exercise12 = [
        'en' => ['word' => 'Saturday'],
        'fr' => ['word' => 'Samedi'],
        'es' => ['word' => 'Sábado'],
        'question_id' => $question_1->id,
        'type' => 'select',
    ];
    $exercise13 = [
        'en' => ['word' => 'Sunday'],
        'fr' => ['word' => 'Dimanche'],
        'es' => ['word' => 'Domingo'],
        'question_id' => $question_1->id,
        'type' => 'select',
    ];

    // translate Questions
    $exercise14 = [
        'en' => ['word' => 'The weekend in Europe is Saturday and Sunday.'],
        'fr' => ['word' => "Le weekend en Europe c’sont les samedi et dimanche."],
        'es' => ['word' => 'El fin de semana en Europa es el sábado y el domingo.'],
        'question_id' => $question_2->id,
        'type' => 'translate',
    ];
    $exercise15 = [
        'en' => ['word' => 'Martine goes to work Monday and Tuesday.'],
        'fr' => ['word' => 'Martine va au travail lundi et mardi.'],
        'es' => ['word' => 'Martine va a trabajar el lunes y martes.'],
        'question_id' => $question_2->id,
        'type' => 'translate',
    ];
    $exercise16 = [
        'en' => ['word' => 'I have an appointment on Tuesday.'],
        'fr' => ['word' => 'J’ai un rendez-vous le mardi.'],
        'es' => ['word' => 'Tengo una cita el martes.'],
        'question_id' => $question_2->id,
        'type' => 'translate',
    ];
    $exercise17 = [
        'en' => ['word' => 'Michel works on Wednesdays.'],
        'fr' => ['word' => 'Michel travaille le mercredi.'],
        'es' => ['word' => 'Michel trabaja los miércoles.'],
        'question_id' => $question_2->id,
        'type' => 'translate',
    ];
    $exercise18 = [
        'en' => ['word' => 'Monday comes after Sunday.'],
        'fr' => ['word' => 'Lundi vient après dimanche.'],
        'es' => ['word' => 'El lunes viene después del domingo.'],
        'question_id' => $question_2->id,
        'type' => 'translate',
    ];
    $exercise19 = [
        'en' => ['word' => 'Tuesday comes after Monday.'],
        'fr' => ['word' => 'Mardi vient après lundi.'],
        'es' => ['word' => 'El martes viene después del lunes.'],
        'question_id' => $question_2->id,
        'type' => 'translate',
    ];
    $exercise20 = [
        'en' => ['word' => "I'm not free on Thursday."],
        'fr' => ['word' => 'Je ne suis pas libre jeudi.'],
        'es' => ['word' => 'No estoy libre el jueves.'],
        'question_id' => $question_2->id,
        'type' => 'translate',
    ];
    $exercise21 = [
        'en' => ['word' => 'Friday is the weekend in Egypt.'],
        'fr' => ['word' => 'Vendredi est le weekend en Egypte.'],
        'es' => ['word' => 'Vendredi est le weekend en Egypte.'],
        'question_id' => $question_2->id,
        'type' => 'translate',
    ];
    $exercise22 = [
        'en' => ['word' => 'It is sunny on Tuesday.'],
        'fr' => ['word' => 'Il y a du soleil ce mardi.'],
        'es' => ['word' => 'Hace sol el martes.'],
        'question_id' => $question_2->id,
        'type' => 'translate',
    ];
    $exercise23 = [
        'en' => ['word' => 'Celine and her mother stay home on Fridays.'],
        'fr' => ['word' => 'Céline et sa mère restent à la maison le vendredi.'],
        'es' => ['word' => 'Celine y su madre se quedan en casa los viernes.'],
        'question_id' => $question_2->id,
        'type' => 'translate',
    ];
    $exercise24 = [
        'en' => ['word' => 'Monday is the first day of the week.'],
        'fr' => ['word' => 'Lundi est le premier jour de la semaine.'],
        'es' => ['word' => 'El lunes es el primer día de la semana.'],
        'question_id' => $question_2->id,
        'type' => 'translate',
    ];
    $exercise25 = [
        'en' => ['word' => 'Martin works on Sundays.'],
        'fr' => ['word' => 'Martin travaille le dimanche.'],
        'es' => ['word' => 'Martín trabaja los domingos.'],
        'question_id' => $question_2->id,
        'type' => 'translate',
    ];
    $exercise26 = [
        'en' => ['word' => 'Celine is at school on Thursdays.'],
        'fr' => ['word' => 'Céline est à l’école le jeudi.'],
        'es' => ['word' => 'Celine está en la escuela los jueves.'],
        'question_id' => $question_2->id,
        'type' => 'translate',
    ];
    $exercise27 = [
        'en' => ['word' => 'Fadi stays home on Fridays.'],
        'fr' => ['word' => 'Fadi reste à la maison le vendredi.'],
        'es' => ['word' => 'Fadi se queda en casa los viernes.'],
        'question_id' => $question_2->id,
        'type' => 'translate',
    ];
    $exercise28 = [
        'en' => ['word' => 'Rama comes on Saturday.'],
        'fr' => ['word' => 'Rama vient le samedi.'],
        'es' => ['word' => 'Rama viene el sábado.'],
        'question_id' => $question_2->id,
        'type' => 'translate',
    ];

    // select right word Questions
    $exercise29 = [
        'en' => ['word' => 'Monday morning, Michel goes to… for his Arabic class.'],
        'fr' => ['word' => 'Lundi matin, Michel va à l’… pour son cours d’arabe.'],
        'es' => ['word' => 'El lunes por la mañana, Michel va a… para su clase de árabe.'],
        'question_id' => $question_3->id,
        'type' => 'select',
    ];
    $exercise30 = [
        'en' => ['word' => 'On Tuesday, he works in an Italian restaurant where he prepares ...'],
        'fr' => ['word' => 'Mardi, il travaille dans un restaurant italien où il prépare des ...'],
        'es' => ['word' => 'El martes trabaja en un restaurante italiano donde prepara...'],
        'question_id' => $question_3->id,
        'type' => 'select',
    ];
    $exercise31 = [
        'en' => ['word' => ''],
        'fr' => ['word' => ''],
        'es' => ['word' => ''],
        'question_id' => $question_3->id,
        'type' => 'select',
    ];
    $exercise32 = [
        'en' => ['word' => ''],
        'fr' => ['word' => ''],
        'es' => ['word' => ''],
        'question_id' => $question_3->id,
        'type' => 'select',
    ];
    $exercise33 = [
        'en' => ['word' => ''],
        'fr' => ['word' => ''],
        'es' => ['word' => ''],
        'question_id' => $question_3->id,
        'type' => 'select',
    ];
      $exercise_1 = Exercise::create($exercise1);
      $exercise_2 = Exercise::create($exercise2);
      $exercise_3 = Exercise::create($exercise3);
      $exercise_4 = Exercise::create($exercise4);
      $exercise_5 = Exercise::create($exercise5);
      $exercise_6 = Exercise::create($exercise6);
      $exercise_7 = Exercise::create($exercise7);
      $exercise_8 = Exercise::create($exercise8);
      $exercise_10 = Exercise::create($exercise10);
      $exercise_11 = Exercise::create($exercise11);
      $exercise_12 = Exercise::create($exercise12);
      $exercise_13 = Exercise::create($exercise13);
      $exercise_14 = Exercise::create($exercise14);
      $exercise_15 = Exercise::create($exercise15);
      $exercise_16 = Exercise::create($exercise16);
      $exercise_17 = Exercise::create($exercise17);
      $exercise_18 = Exercise::create($exercise18);
      $exercise_19 = Exercise::create($exercise19);
      $exercise_20 = Exercise::create($exercise20);
      $exercise_21 = Exercise::create($exercise21);
      $exercise_22 = Exercise::create($exercise22);
      $exercise_23 = Exercise::create($exercise23);
      $exercise_24 = Exercise::create($exercise24);
      $exercise_25 = Exercise::create($exercise25);
      $exercise_26 = Exercise::create($exercise26);
      $exercise_27 = Exercise::create($exercise27);
      $exercise_28 = Exercise::create($exercise28);

      $option1 = [
        'en' => ['option' => 'Apple'],
        'fr' => ['option' => 'Pomme'],
        'es' => ['option' => 'Manzana'],
        'exercise_id' => $exercise_1->id,
        'is_correct' => true,
      ];
    $option2 = [
        'en' => ['option' => 'Table'],
        'fr' => ['option' => 'Table'],
        'es' => ['option' => 'Mesa'],
        'exercise_id' => $exercise_1->id,
        'is_correct' => false,
      ];
    $option3 = [
        'en' => ['option' => 'man'],
        'fr' => ['option' => 'Homme'],
        'es' => ['option' => 'hombre'],
        'exercise_id' => $exercise_1->id,
        'is_correct' => false,
      ];
    $option4 = [
        'en' => ['option' => 'Women'],
        'fr' => ['option' => 'Femmes'],
        'es' => ['option' => 'Mujeres'],
        'exercise_id' => $exercise_2->id,
        'is_correct' => false,
      ];
    $option5 = [
        'en' => ['option' => 'Table'],
        'fr' => ['option' => 'Table'],
        'es' => ['option' => 'Mesa'],
        'exercise_id' => $exercise_2->id,
        'is_correct' => true,
      ];
    $option6 = [
        'en' => ['option' => 'Apple'],
        'fr' => ['option' => 'Pomme'],
        'es' => ['option' => 'Manzana'],
        'exercise_id' => $exercise_2->id,
        'is_correct' => false,
      ];
    $option7 = [
        'en' => ['option' => 'man'],
        'fr' => ['option' => 'Homme'],
        'es' => ['option' => 'hombre'],
        'exercise_id' => $exercise_3->id,
        'is_correct' => true,
      ];
    $option8 = [
        'en' => ['option' => 'Women'],
        'fr' => ['option' => 'Femmes'],
        'es' => ['option' => 'Mujeres'],
        'exercise_id' => $exercise_3->id,
        'is_correct' => false,
      ];
    $option9 = [
        'en' => ['option' => 'Table'],
        'fr' => ['option' => 'Table'],
        'es' => ['option' => 'Mesa'],
        'exercise_id' => $exercise_3->id,
        'is_correct' => false,
      ];
    $option10 = [
        'en' => ['option' => 'Apple'],
        'fr' => ['option' => 'Pomme'],
        'es' => ['option' => 'Manzana'],
        'exercise_id' => $exercise_4->id,
        'is_correct' => false,
      ];
    $option11 = [
        'en' => ['option' => 'Women'],
        'fr' => ['option' => 'Femmes'],
        'es' => ['option' => 'Mujeres'],
        'exercise_id' => $exercise_4->id,
        'is_correct' => true,
      ];
    $option12 = [
        'en' => ['option' => 'Table'],
        'fr' => ['option' => 'Table'],
        'es' => ['option' => 'Mesa'],
        'exercise_id' => $exercise_4->id,
        'is_correct' => false,
      ];
      $option_1 = Option::create($option1);
      $option_2 = Option::create($option2);
      $option_3 = Option::create($option3);
      $option_4 = Option::create($option4);
      $option_5 = Option::create($option5);
      $option_6 = Option::create($option6);
      $option_7 = Option::create($option7);
      $option_8 = Option::create($option8);
      $option_9 = Option::create($option9);
      $option_10 = Option::create($option10);
      $option_11 = Option::create($option11);
      $option_12 = Option::create($option12);

  $grade1 = [
    'order' => 1,
    'en' => ['name' => 'Newbie'],
    'fr' => ['name' => 'Débutant'],
    'es' => ['name' => 'Novato']
  ];
  $grade2 = [
    'order' => 2,
    'en' => ['name' => 'Junior'],
    'fr' => ['name' => 'Junior'],
    'es' => ['name' => 'Júnior'],
  ];
  $grade3 = [
    'order' => 3,
    'en' => ['name' => 'Experienced'],
    'fr' => ['name' => 'Expérimenté'],
    'es' => ['name' => 'Experimentado'],
  ];
  $grade4 = [
    'order' => 4,
    'en' => ['name' => 'Intermediate'],
    'fr' => ['name' => 'Intermédiaire'],
    'es' => ['name' => 'Intermedio'],
  ];
  $grade5 = [
    'order' => 5,
    'en' => ['name' => 'Expert'],
    'fr' => ['name' => 'Expert'],
    'es' => ['name' => 'Experto'],
  ];
  $grade6 = [
    'order' => 6,
    'en' => ['name' => 'Senior'],
    'fr' => ['name' => 'Sénior'],
    'es' => ['name' => 'Sénior'],
  ];
  $grade7 = [
    'order' => 7,
    'en' => ['name' => 'Specialized'],
    'fr' => ['name' => 'Spécialisé'],
    'es' => ['name' => 'Especializado'],
  ];

  $grade_1 = Grade::create($grade1);
  $grade_2 = Grade::create($grade2);
  $grade_3 = Grade::create($grade3);
  $grade_4 = Grade::create($grade4);
  $grade_5 = Grade::create($grade5);
  $grade_6 = Grade::create($grade6);
  $grade_7 = Grade::create($grade7);

  $phase1 = [
    'order' => 1,
    'grade_id' => $grade_1->id,
    'is_final' => false,
    'en' => ['name' => '1st'],
    'fr' => ['name' => '1st'],
    'es' => ['name' => '1st']
  ];
  $phase2 = [
    'order' => 2,
    'grade_id' => $grade_1->id,
    'is_final' => false,
    'en' => ['name' => '2nd'],
    'fr' => ['name' => '2nd'],
    'es' => ['name' => '2nd'],
  ];
  $phase3 = [
    'order' => 3,
    'grade_id' => $grade_1->id,
    'is_final' => false,
    'en' => ['name' => '3rd'],
    'fr' => ['name' => '3rd'],
    'es' => ['name' => '3rd'],
  ];
  $phase4 = [
    'order' => 4,
    'grade_id' => $grade_1->id,
    'is_final' => true,
    'en' => ['name' => '4th'],
    'fr' => ['name' => '4th'],
    'es' => ['name' => '4th'],
  ];
  $phase5 = [
    'order' => 1,
    'grade_id' => $grade_2->id,
    'is_final' => false,
    'en' => ['name' => '1st'],
    'fr' => ['name' => '1st'],
    'es' => ['name' => '1st'],
  ];
  $phase6 = [
    'order' => 2,
    'grade_id' => $grade_2->id,
    'is+final' => false,
    'en' => ['name' => '2nd'],
    'fr' => ['name' => '2nd'],
    'es' => ['name' => '2nd'],
  ];
  $phase7 = [
    'order' => 3,
    'grade_id' => $grade_2->id,
    'is_final' => true,
    'en' => ['name' => '3rd'],
    'fr' => ['name' => '3rd'],
    'es' => ['name' => '3rd'],
  ];

  $phase_1 = Phase::create($phase1);
  $phase_2 = Phase::create($phase2);
  $phase_3 = Phase::create($phase3);
  $phase_4 = Phase::create($phase4);
  $phase_5 = Phase::create($phase5);
  $phase_6 = Phase::create($phase6);
  $phase_7 = Phase::create($phase7);

  $user = User::create([
    'name' => 'Mustafa',
    'email' => 'mustafa@example.com',
    'password' => Hash::make('123456'),
    'user_lang' => 'en',
    'dest_lang' => 'es',
    'grade_id' => $grade_1->id,
    'phase_id' => $phase_1->id,
  ]);

  $phase_1->exercises()->sync([$exercise_1->id => ['expected_time'=> 10], $exercise_2->id => ['expected_time'=> 15], $exercise_3->id => ['expected_time'=> 17]], false);
  $phase_2->exercises()->sync([$exercise_4->id => ['expected_time'=> 10]], false);

  $ids = $user->phase->exercises()->newPivotQuery()->get()->pluck('id');
  foreach($ids as $id)
  {
    Advance::create([
      'exercise_phase_id' => $id,
      'user_id' => $user->id,
    ]);
  }

  return "success";
});

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('/phase/check/{phase}', [HomeController::class, 'makeSure'])->middleware('auth')->name('make.sure');
Route::get('/phase/{phase}', [HomeController::class, 'showPhase'])->middleware('auth')->name('show.phase');
Route::post('/answer-question', [HomeController::class, 'answerQuestion'])->middleware('auth')->name('answer.question');
Route::post('/erase/{phase}', [HomeController::class, 'erasePhase'])->middleware('auth')->name('erase.Phase');
Route::get('/complete', [HomeController::class, 'complete'])->middleware('auth')->name('complete');
