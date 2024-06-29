<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReporteController extends Controller
{
    public function index(Request $request){
         
        
        $proyec = $request->get('CampoProyec');

        $datos = DB::table('dis')
              ->where('estado','abierto')
              ->select('molecula','bodega','cantidad','estado')
              ->paginate(15);
        return view('reporte.index',compact('datos','proyec'));
    }
}
