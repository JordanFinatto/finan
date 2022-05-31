<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Receita;

class ControladorReceita extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $receitas = Receita::all();
        return view('receitas', compact('receitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novareceita');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $receita = new Receita();
        $receita->nome = $request->input('nomeReceita');
        $receita->save();
        return redirect('/receitas');
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
        $receita = Receita::find($id);
        if(isset($receita)) {
            return view('editarreceita', compact('receita'));
        }
        return redirect('/receitas');
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
        $receita = Receita::find($id);
        if(isset($receita)) {
            $receita->nome = $request->input('nomeReceita');
            $receita->save();
        }
        return redirect('/receitas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $receita = Receita::find($id);
        if (isset($receita)) {
            $receita->delete();
        }
        return redirect('/receitas');
    }
}































