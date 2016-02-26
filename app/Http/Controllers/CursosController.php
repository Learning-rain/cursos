<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CursosController extends Controller {

    public function home() {
        return view('home');
    }

    public function principal() {
        return view('cursos/principal');
    }

    public function cursos() {
        return view('cursos/cursos');
    }
    
    public function subirCurso() {
        return view('cursos/subirCurso');
    }
     public function guardaCurso() {
        $curso = new \App\test();
        $curso->titulo = filter_input(INPUT_POST, 'titulo');
        $curso->descripcion = filter_input(INPUT_POST, 'descripcion');
        $curso->autor = filter_input(INPUT_POST, 'autor');
        $curso->anio = filter_input(INPUT_POST, 'anio');
        $curso->num_preguntas = filter_input(INPUT_POST, 'num_preguntas');                
        $curso->tabla = filter_input(INPUT_POST, 'tabla');
        $curso->icono = filter_input(INPUT_POST, 'icono');
        $curso->save();
//        $this->subirTabla($upload_file->tabla);
//        $this->subirIcono($upload_image->icono);        
        
        return redirect('subirCurso');
    }

    public function subirTabla($tabla) {
        
    }
    public function subirIcono($icono){
        
    }
}
