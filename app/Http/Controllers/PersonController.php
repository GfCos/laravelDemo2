<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome',['persons' => Person::all(), 'titre' => "des gens"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newPerson = new Person;
        $newPerson->first_name = $request['first_name'];
        $newPerson->last_name = $request['last_name'];
        $newPerson->last_name = $request['last_name'];
        $newPerson->save();
        return redirect()->route('accueil');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $editPerson = Person::findOrFail($id);
        return view('edit',['person' => $editPerson, 'titre' => "editer"]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $modifyPerson = Person::findOrFail($id);
        $modifyPerson->first_name =  $request['first_name'];
        $modifyPerson->last_name =  $request['last_name'];
        $modifyPerson->save();
        return redirect()->route('accueil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Person::findOrFail($id)->delete();
        return redirect()->route('accueil')->with('flash', array("type" => "success", "message"=> "utilisateur effacé"));
    }
}
