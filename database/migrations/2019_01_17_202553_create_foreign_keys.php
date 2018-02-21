<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('locations', function(Blueprint $table) {
			$table->foreign('clinic_id')->references('id')->on('clinics')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('locations', function(Blueprint $table) {
			$table->foreign('zipcodes_id')->references('id')->on('zipcodes')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('zipcodes', function(Blueprint $table) {
			$table->foreign('location_id')->references('id')->on('locations')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('zipcodes', function(Blueprint $table) {
			$table->foreign('clinic_id')->references('id')->on('clinics')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('websites', function(Blueprint $table) {
			$table->foreign('clinic_id')->references('id')->on('clinics')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('websites', function(Blueprint $table) {
			$table->foreign('profile_id')->references('id')->on('profiles')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('profiles', function(Blueprint $table) {
			$table->foreign('website_id')->references('id')->on('websites')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('profiles', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('analyticsclients', function(Blueprint $table) {
			$table->foreign('clinic_id')->references('id')->on('clinics')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('analyticsclients', function(Blueprint $table) {
			$table->foreign('website_id')->references('id')->on('websites')
						->onDelete('set null')
						->onUpdate('set null');
		});
		Schema::table('analyticsclients', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('set null')
						->onUpdate('set null');
		});
		Schema::table('adsclients', function(Blueprint $table) {
			$table->foreign('clinic_id')->references('id')->on('clinics')
						->onDelete('set null')
						->onUpdate('set null');
		});
		Schema::table('adsclients', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('set null')
						->onUpdate('set null');
		});
		Schema::table('adsclients', function(Blueprint $table) {
			$table->foreign('website_id')->references('id')->on('websites')
						->onDelete('set null')
						->onUpdate('set null');
		});
	}

	public function down()
	{
		Schema::table('locations', function(Blueprint $table) {
			$table->dropForeign('locations_clinic_id_foreign');
		});
		Schema::table('locations', function(Blueprint $table) {
			$table->dropForeign('locations_zipcodes_id_foreign');
		});
		Schema::table('zipcodes', function(Blueprint $table) {
			$table->dropForeign('zipcodes_location_id_foreign');
		});
		Schema::table('zipcodes', function(Blueprint $table) {
			$table->dropForeign('zipcodes_clinic_id_foreign');
		});
		Schema::table('websites', function(Blueprint $table) {
			$table->dropForeign('websites_clinic_id_foreign');
		});
		Schema::table('websites', function(Blueprint $table) {
			$table->dropForeign('websites_profile_id_foreign');
		});
		Schema::table('profiles', function(Blueprint $table) {
			$table->dropForeign('profiles_website_id_foreign');
		});
		Schema::table('profiles', function(Blueprint $table) {
			$table->dropForeign('profiles_user_id_foreign');
		});
		Schema::table('analyticsclients', function(Blueprint $table) {
			$table->dropForeign('analyticsclients_clinic_id_foreign');
		});
		Schema::table('analyticsclients', function(Blueprint $table) {
			$table->dropForeign('analyticsclients_website_id_foreign');
		});
		Schema::table('analyticsclients', function(Blueprint $table) {
			$table->dropForeign('analyticsclients_user_id_foreign');
		});
		Schema::table('adsclients', function(Blueprint $table) {
			$table->dropForeign('adsclients_clinic_id_foreign');
		});
		Schema::table('adsclients', function(Blueprint $table) {
			$table->dropForeign('adsclients_user_id_foreign');
		});
		Schema::table('adsclients', function(Blueprint $table) {
			$table->dropForeign('adsclients_website_id_foreign');
		});
	}
}