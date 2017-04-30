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
            $table->decimal('invested_amount');
            $table->string('created_by');
            $table->string('updated_by');
            $table->integer('investor_application_id')->unsigned();
            $table->integer('loan_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('investments', function (Blueprint $table) {
            $table->foreign('investor_application_id')->references('id')->on('investor_applications')->onDelete('cascade');
            $table->foreign('loan_id')->references('id')->on('loans')->onDelete('cascade');
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
