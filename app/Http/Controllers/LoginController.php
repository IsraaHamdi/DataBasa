<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('home')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }


    public function home() {
  
        return View('auth.home');
    }
}
?>