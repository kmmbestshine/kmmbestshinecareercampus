<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_question', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('owner_email',100);
            $table->string('owner_id',100);
            $table->string('examcode',255); 
            $table->string('subject_code',255); 
            $table->string('subject',255);
            $table->TEXT('image')->nullable();
            $table->string('category',255); 
            $table->TEXT('question');
            $table->TEXT('option_A')->nullable();
            $table->TEXT('option_B')->nullable();
            $table->TEXT('option_C')->nullable();
            $table->TEXT('option_D')->nullable();
            $table->TEXT('image_A')->nullable();
            $table->TEXT('image_B')->nullable();
            $table->TEXT('image_C')->nullable();
            $table->TEXT('image_D')->nullable();
            $table->double('marks',8,2);
            $table->double('negative_marks',8,2);
            $table->TEXT('correct_option')->nullable();
            $table->TEXT('correct_answer')->nullable();
            $table->TEXT('level')->nullable();
            $table->TEXT('solution')->nullable();
            $table->rememberToken()->nullable();
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
        Schema::dropIfExists('exam_question');
    }
}
