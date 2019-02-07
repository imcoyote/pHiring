<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id_comment');
            $table->timestamps();

            $table->string('title');
            $table->text('body');

            $table->integer('commitment_request_id')->unsigned();
            $table->integer('users_id')->unsigned();

            $table->foreign('commitment_request_id')->references('id_request')->on('commitment_requests');
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
        Schema::dropIfExists('comments');
    }
}
