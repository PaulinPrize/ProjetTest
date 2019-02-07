@extends('layouts.auth')

@section('authContent')

    <div class="mdl-card mdl-shadow--6dp">
        <div class="mdl-card__title mdl-color--primary mdl-color-text--white">
            <h2 class="mdl-card__title-text">{{ __('Reset Password') }}</h2>
        </div>
        <div class="mdl-card__supporting-text">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                @if (session('status'))
                    <div class="mdl-card__supporting-text mdl-color-text--primary">
                        {{ session('status') }}
                    </div>
                    <hr>
                @endif
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
                    <label class="mdl-textfield__label" for="email">{{ __('E-Mail Address') }}</label>
                    @if($errors->has('email'))
                        <span class="mdl-textfield__error">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <button id="action-button" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">
                    {{ __('Send Password Reset Link') }}
                </button>
            </form>
        </div>
    </div>
    
@endsection