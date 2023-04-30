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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('paralelo')->nullable();
            $table->string('centro_docente')->nullable();
            $table->string('edad')->nullable();
            $table->string('sexo')->nullable();
            $table->string('donde_trabaja')->nullable();
            $table->string('nota_media')->nullable();
            $table->string('nota_alta')->nullable();
            $table->string('nota_baja')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
