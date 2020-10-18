<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//includiamo il model
use App\Student;

class StudentController extends Controller
{
    public function studenti (){
            $data = Student::all();
            return view('studenti', compact('data'));
    }
    // protected $students;
    //
    // public function __construct(){
    //     $this->getAllStudents();
    // }
    //
    // public function getAllStudents(){
    //     $this->students = config('students');
    // }
    //
    // public function studenti(){
    //     $data = $this->students;
    //     return view('studenti', compact('data'));
    // }
    //
    // public function show($id){
    //     if(!array_key_exists($id, $this->students)){
    //         abort(404);
    //     }
    //     $student = $this->students[$id];
    //     return view('show', compact('student'));
    // }
    //
    //
    // //FUNZIONE RICERCA TRAMITE SLUG
    // public function slug($nome){
    //     $trovato = false;
    //     foreach($this->students as $studente){
    //         if($studente['slug'] == $nome){
    //             //Se trova il valore lo memorizza in una variabile
    //             $student = $studente;
    //             $trovato = true;
    //         }
    //     }
    //     if($trovato){
    //         //se ha trovato il valore allora mi restituisce quello
    //         return view('slug', compact('student'));
    //     } else {
    //         abort(404);
    //     }
    // }
}
