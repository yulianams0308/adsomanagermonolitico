<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\Instructor;
use App\Models\Competence;

class ResultController extends Controller
{
    public function index(){
    }

    public function create()
    {
        $instructors = Instructor::all();
        $competences = Competence::all();
        return view('results.create', ['instructor'=>$instructors,'competence'=>$competences]);
    }

    public function store(Request $request){

        $result = new Result();
        $result->nombre_resultado=$request->nombre_resultado;
        $result->descripcion=$request->descripcion;
        $result->horas=$request->horas;
        $result->fecha_inicio=$request->fecha_inicio;
        $result->fecha_fin=$request->fecha_fin;
        $result->url_formato=$request->url_formato;
        $result->slug=$request->slug;
        $result->instructor_id=$request->instructor_id;
        $result->competence_id=$request->competence_id;
        $result->save();

        // return view('results.index');
      }
}

