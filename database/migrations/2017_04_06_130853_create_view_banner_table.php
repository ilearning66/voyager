<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('view_banner', function (Blueprint $table) {

            $table->integer('view_id')->unsigned()->nullable();
            $table->foreign('view_id')->references('id')->on('views')->onDelete('cascade');    
            $table->integer('banner_id')->unsigned()->nullable();
            $table->foreign('banner_id')->references('id')->on('banners')->onDelete('cascade');

            $table->integer('priority')->nullable()->default(null);  

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
        Schema::dropIfExists('view_banner');
    }
}
