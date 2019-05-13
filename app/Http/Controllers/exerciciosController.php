<?php

namespace App\Http\Controllers;

use App\exercicios;
use Illuminate\Http\Request;

class exerciciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaExercicios = exercicios::all();
        return view('exercicios.list',['exercicios' => $listaExercicios]);
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
     * @param  \App\exercicios  $exercicios
     * @return \Illuminate\Http\Response
     */
    public function show(exercicios $exercicios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\exercicios  $exercicios
     * @return \Illuminate\Http\Response
     */
    public function edit(exercicios $exercicios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\exercicios  $exercicios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, exercicios $exercicios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\exercicios  $exercicios
     * @return \Illuminate\Http\Response
     */
    public function destroy(exercicios $exercicios)
    {
        //
    }
}
