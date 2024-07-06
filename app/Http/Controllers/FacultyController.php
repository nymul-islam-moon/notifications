<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FacultyController extends Controller
{
    public function index() {
        return view('admin.auth.login');
    }

    public function dashboard() {
        return view('admin.faculty.index');
    }

    public function login( Request $request ) {
        $check = $request->all();

        if ( Auth::guard('faculty')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('faculty.dashboard')->with('success', 'Faculty Login Successfully');
        }

        return back()->with('error', 'Login credential mismatch');
    }

    public function logout() {
        Auth::guard('faculty')->logout();

        return redirect()->route('faculty_login')->with('success', 'Faculty Logout Successfully');
    }

    public function register() {

        return view('admin.auth.register');
    }

}
