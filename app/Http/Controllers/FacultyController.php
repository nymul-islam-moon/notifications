<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index() {
        return view('admin.auth.login');
    }

    public function dashboard() {
        return view('admin.faculty.index');
    }
}
