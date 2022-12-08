<?php

use App\Models\Estudiante;
use App\Models\Familia;
use App\Models\Padre;
use App\Models\User;
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
            $table->unsignedBigInteger('padre_id');
            $table->unsignedBigInteger('familia_id');
            $table->unsignedBigInteger('estudiante_id');

            $table->foreign('padre_id')->references('id')->on('users');
            $table->foreign('familia_id')->references('id')->on('users');
            $table->foreign('estudiante_id')->references('id')->on('users');
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
