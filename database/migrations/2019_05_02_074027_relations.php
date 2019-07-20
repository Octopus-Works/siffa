<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Relations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('shipping_offices', function(Blueprint $table){
            
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
        });

        Schema::table('shipping_services', function(Blueprint $table){
            
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');

        });

        Schema::table('user_details', function(Blueprint $table){
            
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');

        });

        Schema::table('application_details', function(Blueprint $table){
            
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');

        });

        Schema::table('office_services', function(Blueprint $table){
            
            $table->foreign('shipping_office_id')
                    ->references('id')
                    ->on('shipping_offices')
                    ->onDelete('cascade');

            $table->foreign('shipping_service_id')
                    ->references('id')
                    ->on('shipping_services')
                    ->onDelete('cascade'); 

        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
