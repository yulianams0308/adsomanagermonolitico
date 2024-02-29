<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datasheet;

class PanelController extends Controller
{
    public function index()
    {
        $datasheets = Datasheet::all();

        return view('panel.panel',['datasheet'=>$datasheets]);
    }
}
