<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlooddonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blooddonors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Name')->unique();
            $table->string('Email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('Gender')->nullable();
            $table->string('Age')->nullable();
            $table->string('Address')->nullable();
            $table->string('Blood_Group')->nullable();
            $table->dateTime('Donate_Date')->nullable();
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
        Schema::dropIfExists('blooddonors');
    }
}
