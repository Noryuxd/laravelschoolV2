<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $employees = Employee::paginate(3);
    $projets = Projet::all();

    return view("employees.index", compact("employees","projets"));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view("employees.form");
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validated = $request->validate([
      'nom' => 'required|max:255',
      'email' => 'required|email|max:255',
      'phone' => 'required',
      'section' => 'required|max:255',
      "image" => "image"
    ]);
    if ($request->hasFile("image")) {
      $validated['image'] = $request->file("image")->store('images', 'public');
    }
    Employee::create($validated);

    return redirect("/employees");
  }


  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Employee $employee)
  {
    return view("employees.edit", compact("employee"));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Employee $employee)
  {
    $validated = $request->validate([
      'nom' => 'required|max:255',
      'email' => 'required|email|max:255',
      'phone' => 'required',
      'section' => 'required|max:255',
      "image" => "image"
    ]);
    if ($request->has("image")) {
      $imagePath = request()->file("image")->store("profile", "public");
      $validated["image"] = $imagePath;

      Storage::disk("public")->delete($employee->image);
    }

    $employee->update($validated);
    return redirect("/employees");
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Employee $employee)
  {
    if ($employee) {
      $employee->delete();
      return redirect("/tp-5/show");
    }
  }
}
