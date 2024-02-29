<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(){
 
        $rooms =  Room::orderBy('id', 'desc')->get();
       
        return view('rooms.listar', compact('rooms'));


    }

    public function create(){
        return view('rooms.create');
    }

    public function store(Request $request){

        $room=new Room();
        $room->num_salon=$request->num_salon;
        $room->sede=$request->sede;
        $room->capacidad=$request->capacidad;
        $room->observacion=$request->observacion;
        $room->slug=$request->slug;
        $room->save();

     //   return redirect()->route('rooms.create');


      }

}
