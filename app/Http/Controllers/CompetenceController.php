<?php

namespace App\Http\Controllers;

use App\Models\Competence;
use Illuminate\Http\Request;
use App\Models\Instructor;

class CompetenceController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        $instructors  = Instructor::all();
        return view('competences.create', ['instructor' => $instructors]);
    }

    public function store(Request $request)
    {
        $competences =new Competence();
        $competences ->nombre_competencia=$request->nombre_competencia;
        $competences ->descripcion=$request->descripcion;
        $competences ->anexo=$request->anexo;
        $competences ->instructor_id=$request->instructor_id;
        $competences ->slug=$request->slug;
        $competences ->save();
    }
}
