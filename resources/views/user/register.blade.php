@extends('layouts.home')
@section('content')
//<section class="masthead page-section" id="register">
<div class="container">
<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Rejestracja </h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
    <div class="row">
        <div class="col-md-6">
            @if($errors->any())
            @foreach($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
            @endif
            <form method="POST" action="{{ route('register.action') }}">
                @csrf
                <div class="mb-3">
                    <label text-align:center>
                        Nazwa <span class="text-danger">*</span>
                        <input class="form-control" type="text" name="name" value="{{ old('name') }}" />
                    </label>
                </div>
                <div class="mb-3">
                    <label>
                        Nazwa użytkownika <span class="text-danger">*</span>
                        <input class="form-control" type="text" name="username" value="{{ old('username') }}" />
                    </label>
                </div>
                <div class="mb-3">
                    <label>
                        Hasło <span class="text-danger">*</span>
                        <input class="form-control" type="password" name="password" />
                    </label>
                </div>
                <div class="mb-3">
                    <label>
                        Powtórz hasło <span class="text-danger">*</span>
                        <input class="form-control" type="password" name="password_confirmation" />
                    </label>
                </div>
                <div class="mb-3">
                    <label>
                        <button class="btn btn-primary">Rejestruj</button>
                        <a class="btn btn-danger" href="{{ url('/logindex') }}">Powrót</a>
                    </label>
                </div>
            </form>
        </div>
    </div>
</div>
</section>
@endsection