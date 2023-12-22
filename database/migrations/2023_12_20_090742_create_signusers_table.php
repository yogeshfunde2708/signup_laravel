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
        Schema::create('signusers', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('username');
            $table->string('gender');
            $table->string('password');
            $table->string('confirmpassword');
            $table->string('date_added');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('signusers');
    }
};
