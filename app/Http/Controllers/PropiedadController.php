<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propiedad;

class PropiedadController extends Controller
{
    //
    public function index(){
        $propiedades=Propiedad::all();//metodo que devuelve todos los registros en la tabla mapeada en el modelo Propiedades
    
        return view('home',compact('propiedades')); 

    
    }
    public function create(){
        return view('crear');
    }

    public function store(Request $request){
        $nvaPropiedad = new Propiedad();

        $nvaPropiedad->color = $request->input('color');
        $nvaPropiedad->metros = $request->input('metros');
        $nvaPropiedad->tipoPropiedad =  $request->input('tipoPropiedad');
        $nvaPropiedad->costoxmtr = $request->input('costomtr');
        $nvaPropiedad->codigoDuenio = $request->input('codigoduenio');
        $nvaPropiedad->direccion = $request->input('direccion');
        $nvaPropiedad->save();

        $propiedades= Propiedad::all();

        return redirect('/');
    }
}
