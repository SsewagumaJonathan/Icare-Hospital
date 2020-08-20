<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBedallotmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bedallotments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Bed_Number')->unique();
            $table->integer('patients_id')->nullable();
            $table->string('Allotment_Type')->nullable();
            $table->dateTime('Discharge_Time')->nullable();
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
        Schema::dropIfExists('bedallotments');
    }
}
