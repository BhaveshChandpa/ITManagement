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
        Schema::create('nvrs', function (Blueprint $table) {
            $table->id();
            // $table->string('location');
            // $table->ipAddress('ip');
            // $table->integer('channel');
            // $table->integer('hdd');
            // $table->string('storage');
            // $table->integer('2tb');
            // $table->integer('6tb');
            // $table->integer('8tb');
            // $table->integer('10tb');
            // $table->string('remark');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvrs');
    }
};
