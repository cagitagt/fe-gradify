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
        Schema::create('universitas', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('slug');
            $table->text('address');
            $table->enum('status_univ', ['PTN', 'PTS'])->default('PTN');
            $table->string('website')->nullable();
            $table->enum('akreditasi', ['Unggul', 'Baik', 'A', 'B'])->default('Unggul');
            $table->string('logo')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('biaya_kuliah')->nullable();
            $table->text('sejarah')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universitas');
    }
};
