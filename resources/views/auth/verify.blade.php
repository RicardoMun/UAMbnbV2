@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-dark mb-3">
                <div class="card-header">{{ __('Verifica tu correo') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Hemos enviado un email para verificar tu correo') }}
                        </div>
                    @endif

                    {{ __('Revisa tu bandeja de entrada y asegurate de haber recibido el correo') }}
                    {{ __('Si no recibiste el correo') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Clickea aquí para enviarte otro email de verificación') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
