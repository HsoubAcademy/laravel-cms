@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('auth.Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('auth.link has been sent') }}
                        </div>
                    @endif

                    {{ __('auth.Before proceeding') }}
                    {{ __('auth.If you did not receive') }}, <a href="{{ route('verification.resend') }}">{{ __('auth.click here') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
