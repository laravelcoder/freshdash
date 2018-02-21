<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdsclientsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adsclients', function (Blueprint $table) {
        	$table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('developer_token');
            $table->string('client_customer_id');
            $table->string('user_agent');
            $table->string('client_id');
            $table->string('client_secret');
            $table->string('refresh_token');
            $table->string('authorization_uri')->default('https:/accounts.google.com/o/oauth2/v2/auth');
            $table->string('redirect_uri')->default('urn:ietf:wg:oauth:2.0:oob');
            $table->string('token_credential_uri')->default('https://www.googleapis.com/oauth2/v4/token');
            $table->string('scope')->default('https://www.googleapis.com/auth/adwords');
            $table->integer('website_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('clinic_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            // $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('clinic_id')->references('id')->on('clinics');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('adsclients');
    }
}
