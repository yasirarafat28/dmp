<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHouseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('house', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('owner_id');
            $table->text('name')->nullable();
            $table->text('house_number')->nullable();
            $table->text('area')->nullable();
            $table->text('co_area')->nullable();
            $table->text('section')->nullable();
            $table->text('gate_number')->nullable();
            $table->text('road_number')->nullable();
            $table->text('flat_qty')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('house');
    }
}
