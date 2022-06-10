@extends('layouts.app')

@section('content')
<section class="masthead page-section" id="dodaj">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dodaj pracownika</h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <form action="{{ route('pracownicy.zapisz') }}" method="POST" id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <!-- IMIĘ-->
                    {{ csrf_field() }}
                    <div class="form-floating mb-3">
                        <input class="form-control" id="Imie" name="Imie" type="text" placeholder="Wpisz imię..." data-sb-validations="required" />
                        <label for="Imię">Imię</label>
                        <div class="invalid-feedback" data-sb-feedback="Imię:required">Wprowadź dane</div>
                    </div>
                    <!-- NAZWISKO-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="Nazwisko" name="Nazwisko" type="text" placeholder="Wpisz nazwisko..." data-sb-validations="required" />
                        <label for="Nazwisko">Nazwisko</label>
                        <div class="invalid-feedback" data-sb-feedback="Nazwisko:required">Wprowadź dane</div>
                    </div>
                    <!-- STANOWISKO-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="Stanowisko" name="Stanowisko" type="text" placeholder="Wpisz stanowisko..." data-sb-validations="required" />
                        <label for="Stanowisko">Stanowisko</label>
                        <div class="invalid-feedback" data-sb-feedback="Stanowisko:required">Wprowadź dane</div>
                    </div>
                    <!-- DATA URODZENIA-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="Data_urodzenia" name="Data_urodzenia" placeholder="Wprowadź datę..." data-sb-validations="required" />
                        <label for="Data_urodzenia">Data urodzenia</label>
                        <div class="invalid-feedback" data-sb-feedback="Data_urodzenia:required">Wprowadź dane</div>
                    </div>
                    <br />
                    <div id="success"></div>
                    <a class="form-group"><button class="btn btn-primary" id="submitButton" type="submit">Dodaj pracownika</button></a>
                    <a class="btn btn-danger" href="{{ url('/logindex') }}">Powrót</a>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection