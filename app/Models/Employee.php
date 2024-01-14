<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  use HasFactory;

  protected $fillable = [
    'nom',
    'email',
    "phone",
    "salaire",
    "section",
    "image"
  ];

  public function taches()
  {
    return $this->belongsToMany(Tache::class, 'employee_tache');
  }

  public function employes()
  {
    return $this->belongsToMany(Employee::class, 'employee_tache');
  }

  public function projets()
  {
    return $this->belongsToMany(Projet::class, 'employee_projet');
  }

  public function calculerEtMettreAJourSalaire()
  {
    $nombreTaches = $this->taches()->count();
    $salaireParTache = $this->taches()->avg('cout');

    $salaireTotal = $nombreTaches * $salaireParTache;

    $this->update(['salaire' => $salaireTotal]);
  }
}
