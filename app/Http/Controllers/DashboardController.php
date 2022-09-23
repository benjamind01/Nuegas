<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show() {

        $featuredTeachers = User::where('teacher', "=", 1)->limit(2)->get();

        return view('dashboard', ['teachers' => $featuredTeachers]);
    }
}
