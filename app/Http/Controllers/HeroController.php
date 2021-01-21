<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get data from DB
        $heroes = Hero::all();
        //dd($heroes);

        //Indico la rotta di destinazione utilizzando il route:list e uso il compact() per portare nella rotta i miei dati
        return view('heroes.index', compact('heroes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('heroes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //istanza che ci fa accedere ai dati dentro la form
    {
        $data = $request->all();
        //dd($data);


        //Valido i dati ricevuti come array con indici associativi
        $request->validate([
            'name' => 'required|unique:heroes|max:20',
            'symbol' => 'required',
            'description' => 'required'
        ]);


        //Salvo il dato nel DB
        $hero = new Hero();
        $hero->name = $data['name'];
        $hero->symbol = $data['symbol'];
        $hero->description = $data['description'];


        //Se tutto ok mi ritornerà un true
        $saved = $hero->save();


        //Confermati i dati e se sono true, rimando alla rotta
        if ($saved) {
            return redirect()->route('heroes.show', $hero->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Hero $hero)
    {
        return view('heroes.show', compact('hero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
