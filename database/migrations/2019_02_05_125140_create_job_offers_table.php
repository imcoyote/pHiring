<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_offers', function (Blueprint $table) {
            $table->increments('id_job_offer');
            $table->timestamps();

            $table->date('publication_date');
            $table->date('end_publication_date');
            $table->string('title');

            $table->integer('departement_id')->unsigned();

            $table->foreign('departement_id')->references('id_departement')->on('departement');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_offers');
    }
}
