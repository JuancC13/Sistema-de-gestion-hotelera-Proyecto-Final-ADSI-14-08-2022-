<?php

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
        //Al ejecutar migraciones con php artisan migrate se generara la siguiente tabla
        Schema::create('tipo_habitacions', function (Blueprint $table) {
            //Al ejecutar migraciones con php artisan migrate se generaran la siguientes campos en la tabla
            $table->id();
            $table->string('title');
            $table->text('derail');
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
        Schema::dropIfExists('tipo_habitacions');
    }
};
