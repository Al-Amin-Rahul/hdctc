<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('job_id');
            $table->string('refer_code');
            $table->string('applicants_name');
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->string('phone');
            $table->string('email');
            $table->string('dob');
            $table->string('gender');
            $table->string('religion');
            $table->string('maritial');
            $table->string('care_of');
            $table->string('address');
            $table->string('division');
            $table->string('district');
            $table->string('thana');
            $table->string('union');
            $table->string('post_code');
            $table->string('care_of_p');
            $table->string('address_p');
            $table->string('division_p');
            $table->string('district_p');
            $table->string('thana_p');
            $table->string('union_p');
            $table->string('post_code_p');
            $table->string('exam')->nullable();
            $table->string('board')->nullable();
            $table->string('roll')->nullable();
            $table->string('result')->nullable();
            $table->string('group')->nullable();
            $table->string('pass_year')->nullable();
            $table->string('hsc_exam')->nullable();
            $table->string('hsc_board')->nullable();
            $table->string('hsc_roll')->nullable();
            $table->string('hsc_result')->nullable();
            $table->string('hsc_group')->nullable();
            $table->string('hsc_pass_year')->nullable();
            $table->string('graduation_exam')->nullable();
            $table->string('graduation_board')->nullable();
            $table->string('graduation_roll')->nullable();
            $table->string('graduation_result')->nullable();
            $table->string('graduation_group')->nullable();
            $table->string('graduation_pass_year')->nullable();
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
        Schema::dropIfExists('applications');
    }
}
