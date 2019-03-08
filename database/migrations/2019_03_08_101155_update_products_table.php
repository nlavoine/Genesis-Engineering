<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['details', 'category_id', 'imgPath', 'price']);
            $table->text('details_1')->after('name');
            $table->text('details_2')->after('details_1');
            $table->text('details_3')->after('details_2');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->decimal('price', 8, 2)->after('stock');
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
