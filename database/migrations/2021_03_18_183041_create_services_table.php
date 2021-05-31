<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('namear');
            $table->string('nameen');
            // $table->string('subcatnamear');
            // $table->string('subcatnameen');
            $table->bigInteger('subcat_id')->unsigned();
            $table->integer('count')->default(1);
            $table->foreign('subcat_id')->references('id')->on('subcats')->onDelete('cascade');
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
        Schema::dropIfExists('services');
    }
}
