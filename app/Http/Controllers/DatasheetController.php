<?php

namespace App\Http\Controllers;

use App\Models\Datasheet;
use Illuminate\Http\Request;
use App\Models\Competence;

class DatasheetController extends Controller
{
    public function index()
    {
        $datasheets = Datasheet::all();

        return view('datasheets.index',['datasheets'=>$datasheets]);
    }

    public function create()
    {
        $competences = Competence::all();
        return view('datasheets.create', ['competences' => $competences]);
    }

    public function store(Request $request){

        $datasheet = new Datasheet();
        $datasheet->numero_ficha=$request->numero_ficha;
        $datasheet->programa=$request->programa;
        $datasheet ->slug=$request->numero_ficha;
        $datasheet->save();

        $datasheet->competences()->sync($request->input('competences', []));
        return redirect()->route('datasheets.show', $datasheet);
    }

    public function show(Datasheet $datasheet){

        $competences = $datasheet->competences;           
        return view('datasheets.show',compact('datasheet','competences'));
    }
 
    public function destroy (Datasheet $datasheet){
        
        $datasheet->delete();
        return redirect()->route('datasheets.index');
    }

    public function edit(Datasheet $datasheet){
        $competences = $datasheet->competences;
        // $competences = Competence::all();
        $competences = Competence::orderBy('id', 'asc')->get();

        $selectedCompetences = $datasheet->competences->pluck('id')->toArray();
        return view('datasheets.edit',compact('datasheet','competences', 'selectedCompetences'));
    }
        
    

    // public function update(Request $request, Datasheet $datasheet){
    //     $datasheet->numero_ficha=$request->numero_ficha;
    //     $datasheet->programa=$request->programa;
    //     $datasheet ->slug=$request->numero_ficha;
        
    //     $datasheet->save();
    //     $competences = $datasheet->competences;
    //     return view('datasheets.show',compact('datasheet','competences'));
    // }

    public function update(Request $request, Datasheet $datasheet){
    $datasheet->numero_ficha = $request->numero_ficha;
    $datasheet->programa = $request->programa;
    $datasheet->slug = $request->numero_ficha;
    $datasheet->save();

    // Synchronize the selected competences
    $datasheet->competences()->sync($request->input('competences', []));

    return redirect()->route('datasheets.show', $datasheet);
    }


    
    
    

        
        

     
}




