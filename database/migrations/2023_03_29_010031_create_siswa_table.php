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
    Schema::table('siswa', function (Blueprint $table) {
        $table->id()->onDelete('cascade');
        $table->string('nama');
        $table->string('kelas');
        $table->timestamps();
        $table->enum('jurusan',['TKJ', 'RPL', 'DMM']);
    });

    DB::statement('ALTER TABLE siswa MODIFY COLUMN kelas VARCHAR(100) NOT NULL');
    DB::statement('TRUNCATE TABLE siswa');
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
