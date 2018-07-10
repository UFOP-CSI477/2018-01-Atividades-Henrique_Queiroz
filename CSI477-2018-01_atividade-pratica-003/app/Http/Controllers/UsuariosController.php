<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Procedimento;
use App\Exame;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function login(Request $request)
    {
        $usuarios = Usuario::orderBy('name')->get();

        $esse = $usuarios->where('email', $request->email)->where('password', $request->password);

        foreach ($esse as $e) {
            if ($e->type == 1) {
               return view('usuarios.areaAdministrador')->with('e', $e);
            }
            else if ($e->type == 2){
                $procedimentos = Procedimento::orderBy('name')->get();
                return view('usuarios.areaOperador')->with('procedimentos', $procedimentos);
            }
            else if ($e->type == 3){
                return view('usuarios.areaPaciente')->with('e', $e);
            }
            else if ($e->type == null){
                return view('layout.principal');
            }
        }
    }

    public function cadastraPaciente()
    {
        return view('usuarios.cadastraPaciente');
    }

    public function cadastraAdm()
    {
        return view('usuarios.cadastraAdm');
    }

    public function areaPaciente()
    {
        $usuarios = Usuario::all();

        return view('usuarios.areaPaciente')->with('usuarios', $usuarios);
    }

    public function areaAdministrador()
    {
        return view('usuarios.areaAdministrador');
    }

    public function areaOperador()
    {
        $procedimentos = Procedimento::orderBy('name')->get();
        return view('usuarios.areaOperador')->with('procedimentos', $procedimentos);
    }

    public function cadastraExame()
    {
        $procedimentos = Procedimento::all();

        return view('exames.cadastraExame')->with('procedimentos', $procedimentos);
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
        //$request->request->add(['type'=>'3']);

        Usuario::create($request->all());
        $request->session()->flash('mensagem', 'Usuário inserido com sucesso!');

        if($request->type == 3){
            return redirect('/');
        }
        else{
            return view('usuarios.areaAdministrador');
        }
    }

    public function listaUsuarios()
    {
        $usuarios = Usuario::orderBy('name')->get();

        return view('usuarios.listaUsuarios')->with('usuarios', $usuarios);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        return view('usuarios.areaAdministrador');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
