<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index() {
        
        $featuredTeachers = User::where('teacher', "=", 1)->get();

        return view('teachers', ['teachers' => $featuredTeachers]);
    }
}
