@extends('layouts.auth')

@section('authContent')
    <div class="mdl-card mdl-shadow--6dp">
        <div class="mdl-card__title mdl-color--primary mdl-color-text--white">
            <h2 class="mdl-card__title-text">{{ __('Register') }}</h2>
        </div>
        <div class="mdl-card__supporting-text">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="email" name="name" value="{{ old('name') }}" required autofocus>
                    <label class="mdl-textfield__label" for="name">{{ __('Name') }}</label>
                    @if($errors->has('name'))
                        <span class="mdl-textfield__error">{{ $errors->first('name') }}</span>
                    @endif
                </div>
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
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="password" id="password_confirmation" name="password_confirmation" required>
                    <label class="mdl-textfield__label" for="password_confirmation">{{ __('Confirm Password') }}</label>
                </div>
                <button id="action-button" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">
                    {{ __('Register') }}
                </button>
            </form>
        </div>
    </div>
    
@endsection