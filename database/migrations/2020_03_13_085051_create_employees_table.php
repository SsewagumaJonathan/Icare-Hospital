<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Name')->unique();
            $table->string('Email')->unique();
            $table->string('Status')->nullable()->default('active');
            $table->string('Gender')->nullable();
            $table->string('Role_Name')->nullable();
            $table->string('City')->nullable();
            $table->string('State')->nullable();
            $table->longText('Skills')->nullable();
            $table->string('Password');
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
        Schema::dropIfExists('employees');
    }
}
