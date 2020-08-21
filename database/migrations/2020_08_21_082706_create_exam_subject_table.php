<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_subject', function (Blueprint $table) {
                  $table->increments('subject_id');
                  $table->string('examcode',255);
                  $table->string('subject',100);
                  $table->string('admin_id',100);
                  $table->string('admin_email',100);
                  $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam_subject');
    }
}
