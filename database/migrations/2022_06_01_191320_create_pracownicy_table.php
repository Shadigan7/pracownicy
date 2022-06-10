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
        Schema::create('pracownicy', function (Blueprint $table) {
            $table->id();
            $table->string('Imie');
            $table->string('Nazwisko');
            $table->string('Stanowisko');
            $table->date('Data_urodzenia');
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
        Schema::dropIfExists('pracownicy');
    }
};
