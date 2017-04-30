<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundTotalsTable extends Migration
{
    public function up()
    {
        Schema::create('fund_totals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inv_app_id')->unsigned();
            $table->decimal('funds_total')->nullable();
            $table->timestamps();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
        });

        Schema::table('fund_totals', function (Blueprint $table) {
            $table->foreign('inv_app_id')->references('id')->on('investor_applications')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fund_totals');
    }
}
