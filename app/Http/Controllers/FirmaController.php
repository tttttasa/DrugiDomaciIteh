<?php

namespace App\Http\Controllers;

use App\Http\Resources\FirmaResource;
use App\Models\Firma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FirmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FirmaResource::collection(Firma::all());
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
        $validator = Validator::make($request->all(), [
            'naziv' => 'required|string',
            'adresa' => 'required|string',
            'grad' => 'required|string',
            'drzava' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json(['Greska pri validaciji!', $validator->errors()]);
        }


        Firma::create([
            'naziv' => $request->naziv,
            'adresa' => $request->adresa,
            'grad' => $request->grad,
            'drzava' => $request->drzava,
        ]);

        return response()->json('Firma je kreirana');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Firma  $firma
     * @return \Illuminate\Http\Response
     */
    public function show($firma_id)
    {
        return new FirmaResource(Firma::find($firma_id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Firma  $firma
     * @return \Illuminate\Http\Response
     */
    public function edit(Firma $firma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Firma  $firma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Firma $firma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Firma  $firma
     * @return \Illuminate\Http\Response
     */
    public function destroy($firma_id)
    {
        Firma::find($firma_id)->delete();

        return response()->json('Izabrana firma je obrisana');
    }
}
