@extends('layouts.auth')

@section('authContent')

    <div class="mdl-card mdl-shadow--6dp">
        <div class="mdl-card__title mdl-color--primary mdl-color-text--white">
            <h2 class="mdl-card__title-text">{{ __('Login') }}</h2>
        </div>
        <div class="mdl-card__supporting-text">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
                    <label class="mdl-textfield__label" for="email">{{ __('E-Mail Address') }}</label>
                    @if($errors->has('email'))
                        <span class="mdl-textfield__error">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="password" id="password" name="password" required>
                    <label class="mdl-textfield__label" for="password">{{ __('Password') }}</label>
                    @if($errors->has('password'))
                        <span class="mdl-textfield__error">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="remember">
                    <input type="checkbox" id="remember" class="mdl-switch__input" {{ old('remember') ? 'checked' : '' }}>
                    <span class="mdl-switch__label">{{ __('Remember Me') }}</span>
                </label>
                <button id="action-button" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">
                    {{ __('Login') }}
                </button>
            </form>
        </div>
        <div class="mdl-card__actions mdl-card--border">
            @if (Route::has('password.request'))
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
    </div>
    
@endsection