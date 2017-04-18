<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('repayments', function (Blueprint $table) {
                $table->increments('id');
                $table->bigInteger('repayment_amount')->nullable();
                $table->bigInteger('total_amnt_paid')->nullable();
                $table->integer('loan_id')->unsigned();
                $table->string('created_by');
                $table->string('updated_by');
                $table->timestamps();
            });
        Schema::table('repayments', function (Blueprint $table) {
            $table->foreign('loan_id')->references('id')->on('loans')->onDelete('cascade');
        });
    }
    public function down()
    {
        Schema::dropIfExists('repayments');
    }
}
