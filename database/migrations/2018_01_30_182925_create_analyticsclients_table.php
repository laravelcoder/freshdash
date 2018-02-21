<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnalyticsclientsTable extends Migration {

	public function up()
	{
		Schema::create('analyticsclients', function(Blueprint $table) {
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->bigInteger('view_id')->unique();
			$table->string('view_url')->nullable();
			$table->integer('user_id')->unsigned()->nullable();
			$table->integer('clinic_id')->unsigned()->nullable();
			$table->integer('website_id')->unsigned()->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('analyticsclients');
	}
}