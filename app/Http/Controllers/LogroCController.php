<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LogroC;

class LogroCController extends Controller
{
    public function index()
    {
        $logrocs = LogroC::all();
        return view('logrocs', compact ('logrocs'));
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
        LogroC::create([
            'nombres'=>$request->nombres,
            'cedula'=>$request->cedula,
            'partido'=>$request->partido,
            'numlista'=>$request->numlista,
            'votos'=>$request->votos,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LogroC  $logroC
     * @return \Illuminate\Http\Response
     */
    public function show(LogroC $logroC)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LogroC  $logroC
     * @return \Illuminate\Http\Response
     */
    public function edit(LogroC $logroC)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LogroC  $logroC
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LogroC $logroC)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LogroC  $logroC
     * @return \Illuminate\Http\Response
     */
    public function destroy(LogroC $logroC)
    {
        //
    }
}
