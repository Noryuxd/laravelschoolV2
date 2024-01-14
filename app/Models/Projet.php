<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
  use HasFactory;

  protected $fillable = [
    'nom',
    'description',
    'budget',
    "nombre_taches"
  ];

  public function employes()
  {
    return $this->belongsToMany(Employee::class);
  }
}
