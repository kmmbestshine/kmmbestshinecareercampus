<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id',10);
            $table->string('name',255);
            $table->text('login_msg')->nullable();
            $table->text('Question_Bank_DB')->nullable();
            $table->longblob('image')->nullable();
            $table->string('balance',255)->nullable();
            $table->int('student_fee',4)->nullable();
            $table->string('total_number_of_student',255)->nullable();
            $table->string('total_number_of_exam',255)->nullable();
            $table->string('institution_name',255)->nullable();
            $table->string('email',100);
            $table->string('password',255);
            $table->string('remember_token',100)->nullable();
            $table->tinyint('payment',1)->nullable();
            $table->smallint('amount',6)->default(0);
            $table->Date('payment_date')->nullable();
            $table->Date('validity')->nullable();
            $table->text('payment_request_id')->nullable();
            $table->int('student_limit',11)->default(15);
            $table->int('exam_limit',11);
            $table->timestamps()->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
