<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::table('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('address_id_shipping');

            $table->foreign('address_id_shipping')->references('id')->on('addresses');
            $table->unsignedBigInteger('address_id_receipt');

            $table->foreign('address_id_receipt')->references('id')->on('addresses');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       /* Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('address_id');
            $table->dropColumn('address_id1');
            $table->dropColumn('address_shipping');

        });*/
    }
}
