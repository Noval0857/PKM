<?php

namespace App\Http\Controllers;


//import model product
use App\Models\Alat; 

//import return type View
use Illuminate\View\View;

class AlatController extends Controller
{
    public function index()
    {
        $alats = Alat::all(); // Mendapatkan semua data Alat dari basis data
        return view('index', ['alats' => $alats]);
    }
}
