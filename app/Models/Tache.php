<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
  use HasFactory;

  protected $fillable = ['nom', 'cout', 'etat', 'projet_id'];

  public function projet()
  {
    return $this->belongsTo(Projet::class);
  }

  public function employes()
  {
    return $this->belongsToMany(Employee::class, 'employee_tache');
  }
}
