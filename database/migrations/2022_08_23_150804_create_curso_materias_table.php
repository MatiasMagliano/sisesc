<?php

use App\Models\Curso;
use App\Models\Docente;
use App\Models\Materia;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_materias', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Materia::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Curso::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Docente::class)->constrained()->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curso_materias');
    }
};
