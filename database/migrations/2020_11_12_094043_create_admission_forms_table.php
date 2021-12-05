<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student_name');
            $table->string('service');
            $table->string('service_option');
            $table->string('mobile_banking');
            $table->string('refer_code', 191)->unique();
            $table->string('dob');
            $table->string('gender');
            $table->string('student_email', 191)->unique()->nullable();
            $table->string('student_phone');
            $table->string('education');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('division');
            $table->string('district');
            $table->string('thana');
            $table->string('union');
            $table->integer('post_code');
            $table->string('expire_date')->nullable();
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('admission_forms');
    }
}
