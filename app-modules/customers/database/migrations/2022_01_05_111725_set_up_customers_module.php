<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class SetUpCustomersModule extends Migration
{
	public function up()
	{
		Schema::create('customers', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('gender');
			$table->string('title');
			$table->string('martial_status');
			$table->timestamps();
			$table->softDeletes();
		});




	}
	
	public function down()
	{
		Schema::dropIfExists('customers');
	}
}
