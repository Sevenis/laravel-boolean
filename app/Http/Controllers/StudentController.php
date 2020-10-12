<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studenti(){
        $data = config('students');
        return view('studenti', compact('data'));
    }
}
