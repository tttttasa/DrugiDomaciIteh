<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZaposlenisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zaposlenis', function (Blueprint $table) {
            $table->id();
            $table->string('imeprezime');
            $table->string('brojtelefona');
            $table->string('email');
            $table->foreignId('direktor_id')->constrained('direktors');
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
        Schema::dropIfExists('zaposlenis');
    }
}
