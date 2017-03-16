<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundsTable extends Migration
{
    public function up()
    {
        Schema::create('funds', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('fund_amount');
            $table->string('fund_uid');
            $table->string('fund_status')->nullable();
            $table->integer('investor_application_id')->unsigned();
            $table->string('created_by');
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });

        Schema::table('funds', function (Blueprint $table) {
            $table->foreign('investor_application_id')->references('id')->on('investor_applications')->onDelete('cascade');
        });

    }
    public function down()
    {
        Schema::dropIfExists('funds');
    }
}
