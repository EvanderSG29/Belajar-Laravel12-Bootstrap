@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Account Not Available') }}</div>

                <div class="card-body">
                    <p>{{ __('Your account role is not recognized. Please contact the administrator.') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
