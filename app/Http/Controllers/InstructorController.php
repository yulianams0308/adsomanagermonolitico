<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Datasheet;

class InstructorController extends Controller
{
    public function index(){



    }


    public function create(){

        $users = User::whereHas('role', function ($query)
        {
            $query->where('nombre_rol', 'Instructor');
        })->get();

        $datasheets = Datasheet::all();
        return view('instructors.create', ['users'=>$users]);
    }

    public function store(Request $request){

        $instructor=new Instructor();
        $instructor->profesion=$request->profesion;
        $instructor->user_id=$request->user_id;
        $instructor->slug=$request->slug;
        $instructor->save();
        // $instructor->datasheets()->sync($request->input('datasheets', []));
    }
}
