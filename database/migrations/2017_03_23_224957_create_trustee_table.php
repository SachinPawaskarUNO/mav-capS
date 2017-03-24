<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrusteeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('invested_amount');
            $table->string('investment_id');
            $table->integer('loan_id')->unsigned();
            $table->string('updated_by');
            $table->string('created_by');
            $table->timestamps();
        });

        Schema::table('trustee', function (Blueprint $table) {
            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
        });
        Schema::table('trustee', function (Blueprint $table) {
            $table->foreign('loan_id')->references('id')->on('loans')->onDelete('cascade');
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('trustee');
    }
}

