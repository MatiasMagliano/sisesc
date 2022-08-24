<?php

use App\Models\Barrio;
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
        Schema::create('contacto_persona', function (Blueprint $table) {
            $table->id();
            $table->string('direccion', 100);
            $table->string('telefono', 20);
            $table->string('correo_e');
            $table->integer('provincia_id');
            $table->bigInteger('localidad_id');
            $table->morphs('contactable');
            $table->foreignIdFor(Barrio::class)->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacto_persona');
    }
};
