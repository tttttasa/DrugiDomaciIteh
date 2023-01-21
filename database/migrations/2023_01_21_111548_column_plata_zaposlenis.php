<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ColumnPlataZaposlenis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('zaposlenis', function (Blueprint $table) {
            $table->after('email', function ($table) {
                $table->integer('plata');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('zaposlenis', function (Blueprint $table) {
            $table->dropColumn('plata');
        });
    }
}
