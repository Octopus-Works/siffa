<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficeServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('office_services', function (Blueprint $table) {

            //Init 
            $table->engine = 'InnoDB'; 
            $table->charset = 'UTF8';
            $table->collation = 'utf8_unicode_ci';

            // Attributes
            $table->increments('id'); 
            $table->timestamps();

            // Foreign keys
            $table->unsignedInteger('shipping_office_id');
            $table->unsignedInteger('shipping_service_id');

            // Indexes 
            $table->index('shipping_office_id');
            $table->index('shipping_service_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('office_services');
    }
}
