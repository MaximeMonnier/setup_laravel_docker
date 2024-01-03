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
        Schema::create('profile', function (Blueprint $table) {
            $table->id('profile');
            $table->string('nom_profile', 50);
            $table->longText('prenom_profile');
            $table->longText('city_profile');
            $table->longText('email_profile');
            $table->longText('password_profile');
            $table->longText('type_profile');
            $table->longText('permission_profile');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
