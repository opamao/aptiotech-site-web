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
        Schema::create('candidatures', function (Blueprint $table) {
            $table->id('idcand')->primary();
            $table->string('cv_cand');
            $table->string('nom_cand');
            $table->string('email_cand');
            $table->string('github_cand')->nullable();
            $table->string('linkedin_cand')->nullable();
            $table->longText('message_cand')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidatures');
    }
};
