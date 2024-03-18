<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagazijnTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('magazijn', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id'); // Zorg ervoor dat dit een unsigned big integer is
            $table->foreign('product_id')->references('id')->on('product');
            $table->decimal('VerpakkingsEenheid', 8, 2);
            $table->integer('AantalAanwezig')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('magazijn');
    }
}
