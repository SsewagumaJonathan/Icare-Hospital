<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Name')->unique();
            $table->string('Email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('Status')->nullable()->default('active');
            $table->string('Gender')->nullable();
            $table->string('Address')->nullable();
            $table->string('Disease')->nullable();
            $table->string('Age')->nullable();
            $table->string('Date_of_Birth')->nullable();
            $table->string('Blood_Group');
            $table->string('Phone_Number');
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
