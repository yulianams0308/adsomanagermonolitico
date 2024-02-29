<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use App\Models\Datasheet;
use App\Models\User;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    public function index()
    {

    }


    public function create() {
        $datasheets = Datasheet::all();

        $users = User::whereHas('role', function ($query) {
            $query->where('nombre_rol', 'Aprendiz');
        })->get();

        return view('apprentices.create', ['datasheet' => $datasheets, 'users' => $users]);
    }

    public function store(Request $request){

        $apprentice=new Apprentice();
        $apprentice->estado=$request->estado;
        $apprentice->etapa=$request->etapa;
        $apprentice->ficha_id=$request->ficha_id;
        $apprentice->user_id=$request->user_id;
        $apprentice->slug=$request->slug;
        $apprentice->save();
    }


    
}
