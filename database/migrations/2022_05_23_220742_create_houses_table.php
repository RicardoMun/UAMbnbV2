<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('description');
            $table->string('area');
            $table->string('maximun_capacity');
            $table->string('photos');
            $table->string('characteristics');
            /* agregado */
            $table->string('location');
            /* $table->string('propietario'); */
            $table->float('price');
            $table->foreignId('user_id')->reference('id')->on('users');
            //$table->foreignId('arrendamiento_id')->reference('id')->on('arrendamiento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houses');
    }
}
