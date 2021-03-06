<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipsToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('orders', function (Blueprint $table) {
        $table->integer('customer_id')->unsigned()->change();
        $table->foreign('customer_id')->references('id')->on('customers')
            ->onUpdate('cascade')->onDelete('cascade');
            
        
    });
} public function down()
{
    Schema::table('orders', function(Blueprint $table) {
        $table->dropForeign('orders_customer_id_foreign');
    }); 
    Schema::table('orders', function(Blueprint $table) {
        $table->dropIndex('orders_customer_id_foreign');
    });
    Schema::table('orders', function(Blueprint $table) {
        $table->integer('customer_id')->change();
    });
    
}
}
