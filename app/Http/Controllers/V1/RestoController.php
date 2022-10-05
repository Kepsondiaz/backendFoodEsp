<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Restaurants;
use Illuminate\Http\Request;

class RestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restos = Restaurants::OrderbyDesc('id')->get(); 
        if(!$restos)
        {
            return response([
                'message' => 'Restaurants not found.'
            ], 403);
        }
        return response([$restos], 200); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valideAttr = $request->validate([
            'nomResto' => 'required|String',
            'adressResto' => 'required|String',
            'imagesResto' => 'required|String'
        ]);

        Restaurants::create([
            'nomResto' => $valideAttr['nomResto'],
            'adressResto' => $valideAttr['adressResto'],
            'imagesResto' => $valideAttr['imagesResto'],
            'notesResto' => 0
        ]);

        return response([
            'message' => 'Restaurant created'
        ], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurants  $restaurants
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $restos = Restaurants::where('id', $id)->get(); 
        return response([$restos], 200); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Restaurants  $restaurants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $restos = Restaurants::find($id); 
        
        $valideAttr = $request->validate([
            'notesResto' => 'Integer'
        ]);

        $restos->update([
            'notesResto' => $valideAttr['notesResto']
        ]);

        return response([
            'message' => 'Notes ajoutée avec succees'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurants  $restaurants
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurants $restaurants)
    {
        //
    }
}
