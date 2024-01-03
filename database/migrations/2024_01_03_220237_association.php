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
        Schema::create('association', function (Blueprint $table) {
            $table->id('association');
            $table->string('name_association', 50);
            $table->string('membre_association', 50);
            $table->string('president_association', 50);
            $table->string('description_association', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('association');
    }
};
