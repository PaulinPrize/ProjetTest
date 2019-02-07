@extends('layouts.app')

@section('content')

<div class="mdl-layout" id="main_layout">
    <main class="mdl-layout__content">
        <div class="page-content">
            @yield('authContent')
        </div>
    </main>
</div>

@endsection