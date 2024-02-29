<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Session;
use App\Models\Apprentice;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Instructor;

class AttendanceController extends Controller
{
    public function index(){



    }
    // $user = User::find(1);
    // $estado = $user->apprentice->estado;
    // $etapa = $user->apprentice->etapa;

    public function create(){

        $apprendices = Apprentice::all();
        $instructors = Instructor::all();
        $sessions = Session::all();

        return view('attendances.create', ['sessions'=>$sessions, 'apprendices'=>$apprendices, 'instructor'=>$instructors]);
    }

    public function store(Request $request) {

        // $aprendicesNoAsistieron = $request->input('aprendices_no_asistieron');

        // foreach ($aprendicesNoAsistieron as $aprendizId)
        // {
            $attendance = new Attendance();
            $attendance->aprendiz_id = $request->aprendiz_id;
            $attendance->session_id = $request->session_id;
            $attendance->asistio = false;
            $attendance->slug = $request->slug;
            $attendance->session_id=$request->session_id;
            $attendance->instructor_id=$request->instructor_id;
            $attendance->save();
        // }
    }
}
