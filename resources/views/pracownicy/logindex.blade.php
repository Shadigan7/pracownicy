@extends('layouts.app')

@section('content')
<section class="page-section home" id="home">
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <img class="masthead-avatar mb-5" src="{{ asset('assets/img/avataaars.svg') }}" alt="..." />
            <h1 class="masthead-heading text-uppercase mb-0">Pracownicy </h1>
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <p class="masthead-subheading font-weight-light mb-0"></p>
            @auth
            <p>Witaj <b>{{ Auth::user()->name}}</b></p>
            <a class="btn btn-success" href="{{ route('password')}}">Zmień hasło</a>
            <br>
            <a class="btn btn-info" href="{{ url('/')}}">Wyloguj</a>

            @endauth
        </div>
    </header>
</section>

@endsection