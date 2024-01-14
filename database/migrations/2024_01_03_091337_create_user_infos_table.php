<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('passportnumber');
            $table->string('joballocation');
             $table->string('application_number');
             $table->string('sex');
             $table->string('relationship');
            $table->string('visa_no');
            $table->string('name_arabic');
            $table->string('passport_details');
            $table->string('picture');
            $table->string('location');
            $table->string('visatype');
            $table->string('issuedate');
            $table->string('expdate');
            $table->string('nationality');
            $table->string('visa_status');
            $table->string('profession');
            $table->string('date_of_birth');
            $table->string('place_of_birth');
            $table->string('phone');
            $table->string('passport_expiry_date');
            $table->string('email')->unique();
            $table->string('code')->unique();
        // Add any other necessary columns
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
        Schema::dropIfExists('user_infos');
    }
}
