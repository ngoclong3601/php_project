<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job', function (Blueprint $table) {
            $table->bigIncrements('id_job');
            $table->string('jobname');
            $table->string('description');
            $table->date('deaddate');
            $table->string('experience');
            $table->string('location');
            $table->string('job_gender');
            $table->float('quantity_person');
            $table->string('min_salary');
            $table->string('max_salary');
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
        Schema::dropIfExists('job');
    }
}
