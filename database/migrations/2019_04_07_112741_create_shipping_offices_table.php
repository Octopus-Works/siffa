<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_offices', function (Blueprint $table) {

            // Shipping office information.
            // -The name of the shipping office of the affiliate.
            // -A list of addresses of the branches of the shipping office.
            // -Type of shipping service provided.
            // -Working within the shipping office.
            // -Chamber of Commerce.
            // -Commercial Registration Number.

            //Init 
            $table->engine = 'InnoDB'; 
            $table->charset = 'UTF8';
            $table->collation = 'utf8_unicode_ci';

            // Attributes 
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('position_title')->nullable(); 
            $table->integer('chamber_of_commerce')->nullable(); 
            $table->integer('commercial_registry')->nullable(); 
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
        Schema::dropIfExists('shipping_offices');
    }
}
