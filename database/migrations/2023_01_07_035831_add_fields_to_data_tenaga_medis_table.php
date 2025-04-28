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
        Schema::table('data_tenaga_medis', function (Blueprint $table) {
            $table->string('nama');
            $table->tinyInteger('umur');
            $table->string('email');
            $table->string('no_telp');
            $table->string('gender');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_tenaga_medis', function (Blueprint $table) {
            $table->dropColumn('nama');
            $table->dropColumn('umur');
            $table->dropColumn('email');
            $table->dropColumn('no_telp');
            $table->dropColumn('gender');
        });
    }
};
