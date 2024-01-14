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
    Schema::create('employee_tache', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('employee_id');
      $table->unsignedBigInteger('tache_id');
      $table->timestamps();

      $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
      $table->foreign('tache_id')->references('id')->on('taches')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('employee_tache');
  }
};
