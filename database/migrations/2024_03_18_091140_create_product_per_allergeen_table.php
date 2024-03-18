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
        Schema::create('productperallergeen', function (Blueprint $table) {
            $table->id(); // Creates the Id (PK)
            $table->unsignedBigInteger('product_id'); // Creates the ProductId (FK)
            $table->foreign('product_id')->references('id')->on('product'); // Specifies that ProductId is a FK
            $table->unsignedBigInteger('allergeen_id'); // Creates the AllergeenId (FK)
            $table->foreign('allergeen_id')->references('id')->on('allergeen'); // Specifies that AllergeenId is a FK
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productperallergeen');
    }
};