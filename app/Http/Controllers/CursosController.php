<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Validator;
use Illuminate\Support\Facades\Auth;

class CursosController extends Controller {

    public function __construct() {
        $this->middleware('auth', ['only' => ['subirCurso', 'guardaCurso', 'misCursos']]);
    }
    
    public function home() {
        return view('home');
    }

    public function principal() {
        return view('cursos/principal');
    }

    public function cursos() {
        return view('cursos/cursos');
    }

    public function misCursos() {
//        print Auth::user()->id;
        $tests = \App\test::where ('user_id', Auth::user()->id)->get();
        
        return view('cursos/misCursos')->with('cursos', $tests);
    }
    
    public function subirCurso() {
        return view('cursos/subirCurso');
    }


    public function guardaCurso(Request $request) {
        $curso = new \App\test();

        if ($request->hasFile('tabla')) {
            $curso->user_id = Auth::user ()->id;
            $curso->titulo = filter_input(INPUT_POST, 'titulo');
            $curso->descripcion = filter_input(INPUT_POST, 'descripcion');
            $curso->autor = filter_input(INPUT_POST, 'autor');
            $curso->anio = filter_input(INPUT_POST, 'anio');
            $curso->num_preguntas = filter_input(INPUT_POST, 'num_preguntas');
            $curso->tabla = filter_input(INPUT_POST, 'tabla');
            $curso->icono = filter_input(INPUT_POST, 'icono');
            $curso->save();

            $request->file('icono')->move('iconos', $curso->id . '.png');
            $request->file('tabla')->move('csv', $curso->id . '.csv');

            $dir = "sqlite:sqlite/$curso->id.sqlite";
            $pdo = new \PDO($dir) or die("cannot open the database");
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            
            $res = $this->import_csv_to_sqlite($pdo, "./csv/$curso->id.csv");
        }
        
        return redirect('misCursos');
    }


    public function import_csv_to_sqlite(&$pdo, $csv_path, $options = array()) {

        extract($options);

        if (($csv_handle = fopen($csv_path, "r")) === FALSE){
            throw new Exception('Cannot open CSV file');
        }
        
        $delimiter = ',';

        $pdo->beginTransaction();

        $create_table_sql = "CREATE TABLE reactivos (
	`_id`                   INTEGER PRIMARY KEY AUTOINCREMENT,
	`pregunta`              TEXT,
	`respuesta`             TEXT,
	`recurso`               TEXT,
	`informacion_adicional`	TEXT,
	`distractor_1`          TEXT,
	`distractor_2`          TEXT,
	`distractor_3`          TEXT,
	`distractor_4`          TEXT,
	`respuesta_usuario`	TEXT,
	`intento`               INTEGER
        )";
        $pdo->exec($create_table_sql);

        $insert_sql = "INSERT INTO reactivos (pregunta, respuesta, recurso, informacion_adicional,"
                . " distractor_1, distractor_2, distractor_3, distractor_4) "
                . " VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        try {
            $insert_sth = $pdo->prepare($insert_sql);
        } catch (PDOException $e) {            
            var_dump($e);
        }        

        $inserted_rows = 0;
        while (($data = fgetcsv($csv_handle, 0, $delimiter)) !== FALSE) {
            $insert_sth->execute($data);
            $inserted_rows++;
        }

        $pdo->commit();

        fclose($csv_handle);

        return array(
            'insert' => $insert_sth,
            'inserted_rows' => $inserted_rows
        );
    }
    
    
}
