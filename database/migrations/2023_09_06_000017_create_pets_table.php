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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //Juanito
            $table->string('color'); //Negro
            $table->string('size'); //Mediano
            $table->string('sex'); //Macho
            $table->longText('description'); //Perro bastardo
            $table->string('age'); //cachorro, adulto, adulto mayor
            $table->enum('status',['Perdido','En Adopcion','Encontrado','Adoptado']); //1-Perdido 2-En adopcion 3-Encontrado 4-Adoptado
            $table->timestamps();

            //LLaves foraneas
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('type_id');

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->cascadeOnDelete('cascade');
            $table->foreign('type_id')->references('id')->on('types')->cascadeOnDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
