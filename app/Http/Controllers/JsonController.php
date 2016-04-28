<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class JsonController extends Controller
{
    public function show ($id){
        $test = \App\test::find ($id);
        print $test->toJson ();
    }
    
    public function search ($query){
        $tests = \App\test::whereRaw ("MATCH (titulo,descripcion) AGAINST (?)", [$query])->get ();                
        print $tests->toJson ();
    }
        
}
