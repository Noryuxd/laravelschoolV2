<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('taches', function (Blueprint $table) {
      $table->id();
      $table->string('nom');
      $table->float('cout');
      $table->enum('etat', ['en cours', 'finie']);
      $table->unsignedBigInteger('projet_id');
      $table->foreign('projet_id')->references('id')->on('projets')->onDelete('cascade');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('taches');
  }
};
