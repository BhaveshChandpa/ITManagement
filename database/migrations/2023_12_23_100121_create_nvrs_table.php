<?php

use App\Models\Switchh;
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
            $table->string('location');
            $table->ipAddress('ip');
            $table->integer('channel');
            $table->integer('hdd');
            $table->string('storage');
            $table->integer('two_tb');
            $table->integer('six_tb');
            $table->integer('eight_tb');
            $table->integer('ten_tb');
            $table->string('remark');
            $table->foreignId('hpe_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvrs');
        Schema::dropIfExists('hpes');
    }
};
