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
        Schema::create('qualifiers', function (Blueprint $table) {
            $table->id();
            $table->string('phrase');
            $table->integer('sentiment_level')->unsigned()->comment('0 being the worst and 100 the best');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phrases_dictionary');
    }
};
