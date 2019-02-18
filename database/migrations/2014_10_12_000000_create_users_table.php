<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->string('firstname');
            $table->string('lastname');
            $table->string('phone_number')->nullable();
            $table->tinyInteger('swiss_nationality', false, true)->nullable();
            $table->string('working_license')->nullable();
            $table->tinyInteger('first_job')->nullable();

            $table->string('street_name')->nullable();
            $table->string('house_nbr')->nullable();
            $table->string('city_name')->nullable();
            $table->string('canton_name')->nullable();
            $table->string('zip_code')->nullable();

            $table->string('training')->nullable();
            $table->integer('training_year', false, true)->nullable();

            $table->string('reference_name')->nullable();
            $table->string('reference_connection')->nullable();
            $table->string('reference_enterprise_name')->nullable();
            $table->string('reference_phone_number')->nullable();
            $table->string('reference_adress')->nullable();

            $table->integer('role_id')->unsigned();

            $table->foreign('role_id')->references('id_role')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
