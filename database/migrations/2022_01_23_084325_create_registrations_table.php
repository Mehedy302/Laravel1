<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();

            $table->string('email',50 );
            $table->string('password',128);
            $table->string('retype_password',128);
            $table->string('phone_number',14);
            $table->string('first_name',30);
            $table->string('last_name',30);
            $table->string('address',100);
            $table->string('city',20);
            $table->string('province',50);
            $table->string('country',30);
            $table->string('school',50);
            $table->string('program',30);
            $table->string('educationlvl',50);
            $table->string('edustat',50);
            $table->string('grdate',50);

            $table->string('emp',50)->nullable();
            $table->string('jbtle',30)->nullable();
            $table->string('jbduty',255)->nullable();
            $table->string('worktime',3)->nullable();
            
            //$table->string('attachment',255);
            
            










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
        Schema::dropIfExists('registrations');
    }
}
