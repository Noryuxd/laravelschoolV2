<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Projet;
use App\Models\Tache;
use Illuminate\Http\Request;

class TacheController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $taches = Tache::with('projet', 'employes')->paginate(10);
    return view('taches.index', compact('taches'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $employes = Employee::all();
    $projets = Projet::all();
    return view('taches.form', compact(["employes", "projets"]));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'nom' => 'required|string|max:255',
      'cout' => 'required|numeric',
      'etat' => 'required|string|in:en cours,finie',
      'projet_id' => 'required|exists:projets,id',
      'employes' => 'array',
    ]);

    $tache = Tache::create($validatedData);

    if ($request->has('employes')) {
      $tache->employes()->attach($request->input('employes'));

      foreach ($tache->employes as $employee) {
        $employee->calculerEtMettreAJourSalaire();
      }
    }

    return redirect("/taches");
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
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $tache = Tache::find($id);
    $tache->employes()->detach();
    $tache->delete();

    return redirect("/taches");
  }
}
