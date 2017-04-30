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
            $table->decimal('fund_amount');
            $table->decimal('fund_verified_amount')->nullable();
            $table->string('fund_uid');
            $table->string('fund_status')->nullable();
            $table->integer('fund_total_id')->unsigned();
            $table->string('created_by');
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });

        Schema::table('funds', function (Blueprint $table) {
            $table->foreign('fund_total_id')->references('id')->on('fund_totals')->onDelete('cascade');
        });

    }
    public function down()
    {
        Schema::dropIfExists('funds');
    }
}
