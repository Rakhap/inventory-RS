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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('item_name')->nullable();
            $table->string('item_brand')->nullable();
            $table->string('item_type')->nullable();
            $table->string('serial_number')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('tahun_perolehan')->nullable();
            $table->string('masa_kalibrasi')->nullable();
            $table->string('kondisi_alat')->nullable();
            $table->string('daya')->nullable();
            $table->string('item_keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
