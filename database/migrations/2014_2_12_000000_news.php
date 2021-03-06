<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class News extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //



        Schema::create('news', function (Blueprint $table) {
            
            // Init 
            $table->engine = 'InnoDB'; 
            $table->charset = 'UTF8';
            $table->collation = 'utf8_unicode_ci';
            
            $table->bigIncrements('id');
            $table->string('title_en', 90);
            $table->string('title_ar', 90);
            $table->text('description_en');
            $table->text('description_ar');  
            $table->text('content_en');
            $table->text('content_ar');   
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
        //    
            Schema::dropIfExists('news');

    }
}
