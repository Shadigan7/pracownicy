<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function register()
    {
        $data['title'] = 'Register';
        return view('user/register', $data);
    }


    public function register_action(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:tb_user',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);
        $user = new User([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->username)
        ]);
        $user->save();
        return redirect()->route('login')->with('success', 'Zarejestrowano pomyślnie!');
    }



    public function login()
    {
        $data['title'] = 'Login';
        return view('user/login', $data);
    }


    public function login_action(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if(auth::attempt(['username' => $request->username, 'password' => $request->password])){
            $request->session()->regenerate();
            return redirect()->intended('/logindex');
        }
        return back()->withErrors('password', 'Nieprawidłowa Nazwa użytownika lub hasło!');
    }

    
    public function password()
    {
        $data['title'] = 'Change password';
        return view('user/password', $data);
    }


    public function password_action(Request $request)
    {
        $request->validate([
            'old_password' => 'required|current_password',
            'new_password' => 'required|confirmed',
        ]);
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->regenerate();
        return back()->with('success', 'Hasło zmienione pomyślnie!');
    }

    public function logout(Request $request){
        Auth::loguot();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
