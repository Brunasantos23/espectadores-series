<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Espectador;

class EspectadorController extends Controller
{
    /**
     * Global private declarations.
     */
    private $espectores;

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct(Espectador $espectadores){
        $this->espectadores = $espectadores;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $espectadores = $this->espectadores->all();
        return view('espectadores.index', compact('espectadores'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('espectadores.form');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $espectador = $this->espectadores->create(array(
           'nome'=>$request->nome ,
           'idade'=>$request->idade));
           return redirect()->route('espectador.show',$espectador->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $espectador = $this->espectadores->find($id);
        return view('espectadores.form', compact('espectador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $espectador = $this->espectadores->find($id);
        return view('espectadores.form', compact('espectador'));
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
        $espectador = $this->espectadores->find($id);

        $espectador = $espectador->update(array(
            'nome'=>$request->nome ,
            'idade'=>$request->idade));

        return redirect()->route('espectador.show',$id);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $espectador = $this->espectadores->find($id);
        $deleted = $espectador->delete();
        return redirect()->route('espectador.index');

    }
}
