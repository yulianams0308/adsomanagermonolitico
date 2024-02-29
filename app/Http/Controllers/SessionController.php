<?php

namespace App\Http\Controllers;

use App\Models\Datasheet;
use App\Models\Room;
use App\Models\Session;
use App\Models\Instructor;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {


    }

    public function create(){
        $datasheets = Datasheet::all();
        $rooms = Room::all();
        $instructors = Instructor::all();
        return view('sessions.create', ['datasheet'=>$datasheets,'room'=>$rooms,'instructor'=>$instructors ]);
    }

    public function store(Request $request){

        $session=new Session();
        $session->observacion=$request->observacion;
        $session->fecha_inicio=$request->fecha_inicio;
        $session->fecha_fin=$request->fecha_fin;
        $session->ficha_id=$request->ficha_id;
        $session->ambiente_id=$request->ambiente_id;
        $session->instructor_id=$request->instructor_id;
        $session->slug=$request->slug;
        $session->save();

    }
}
