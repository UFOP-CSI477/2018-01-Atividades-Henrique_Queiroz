<?php

namespace App\Http\Controllers;

use App\Procedimento;
use App\Usuario;
use Illuminate\Http\Request;

class ProcedimentosController extends Controller
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
        return view('procedimentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Procedimento::create($request->all());
        $request->session()->flash('mensagem', 'procedimento inserida com sucesso!');
        return redirect('/areaAdministrador');
    }

    public function listaProcedimentos()
    {
        $procedimentos = Procedimento::orderBy('name')->get();
        return view('procedimentos.lista')
                ->with('procedimentos', $procedimentos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Procedimento  $procedimento
     * @return \Illuminate\Http\Response
     */
    public function show(Procedimento $procedimento)
    {
        //
    }


    public function listaEdita()
    {
        $procedimentos = Procedimento::orderBy('name')->get();
        return view('procedimentos.listaEdita')
                ->with('procedimentos', $procedimentos);
    }

    public function editaPreco(Request $request)
    {   
        $todos = Procedimento::orderBy('name')->get();
        $esse = $todos->where('id', $request->id);

        foreach ($esse as $procedimento) {
            return view('procedimentos.editaPreco')
                        ->with('procedimento', $procedimento);
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Procedimento  $procedimento
     * @return \Illuminate\Http\Response
     */
    public function edit(Procedimento $procedimento)
    {   
        $usuarios = Usuario::orderBy('name')->get();
        return view('procedimentos.edit')
          ->with('procedimento', $procedimento)
          ->with('usuarios', $usuarios);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Procedimento  $procedimento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Procedimento $procedimento)
    {
        $procedimento->name = $request->name;
        $procedimento->price = $request->price;
        $procedimento->user_id = $request->user_id;
        $procedimento->save();
        $request->session()->flash('mensagem', 'Procedimento atualizado com sucesso!');

        return redirect('/areaAdministrador');
    }

    public function atualizaPreco(Request $request)
    {

        $todos = Procedimento::orderBy('name')->get();
        $esse = $todos->where('id', $request->id);

        foreach ($esse as $procedimento) {
            $procedimento->price = $request->price;
            $procedimento->save();
        }

        $request->session()->flash('mensagem', 'Procedimento atualizado com sucesso!');

        return redirect('/areaOperador');
    }

    public function listaExclui()
    {
        $procedimentos = Procedimento::orderBy('name')->get();
        return view('procedimentos.listaExclui')
                    ->with('procedimentos', $procedimentos);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Procedimento  $procedimento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Procedimento $procedimento)
    {
        $procedimento->delete();
        session()->flash('mensagem', 'Procedimento excluída com sucesso!');
        return redirect('/areaAdministrador');
    }
}
