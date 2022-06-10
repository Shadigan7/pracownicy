@extends('layouts.lista')

@section('content')
<section class="masthead page-section pracownicy" id="pracownicy">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Lista pracowników</h2><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Imię</th>
                    <th scope="col">Nazwisko</th>
                    <th scope="col">Stanowisko</th>
                    <th scope="col">Data Urodzenia</th>
                    <th scope="col">Akcje</th>
            </thead>
            <tbody>
                @if(!empty($pracownicy) && $pracownicy->count())
                @foreach ($pracownicy as $pracownik)
                <tr>
                    <th scope="row">{{$pracownik->id}}</th>
                    <td>{{$pracownik->Imie}}</td>
                    <td>{{$pracownik->Nazwisko}}</td>
                    <td>{{$pracownik->Stanowisko}}</td>
                    <td>{{$pracownik->Data_urodzenia}}</td>
                    <td><a href="{{ route('pracownicy.edit', ['id' => $pracownik->id]) }}" class="btn btn-info">Edytuj<a></a>
                            <form method="POST" action="{{ route('pracownicy.delete', ['id' => $pracownik->id]) }}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Usuń</button>
                            </form>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="10">Nie ma tu nic do wyświetlenia.</td>
                </tr>
                @endif

            </tbody>
        </table>
        {!! $pracownicy->links() !!}
    </div>




</section>

@endsection