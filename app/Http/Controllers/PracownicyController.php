<?php

namespace App\Http\Controllers;

use App\Models\Pracownik;
use Illuminate\Http\Request;

class PracownicyController extends Controller
{
    public function index(){
        $pracownicy = Pracownik::paginate(2);
        return view('pracownicy.index', ['pracownicy'=> $pracownicy]);
    }

    public function logindex(){
        return view('pracownicy.logindex');
    }

    public function dodaj(){
        return view('pracownicy.dodaj');
    }


    public function edit($id){
        $pracownik = Pracownik::find($id);
        return view('pracownicy.edit', ['pracownik' => $pracownik]);
    }

    public function zapisz(Request $request){
        $pracownik = new Pracownik;

        $pracownik->Imie = $request->Imie;
        $pracownik->Nazwisko = $request->Nazwisko;
        $pracownik->Stanowisko = $request->Stanowisko;
        $pracownik->Data_urodzenia = $request->Data_urodzenia;

        $pracownik->save();

        return redirect()->route('pracownicy.index')->with('message', 'Pracownik dodany pomyślnie!');
    }

    public function update($id, Request $request){
        $pracownik = Pracownik::find($id);

        $pracownik->Imie = $request->Imie;
        $pracownik->Nazwisko = $request->Nazwisko;
        $pracownik->Stanowisko = $request->Stanowisko;
        $pracownik->Data_urodzenia = $request->Data_urodzenia;

        $pracownik->save();

        return redirect()->route('pracownicy.index')->with('message', 'Dane pracownika zmienione pomyślnie!');
    }


    public function delete($id){
        
        Pracownik::destroy($id);

        return redirect()->route('pracownicy.index')->with('message', 'Pracownik usunięty!');
    }
}

