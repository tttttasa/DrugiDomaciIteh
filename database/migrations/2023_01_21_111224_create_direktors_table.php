<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirektorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direktors', function (Blueprint $table) {
            $table->id();
            $table->string('imeprezime');
            $table->string('sektor');
            $table->string('email');
            $table->foreignId('firma_id')->constrained('firmas');
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
        Schema::dropIfExists('direktors');
    }
}
