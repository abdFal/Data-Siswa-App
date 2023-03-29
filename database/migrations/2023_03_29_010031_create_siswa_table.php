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
    Schema::create('siswa', function (Blueprint $table) {
    $table->id();
    $table->string('nama');
    $table->string('kelas');
    $table->timestamps();
});

    DB::statement('ALTER TABLE siswa AUTO_INCREMENT = 1');
    DB::statement('ALTER TABLE siswa MODIFY COLUMN kelas VARCHAR(100) NOT NULL');
    
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
