<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        
        $roles = Role::all();

        return view('roles.index',['roles'=>$roles]);

    }

    public function create(){
        
        return view('roles.create');
    }

    public function store(Request $request){

        $role=new Role();
        $role->nombre_rol=$request->nombre_rol;
        $role->save();
        return redirect()->route('roles.show', $role);

    }

    public function show(Role $role){               
        return view('roles.show',compact('datasheet'));
    }

    public function destroy (Role $role){
        
        $role->delete();
        return redirect()->route('roles.index');
    }

    public function edit(Role $role){
       
        return view('roles.edit',compact('role'));
    }

    public function update(Request $request, Role $role){
        $role->nombre_rol = $request->nombre_rol;       
        $role->save();
          
    
        return redirect()->route('roles.show');
        }
        

}
