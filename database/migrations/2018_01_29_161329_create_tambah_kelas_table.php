<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTambahKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
              Schema::table('siswa', function($table) {
            $table->unsignedInteger('id_kelas')->after('id_guru')->nullable();
            $table->foreign('id_kelas')->references('id')->on('kelas')->onDelete('CASCADE');
       //----------------------------------------------------------------------------------S
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::table('siswa', function($table) {
            $table->dropColumn('id_kelas');
        });
    }
}
