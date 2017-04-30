<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWithdrawFundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdraw_funds', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('withdraw_amount');
            $table->bigInteger('withdraw_uid')->nullable();
            $table->integer('inv_app_id')->unsigned();
            $table->string('created_by');
            $table->string('updated_by');
            $table->timestamps();
        });
        Schema::table('withdraw_funds', function (Blueprint $table) {
            $table->foreign('inv_app_id')->references('id')->on('investor_applications')->onDelete('cascade');
        });
    }
    public function down()
    {
        Schema::dropIfExists('withdraw_funds');
    }
}
