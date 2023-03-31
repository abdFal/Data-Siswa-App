<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('siswas', function (Blueprint $table) {
        $table->enum('jurusan',['TKJ', 'RPL', 'DMM', 'KGSP']);
    });
    DB::statement('ALTER TABLE siswa AUTO_INCREMENT = 1');
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
};
