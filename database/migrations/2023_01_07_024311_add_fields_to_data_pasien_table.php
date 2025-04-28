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
        Schema::table('data_pasiens', function (Blueprint $table) {
            $table->string('nama');
            $table->tinyInteger('umur');
            $table->string('gender');
            $table->string('no_telp');
            $table->date('tgl_perawatan');
            $table->string('keluhan');
            $table->longText('tindakan');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_pasiens', function (Blueprint $table) {
            $table->dropColumn('nama');
            $table->dropColumn('umur');
            $table->string('gender');
            $table->dropColumn('no_telp');
            $table->dropColumn('tgl_perawatan');
            $table->dropColumn('keluhan');
            $table->dropColumn('tindakan');
            $table->dropColumn('status');
        });
    }
};
