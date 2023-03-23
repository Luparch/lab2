<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id('address_id');
            $table->timestamps();
            $table->string('denotation');
            $table->string('city');
            $table->string('street');
            $table->integer('house');
            $table->integer('floor');
            $table->integer('flat');
            $table->integer('intercom');
            $table->integer('customer_id')->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
