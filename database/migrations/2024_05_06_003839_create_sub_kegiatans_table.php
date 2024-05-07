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
        Schema::create('sub_kegiatans', function (Blueprint $table) {
            $table->uuid('id')->primary()->unique();
            $table->foreignUuid('kegiatan_id')->constrained('kegiatans');
            $table->string('kode')->unique();
            $table->string('nama_sub_kegiatan');
            $table->integer('pagu')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_kegiatans');
    }
};
