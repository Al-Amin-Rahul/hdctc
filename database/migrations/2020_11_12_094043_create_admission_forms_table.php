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
            $table->string('image');
            $table->string('service');
            $table->string('service_option');
            $table->string('nid', 191)->unique();
            $table->string('mobile_banking');
            $table->string('refer_code', 191)->unique();
            $table->string('dob');
            $table->string('gender');
            $table->string('student_email', 191)->nullable();
            $table->string('student_phone');
            $table->string('education');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('division');
            $table->string('district');
            $table->string('thana');
            $table->string('union');
            $table->integer('post_code');
            $table->string('payment_date')->nullable();
            $table->string('expire_date')->nullable();
            $table->string('status')->default('Pending');
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
