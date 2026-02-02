<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('input_aspirasis', function (Blueprint $table) {
            $table->id();
            $table->string('nis');
            $table->string('kategori');
            $table->string('lokasi')->nullable();
            $table->text('keterangan');
            $table->timestamps();

            $table->foreign('nis')->references('nis')->on('siswas')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('input_aspirasis');
    }
};
