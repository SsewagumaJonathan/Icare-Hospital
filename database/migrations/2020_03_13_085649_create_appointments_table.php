<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Name')->unique();
            $table->string('Email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('Disease')->nullable()->default('active');
            $table->string('Doctors')->nullable();
            $table->date('Date')->nullable();
            $table->dateTime('Time')->nullable();
            $table->string('Phone_Number')->nullable();
            $table->rememberToken();
            $table->softDeletes();
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
        Schema::dropIfExists('appointments');
    }
}
