<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocationsTable extends Migration {

	public function up()
	{
		Schema::create('locations', function(Blueprint $table) {
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('nickname');
			$table->string('address')->nullable();
			$table->string('address2')->nullable();
			$table->string('city')->nullable();
			$table->string('state')->nullable();
			$table->string('phone')->nullable();
			$table->string('email')->nullable();
			$table->string('website')->nullable();
			$table->string('country')->nullable();

			$table->date('date_opened')->nullable();
			$table->unsignedInteger('quickbase_id')->nullable();
			$table->unsignedInteger('clinic_id')->nullable();
			$table->unsignedInteger('zipcodes_id')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('locations');
	}
}