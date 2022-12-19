@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Phases') }}</div>
                <aside>
                    <ul>
                        @foreach ($phases as $phase_item)
                            <li style="list-style: none" class="@if($phase_item->id == $phase->id) {{ 'text-bg-primary' }} @endif p-2 text-center">
                                <a style="@if($phase_item->order > $phase->order){{ 'pointer-events: none;' }} @endif" href="/phase/{{ $phase_item->id }}" class="text-dark">{{ $phase_item->name }}</a>
                            </li>
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
    </div>
</div>
@endsection
