<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKeyForeignToSales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('sales', function (Blueprint $table) {
        $table->foreign('user_id')->references('id')->on('users');
        //$table->foreign('id')->references('id')->on('waists');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sales', function (Blueprint $table) {
            $table->dropForeign('sales_user_id_foreign');
            //$table->dropForeign('sales_product_id_foreign');
        });
    }
}
