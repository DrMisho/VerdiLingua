@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Phase') }} - {{ $phase->name }}</div>
                <aside>
                    <ul>
                        @foreach ($phases as $phase_item)
                            <li style="list-style: none" class="@if($phase_item->id == $phase->id) {{ 'text-bg-primary' }} @endif p-2 text-center">{{ $phase_item->name }}</li>
                        @endforeach
                    </ul>
                </aside>
            </div>
            <div class="card">
                <div class="card-header">{{ __('Grade') }} - {{ $grade->name }}</div>
                <aside>
                    <ul>
                        @foreach ($grades as $grade_item)
                            <li style="list-style: none" class="@if($grade_item->id == $grade->id) {{ 'text-bg-primary' }} @endif p-2 text-center">{{ $grade_item->name }}</li>
                        @endforeach
                    </ul>
                </aside>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Phase') }}: {{ $phase->name }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div>
                            <h2 class="mb-4 text-bg-success p-2 rounded">{{ $exercise->question->translate(Auth::user()->user_lang)->question }}</h2>
                            <h4 class="check_correct_{{ $exercise->id }} text-bold">{{ $exercise->word }}:</h4>
                            <ul>
                                @foreach ($exercise->options as $option)
                                    <li style="list-style: none" class="p-2"><button onclick="checkCorrect({{ $option }}, {{ $exercise->id }}, '{{ $exercise->options->where('is_correct', true)->first()->translate(Auth::user()->dest_lang)->option }}')" href="" class="btn border text-bold" name="answer_button">{{ $option->translate(Auth::user()->dest_lang)->option }}</button></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="mt-4">
                            <form action="/answer-question" method="post">
                                @csrf
                                <p class="mt-2 mb-3 text-danger" id="answer"></p>
                                <input type="text" id="is_correct" hidden name="is_correct">
                                <input type="number" id="phase_id" hidden name="phase_id" value="{{ $phase->id }}">
                                <input type="number" id="exercise_id" hidden name="exercise_id" value="{{ $exercise->id }}">
                                <button class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
