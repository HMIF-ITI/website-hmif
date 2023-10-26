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
        Schema::create('moments', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('title');
            $table->timestamps();
            $table->string('divisi')->nullable();
        });
    }

    // $division = json_encode(['humas', 'kominfo']); // store
    // $division = json_decode($data->division); // output, tinggal foreach

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('moments');
    }
};
