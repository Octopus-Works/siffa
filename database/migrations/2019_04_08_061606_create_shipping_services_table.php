<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_services', function (Blueprint $table) {
            // Information on the type of shipping services provided:
            // a-Available shipping methods:
            //     .Less Than Track Load( LTL)
            //     .Full Track Load( FTL)
            // b-External shipping modes:
            //     .Wild
            //     .Nautical
            //     .aerial
            // c-Sources and destinations served by the shipping office
            
            // Init 
            $table->engine = 'InnoDB'; 
            $table->charset = 'UTF8';
            $table->collation = 'utf8_unicode_ci'; 

            // Attributes
            $table->bigIncrements('id');
            $table->string('shipping_methods');  // ['LTL', 'FTL'] 
            $table->string('shipping_modes');  // ['wild', 'nautical', 'aerial'] 
            $table->string('sources_destinations'); 
            $table->timestamps();

            // Foreign Keys
            $table->unsignedInteger('user_id');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipping_services');
    }
}
