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
        Schema::create('students', function (Blueprint $table) {
            // $table->id();
            $table->string('nim')->primary();
            $table->string('name');
            $table->string('email');
            $table->text('alamat');
            $table->integer('semester');
            $table->string('no_hp');
            $table->string('tempat_lahir');
            $table->boolean('jk');
            $table->string('tahun_masuk');
            $table->enum('status', ['aktif', 'nonaktif', 'cuti']);
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
        Schema::dropIfExists('students');
    }
};