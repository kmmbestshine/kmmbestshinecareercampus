<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_id',100);
            $table->string('name',255);
            $table->bigInteger('contact',10)->nullable();
            $table->text('category')->nullable();
            $table->string('admin_id',100)->nullable();
            $table->string('admin_email',100)->nullable();
            $table->string('fee',255)->nullable();
            $table->text('payment_request_id')->nullable();
            $table->Date('validity')->nullable();
            $table->string('password',255);
            $table->string('remember_token',100)->nullable();
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
        Schema::dropIfExists('users');
    }
}
