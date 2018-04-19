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
            $table->increments('OrderID');
            $table->integer('OrderUserID',false, true)->length(11);
            $table->float('OrderAmount');
            $table->char('OrderShipName',100);
            $table->char('OrderShipAddress',100);
            $table->char('OrderShipAddress2',100);
            $table->char('OrderCity',50);
            $table->char('OrderState',50);
            $table->char('OrderZip',20);
            $table->char('OrderCountry',50);
            $table->char('OrderPhone',20);
            $table->float('OrderShipping');
            $table->float('OrderTax');
            $table->char('OrderEmail',100);
            $table->timestamps();
            $table->tinyInteger('OrderShipped',false, true)->length(1);
            $table->char('OrderTrackingNumber',80);
            
            
        });
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
