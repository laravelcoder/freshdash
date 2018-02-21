<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClinicsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('clinic_name');
            $table->integer('device_count')->default('4');
            $table->string('clinic_number');
            $table->integer('group_id')->nullable();
            $table->date('date_opened')->nullable();
            $table->integer('quickbase_id')->nullable();
            $table->integer('quickbase_company')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clinics');
    }
}
