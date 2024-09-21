<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("class_id")->unsigned();
            $table->foreign("class_id")->references("id")->on("kelas")->onDelete("cascade")->onUpdate("cascade");
            $table->string('nis', 5)->unique();
            $table->string('name',50);
            $table->enum('gender',['laki-laki','perempuan']);
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};