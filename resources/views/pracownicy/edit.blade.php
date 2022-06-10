@extends('layouts.app')

@section('content')
<section class="masthead page-section" id="edytuj">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Edytuj dane pracownika {{ $pracownik->id }}</h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <form action="{{ route('pracownicy.update', ['id' => $pracownik->id]) }}" method="POST" id="contactForm">
                    {{ csrf_field() }}
                    @method('PUT')
                    <div class="form-floating mb-3">
                        <input value="{{ $pracownik->Imie}}" class="form-control" id="Imie" name="Imie" type="text" placeholder="Wpisz imię..." data-sb-validations="required" />
                        <label>Imię</label>
                        <div class="invalid-feedback" data-sb-feedback="Imie:required">Wprowadź dane</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input value="{{ $pracownik->Nazwisko}}" class="form-control" id="Nazwisko" name="Nazwisko" type="text" placeholder="Wpisz nazwisko..." data-sb-validations="required" />
                        <label for="Nazwisko">Nazwisko</label>
                        <div class="invalid-feedback" data-sb-feedback="Nazwisko:required">Wprowadź dane</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input value="{{ $pracownik->Stanowisko}}" class="form-control" id="Stanowisko" name="Stanowisko" type="text" placeholder="Wpisz stanowisko..." data-sb-validations="required" />
                        <label for="Stanowisko">Stanowisko</label>
                        <div class="invalid-feedback" data-sb-feedback="Stanowisko:required">Wprowadź dane</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input value="{{ $pracownik->Data_urodzenia}}" class="form-control" id="Data_urodzenia" name="Data_urodzenia" placeholder="Wprowadź datę..." data-sb-validations="required" />
                        <label for="Data_urodzenia">Data urodzenia</label>
                        <div class="invalid-feedback" data-sb-feedback="Data_urodzenia:required">Wprowadź dane</div>
                    </div>
                    <br />
                    <div id="success"></div>
                    <a class="form-group"><button class="btn btn-primary" id="submitButton" type="submit">Edytuj dane pracownika</button></a>
                    <a class="btn btn-danger" href="{{ url('/logindex') }}">Powrót</a>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection