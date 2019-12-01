<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //

            $table->text('role')->nullable();
            $table->text('phone')->nullable();
            $table->text('father')->nullable();
            $table->text('mother')->nullable();
            $table->text('education')->nullable();
            $table->text('occupation')->nullable();
            $table->text('occupation_type')->nullable();
            $table->text('occupation_institution')->nullable();
            $table->integer('family_member')->nullable();
            $table->dateTime('dob')->nullable();
            $table->text('region')->nullable();
            $table->text('permanent_area')->nullable();
            $table->text('present_area')->nullable();
            $table->text('nid')->nullable();
            $table->text('passport')->nullable();
            $table->enum('status',['pending','active','suspended','wanted','inactive'])->default('pending');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
