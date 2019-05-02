<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_details', function (Blueprint $table) {

            // Init 
            $table->engine = 'InnoDB'; 
            $table->charset = 'UTF8';
            $table->collation = 'utf8_unicode_ci'; 

            // Attributes 
            $table->increments('id');
            $table->string('Financial_assignment_status'); 
            $table->string('Date_of_application'); 
            $table->string('Resume_information'); 
            $table->timestamps();

            // Foreign Keys
            $table->unsignedInteger('user_id');

            // Indexes 
            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('application_details');
    }
}
