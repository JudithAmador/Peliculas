<?php

namespace App\Http\Controllers\usuario;
use App\File;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class FileControllerUs extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
        public function inicio(Request $request)
    {
      
        $titl=$request->get('search');
        $dats=File::where('Titulo','like',"%$titl%")->get();
       
        return view('inicio', compact('dats'));
       /* $dats= File::paginate(12);
        return view('inicio', ['dats'=>$dats]);*/
        
       
    }
    public function BuscarPeliculas($titl)
    {
        $Filtro=File::where('Genero', 'LIKE', "%$titl%")->get();
        
        return view('Peliculas', compact('Filtro'));
    }

    public function ConsultarSerie($cat)
    {
        $Filtro=File::where('Genero', 'LIKE', "%$cat%")->get();
       
        return view('Series', compact('Filtro'));
    }
    public function ConsultarRomance($rom)
    {
        $Filtro=File::where('Genero', 'LIKE', "%$rom%")->get();
       
        return view('Romance', compact('Filtro'));
    }

    public function ConsultarAccion($cat)
    {
        $Filtro=File::where('Genero', 'LIKE', "%$cat%")->get();
       
        return view('Accion', compact('Filtro'));
    }
    public function ConsultarDrama($cat)
    {
        $Filtro=File::where('Genero', 'LIKE', "%$cat%")->get();
       
        return view('Drama', compact('Filtro'));
    }
    
    public function editReproductor($id)
    {
        $dat= File::find($id);

        return view('Reproductor', compact('dat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
