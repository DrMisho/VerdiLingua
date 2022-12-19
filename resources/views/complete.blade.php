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
                            <h2 class="text-success">Success</h2>
                            <p>Congratulations! You Answered All this phase's questions </p>
                            <div style="display: flex;">
                                <div class="m-2">
                                    <a class="btn btn-primary" href="/">{{ __('Back To Menu') }}</a>
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
