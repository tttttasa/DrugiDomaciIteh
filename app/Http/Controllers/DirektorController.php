<?php

namespace App\Http\Controllers;

use App\Http\Resources\DirektorResource;
use App\Models\Direktor;
use Illuminate\Http\Request;

class DirektorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DirektorResource::collection(Direktor::all());
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
     * @param  \App\Models\Direktor  $direktor
     * @return \Illuminate\Http\Response
     */
    public function show($direktor_id)
    {
        return new DirektorResource(Direktor::find($direktor_id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Direktor  $direktor
     * @return \Illuminate\Http\Response
     */
    public function edit(Direktor $direktor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Direktor  $direktor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Direktor $direktor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Direktor  $direktor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Direktor $direktor)
    {
        //
    }
}
