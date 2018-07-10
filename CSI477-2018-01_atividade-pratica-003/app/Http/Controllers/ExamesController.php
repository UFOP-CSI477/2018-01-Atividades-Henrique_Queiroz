<?php

namespace App\Http\Controllers;

use App\Exame;
use App\Usuario;
use Illuminate\Http\Request;

class ExamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        Exame::create($request->all());
        $request->session()->flash('mensagem', 'Exame inserido com sucesso!');
        //return redirect('/areaPaciente');
    }

    public function listaExames()
    {
        $exames = Exame::orderBy('date')->get();
        return view('exames.lista')
          ->with('exames', $exames);
    }

    public function listaEspecifico(Request $request)
    {
        $todos = Exame::orderBy('date')->get();
        $exames = $todos->where('user_id', $request->user_id);

        return view('exames.listaEspecifico')
          ->with('exames', $exames);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Exame  $exame
     * @return \Illuminate\Http\Response
     */
    public function show(Exame $exame)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Exame  $exame
     * @return \Illuminate\Http\Response
     */
    public function edit(Exame $exame)
    {
         return view('exames.edit')
          ->with('exame', $exame);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Exame  $exame
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exame $exame)
    {
        $exame->date = $request->date;
        $exame->user_id = $request->user_id;
        $exame->procedure_id = $request->procedure_id;
        $exame->price = $request->price;
        $exame->save();

        $request->session()->flash('mensagem', 'Cidade atualizada com sucesso!');
        return redirect('/areaOperador');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Exame  $exame
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exame $exame)
    {
        //
    }
}
