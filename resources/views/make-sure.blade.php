@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Alert') }}</div>

                <div class="card-body">
                    <div class="row mb-0">
                        <div class="col-md-8">
                            <p>You Answered All this phase's questions </p>
                            <p> if you want to continue press next or back to selection menu</p>
                            <p><strong class="text-danger">if you press next your progress in this phase will erase</strong></p>
                            <div style="display: flex;">
                                <form action="/erase/{{ $phase->id }}" method="post" class="m-2">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Next') }}
                                    </button>
                                </form>
                                <div class="m-2">
                                    <a class="btn btn-primary" href="/">{{ __('Back') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
