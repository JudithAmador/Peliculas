<?php

namespace App\Http\Controllers\Admin;
use App\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
      
        $dats= File::all();
        return view('admin.home', ['dats'=>$dats]);
        
       
    }
   /* public function Buscar(Request $request)
    {
      $titl= $request->get('search');
        $dats= File::where('Titulo','like','%$titl%')->paginate(12);
        return view('header', ['dats'=>$dats]);
        
       
    }*/

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        //FILE ES EL MODELO
        $f= new File();
        $f->Titulo= $request->titulo;
        $f->Genero=$request->genero;
        $f->Actores=$request->actores;
        $f->Descripcion=$request->descripcion;
        if($request->hasFile('foto'))
        {
            $file=$request->file('foto');

            $file->move(public_path(). '/img', $file->getClientOriginalName());
            $f->Urlimagen=$file->getClientOriginalName();
        }
        $f->UrlPelicula=$request->enlace;
        if($f->save())
        {
            return redirect('admin');
        }
        
     /* $datos = request()->except('_token');
      File::insert($datos);
      return response()->json($datos);*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dats= File::all();
        return view('inicio', ['dats'=>$dats]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dat= File::find($id);

        return view('admin.editar', compact('dat'));
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
        $f= new File();
        $f->Titulo= $request->titulo;
        $f->Genero=$request->genero;
        $f->Actores=$request->actores;
        $f->Descripcion=$request->descripcion;
        
        $f->UrlPelicula=$request->enlace;
        if($f->save())
        {
            return redirect("/admin");
        }
        else{
            return view('admin.editar', ['dat'=>$f]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       File::destroy($id);
       return redirect("/admin");
    }
}
