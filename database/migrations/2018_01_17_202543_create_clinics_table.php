<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClinicsTable extends Migration {

	public function up()
	{
		Schema::create('clinics', function(Blueprint $table) {
			$table->engine = 'InnoDB';
			$table->increments('id');
			
			$table->string('number');
			$table->string('name');
			$table->integer('device_count')->default('4');
			$table->unsignedInteger('group_id')->nullable();
			$table->date('date_opened')->nullable();
			$table->unsignedInteger('quickbase_id')->nullable();
			$table->unsignedInteger('quickbase_company')->nullable();
			$table->timestamps();
			$table->softDeletes();
			 
		});
	}

	public function down()
	{
		Schema::drop('clinics');
	}
}