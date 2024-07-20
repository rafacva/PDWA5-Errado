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
        Schema::create('meteos', function (Blueprint $table) {
            $table->id();
            // $table->string('cidade');
            $table->decimal('precipitacao');
            $table->decimal('tempMin');
            $table->decimal('tempMax');
            $table->decimal('umidMin');
            $table->decimal('umidMax');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meteos');
    }
};

