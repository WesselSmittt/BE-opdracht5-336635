<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLeveringInfoToMagazijnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('magazijn', function (Blueprint $table) {
            $table->text('LeveringInfo')->nullable()->after('AantalAanwezig');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('magazijn', function (Blueprint $table) {
            $table->dropColumn('LeveringInfo');
        });
    }
}
