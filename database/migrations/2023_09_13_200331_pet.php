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
            //$table->string('color'); //Negro
            $table->string('size')->nullable(); //Mediano
            $table->string('sex')->nullable(); //Macho
            $table->longText('description'); //Perro bastardo
            $table->string('age')->nullable(); //cachorro, adulto, adulto mayor
            $table->enum('status',['En Adopcion','En Proceso','Adoptado']); //1-En adopcion 2. En proceso de adopcion 3. Adoptado
            $table->timestamps();

            //LLaves foraneas
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('color_id');

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->cascadeOnDelete('cascade');
            $table->foreign('color_id')->references('id')->on('colors')->cascadeOnDelete('cascade');

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
