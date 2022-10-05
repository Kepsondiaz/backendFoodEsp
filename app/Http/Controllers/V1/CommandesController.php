<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Commandes;
use Illuminate\Http\Request;

class CommandesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commandes = Commandes::OrderbyDesc('id')->get();
        return response([$commandes], 200);
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
     * @param  \App\Models\Commandes  $commandes
     * @return \Illuminate\Http\Response
     */
    public function show(Commandes $commandes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commandes  $commandes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commandes $commandes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commandes  $commandes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commandes $commandes)
    {
        //
    }
}
