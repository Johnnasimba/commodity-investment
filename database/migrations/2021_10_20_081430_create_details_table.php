<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('date_of_birth');
            $table->string('gander');
            $table->string('country');
            $table->string('address');
            $table->string('first_phone_number');
            $table->string('second_phone_number');
            $table->string('second_email');
            $table->string('annual_income');
            $table->string('source_of_funds');
            $table->string('occupation');
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
        Schema::dropIfExists('details');
    }
}
