<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coareas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('area_id')->default(0);
            $table->integer('section_id')->default(0);
            $table->text('name')->nullable();
            $table->text('coarea_code')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
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
        Schema::dropIfExists('coareas');
    }
}
