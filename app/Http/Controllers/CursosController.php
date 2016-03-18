<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Validator;

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
        $icono = filter_input(INPUT_POST, 'icono');
//        $this->subirTabla($upload_file->tabla);
        $this->subirIcono($icono);

//        return redirect('subirCurso');
    }

    public function subirTabla($tabla) {
        
    }

    public function subirIcono(Requests $icono) {
         $image = Input::file('file');
        $validator = Validator::make([$image], ['image' => 'required']);
        if ($validator->fails()) {
            return $this->errors(['message' => 'Not an image.', 'code' => 400]);
        }
//        $destinationPath = storage_path() . '/iconos';
        $destinationPath = public_path().'/iconos/';

        if(!$image->move($destinationPath, $image->getClientOriginalName())) {
            return $this->errors(['message' => 'Error saving the file.', 'code' => 400]);
        }
        return response()->json(['success' => true], 200);
    }

}
