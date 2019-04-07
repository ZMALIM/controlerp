<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Ubigeo;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function ubigeo()
    {
        //return datatables()->collection(Ubigeo::all())->toJson();
        // return datatables(Ubigeo::all())->toJson();
        return Ubigeo::all();
        //return Ubigeo::with('ubigeo')->get();
    }

    public function index()
    { 
        $ubigeos = File::get('ubigeo.json');
        $dat = json_decode($ubigeos, true);
        //$ubigeo = file_get_contents("ubigeo.json");

        return view('dashboard')->with(['ubigeos' => $dat, "leo"=>"que tal ahi"]);
    }
}
