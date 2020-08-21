<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_result', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_id',100); 
            $table->integer('examcode',10);
            $table->Date('created_at');
            $table->Date('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_result');
    }
}
