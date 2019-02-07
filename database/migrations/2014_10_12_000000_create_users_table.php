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
            $table->string('phone_number');
            $table->tinyInteger('swiss_nationality', false, true);
            $table->string('working_license');
            $table->tinyInteger('first_job');

            $table->string('street_name');
            $table->string('house_nbr');
            $table->string('city_name');
            $table->string('canton_name');
            $table->string('zip_code');

            $table->string('training');
            $table->integer('training_year', false, true);

            $table->string('reference_name');
            $table->string('reference_connection');
            $table->string('reference_enterprise_name');
            $table->string('reference_phone_number');
            $table->string('reference_adress');

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
