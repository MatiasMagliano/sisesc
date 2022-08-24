<?php

use App\Models\Estudiante;
use App\Models\Padre;
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
        Schema::create('estudiante_padre', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Estudiante::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Padre::class)->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiante_padre');
    }
};
