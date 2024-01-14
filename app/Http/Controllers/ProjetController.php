<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $projets = Projet::paginate(3);
    return view("projets.index",compact("projets"));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $employes = Employee::all();
    return view("projets.form", compact("employes"));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'nom' => 'required|string|max:255',
      "description" =>  'required|string|max:255',
      'budget' => 'required|numeric',
      'nombre_taches' => 'required|integer',
      'employes' => 'required|array',
    ]);

    $projet = Projet::create($validatedData);

    $projet->employes()->attach($validatedData['employes']);

    return redirect("/projets");
  }

  /**
   * Display the specified resource.
   */
  public function show(Projet $projet)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Projet $projet)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Projet $projet)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Projet $projet)
  {
    //
  }
}
