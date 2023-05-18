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
        Schema::create('book_tenants', function (Blueprint $table) {
            $table->id();
            $table->string('CPF',11);
            $table->string('name');
            $table->strings('phone');
            $table->timestamps('rented_in');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_tenants');
    }
};
