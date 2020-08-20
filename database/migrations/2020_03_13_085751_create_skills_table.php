<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Skill_Name')->unique();
            $table->integer('employee_id')->nullable();
            $table->year('Start_Date')->nullable();
            $table->longText('Employee_History')->nullable();
            $table->string('Skill_Level')->nullable();
            $table->dateTime('Interviewed_Date')->nullable();
            $table->string('Interviewed_Status')->nullable();
            $table->string('Score')->nullable();
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
        Schema::dropIfExists('skills');
    }
}
