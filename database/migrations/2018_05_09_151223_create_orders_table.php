<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            
           $table->integer('user_id')->nullable()->unsigned()->index();
           
            $table->foreign('user_id')->references('id')->on('users');
          
          
            $table->string('glass')->nullable();
            $table->string('plastic_containers')->nullable();
            $table->string('kanz_containers')->nullable();
            $table->string('paper')->nullable();
            $table->string('steal')->nullable();
            $table->string('food')->nullable();
            $table->string('electronic')->nullable();
            $table->string('plastic_bages')->nullable();
            $table->string('return');
            $table->string('city');
            $table->string('instructions')->nullable();
            $table->timestamps();
        });
      //  DB::statement('ALTER Table orders add numOfOrders INTEGER NOT NULL UNIQUE AUTO_INCREMENT;');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
