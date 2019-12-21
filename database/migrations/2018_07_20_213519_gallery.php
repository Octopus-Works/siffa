<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Gallery extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery', function (Blueprint $table) {
            
            // Init 
            $table->engine = 'InnoDB'; 
            $table->charset = 'UTF8';
            $table->collation = 'utf8_unicode_ci';
            
            $table->bigIncrements('id');
            $table->string('caption_en', 90);
            $table->string('caption_ar', 90);

            $table->string('alt', 90);
            $table->string('img_src')->nullable();


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
        Schema::dropIfExists('gallery');
    }
}
