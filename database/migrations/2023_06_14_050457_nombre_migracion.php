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
        Schema::create('materiales', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->enum('estado', ['ACTIVO', 'CANCELADO', 'ELIMINADO'])->default('ACTIVO');
            $table->string('nombre', 50);
            $table->longText('descripcion');
            $table->decimal('stock_minimo', 5, 2);  
            $table->bigInteger('categoria_id')->unsigned();
            $table->foreign('categoria_id')
                ->references('id')
                ->on('categorias')->onDelete('cascade');        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materiales');
    }
};
