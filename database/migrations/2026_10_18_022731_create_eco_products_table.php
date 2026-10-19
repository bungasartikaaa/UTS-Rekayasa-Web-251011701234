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
        Schema::create('eco_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('material');
            $table->decimal('price', 12, 2);
            $table->decimal('eco_rating', 3, 1);
            $table->string('image');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eco_products');
    }
};
