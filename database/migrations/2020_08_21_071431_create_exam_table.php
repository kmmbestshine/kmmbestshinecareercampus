<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam', function (Blueprint $table) {
            
            $table->increments('examcode');
                $table->string('examtitle',100);
                $table->TEXT('publish')->nullable();
                $table->string('tname',100);
                $table->text('category');
                $table->tinyInteger('random',1)->default(1);
                $table->string('examtime',255);
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
        Schema::dropIfExists('exam');
    }
}
