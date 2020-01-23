<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Query\ExpressionExpression;

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
            $table->bigIncrements('id');
			$table->integer('id_employee')->unsigned();
			//$table->foreign('id_employee')->references('id')->on('employees');
			$table->integer('id_clients')->unsigned();
			//$table->foreign('id_clients')->references('id')->on('clients');
			$table->string('service');
			//$table->decimal('cost');
			$table->date('date');
            $table->timestamps();
			
			$table->engine = 'InnoDB';
			//$table->charset = 'utf8';
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
