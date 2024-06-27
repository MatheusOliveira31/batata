<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations. frente
     */
    public function up(): void
    {
        Schema::create('animais', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->smallInteger('idade')->unsigned();
            $table->string('descricao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations. trás
     */ 
    public function down(): void
    {
        Schema::dropIfExists('animais');
    }
};
