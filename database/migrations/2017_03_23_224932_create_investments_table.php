<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investments', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('invested_amount');
            $table->string('created_by');
            $table->string('updated_by');
            $table->integer('investor_application_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('investments', function (Blueprint $table) {
            $table->foreign('investor_application_id')->references('id')->on('investor_applications')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('investments');
    }
}
