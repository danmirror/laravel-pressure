<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_points', function (Blueprint $table) {
            $table->id();
            $table->string('min_pressure');
            $table->string('max_pressure');
            $table->string('min_volume');
            $table->string('max_volume');
            $table->string('min_boiler');
            $table->string('max_boiler');
            $table->string('min_condensor');
            $table->string('max_condensor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('set_points');
    }
}
