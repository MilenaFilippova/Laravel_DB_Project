<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use  Illuminate\Support\Facades\Schema;
use  Illuminate\Database\Query\ExpressionExpression;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		if (!Schema::hasTable('employees')) 
		{
			Schema::create('employees', function (Blueprint $table) {
				$table->bigIncrements('id');
				$table->string('employee');
				//$table->date('dbth');
				$table->string('position');
				$table->decimal('salary')->unsigned();
				$table->timestamps();
				
				$table->engine = 'InnoDB';
				//$table->charset = 'utf8';
			});
		}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
