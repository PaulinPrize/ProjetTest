@extends('layouts.auth')

@section('authContent')

    <div class="mdl-card mdl-shadow--6dp">
        <div class="mdl-card__title mdl-color--primary mdl-color-text--white">
            <h2 class="mdl-card__title-text">Dashboard</h2>
        </div>
        <div class="mdl-card__supporting-text">
            @if (session('status'))
                <div class="mdl-card__supporting-text mdl-color-text--primary">
                    {{ session('status') }}
                </div>
                <hr>
            @endif
            You are logged in!
        </div>
    </div>
    
@endsection