<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternalMessagingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internal_messagings', function (Blueprint $table) {

            // Init 
            $table->engine = 'InnoDB'; 
            $table->charset = 'UTF8';
            $table->collation = 'utf8_unicode_ci';

            // Attributes
            $table->increments('id');
            $table->string('subject');
            $table->string('body');
            $table->timestamps();

            // Foreign keys
            $table->unsignedInteger('sender_id');
            $table->unsignedInteger('receiver_id')->nullable(true); 

            // Index 
            $table->index('sender_id');
            $table->index('receiver_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('internal_messagings');
    }
}
