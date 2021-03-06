<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommitmentRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commitment_requests', function (Blueprint $table) {
            $table->increments('id_request');
            $table->timestamps();

            $table->integer('job_offer_id')->unsigned();
            $table->integer('users_id')->unsigned();

            $table->foreign('job_offer_id')->references('id_job_offer')->on('job_offers');
            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commitment_requests');
    }
}
