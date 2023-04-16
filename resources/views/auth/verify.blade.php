@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifier votre Addresse Email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un email de vérification a été envoyé dans cette address.') }}
                        </div>
                    @endif

                    {{ __('Avant de Continuer, Veiller cliquer sur le lien de vérification envoyé dans votre boite email.') }}
                    {{ __("Si vous n'avez pas reçu d'email") }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __("Cliquer ici pour renvoyer l'email") }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
