<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->increments('DetailID');
            $table->integer('DetailOrderID',false, true)->length(11);
            $table->integer('DetailProductID',false, true)->length(11);
            $table->char('DetailName',250);
            $table->float('DetailPrice',11);
            $table->integer('DetailQuantity',false, true)->length(11);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderdetails');
    }
}
