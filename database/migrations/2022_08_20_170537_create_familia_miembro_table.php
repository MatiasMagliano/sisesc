<?php

use App\Models\Estudiante;
use App\Models\Familia;
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
        Schema::create('familia_miembro', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Padre::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Familia::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Estudiante::class)->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('familia_miembro');
    }
};
