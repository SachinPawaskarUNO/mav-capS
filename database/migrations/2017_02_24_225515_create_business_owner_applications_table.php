<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessOwnerApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_owner_applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bo_first_name');
            $table->string('bo_last_name');
            $table->integer('user_id')->unsigned();
            $table->string('bo_business_name');
            $table->string('bo_identification_card_number');
            $table->date('bo_date_of_birth');
            $table->string('bo_gender');
            $table->string('bo_personal_street');
            $table->string('bo_personal_city');
            $table->string('bo_personal_state');
            $table->bigInteger('bo_personal_zipcode');
            $table->string('bo_personal_country');
            $table->bigInteger('bo_personal_phonenumber');
            $table->string('bo_business_street');
            $table->string('bo_business_city');
            $table->string('bo_business_state');
            $table->bigInteger('bo_business_zipcode');
            $table->string('bo_business_country');
            $table->bigInteger('bo_business_phonenumber');
            $table->string('bo_industry');
            $table->string('bo_legal_entity');
            $table->string('bo_registration_number');
            $table->bigInteger('bo_registration_year');
            $table->string('bo_court_judgement');
            $table->string('bo_court_judgement_yes')->nullable();
            $table->string('bo_bank_name');
            $table->string('bo_bank_account');
            $table->boolean('bo_agree_terms')->default(false);
            $table->boolean('bo_agree_fees')->default(false);
            $table->string('bo_app_status')->nullable();
            $table->timestamps();
        });
        Schema::table('business_owner_applications', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('business_owner_applications');
    }
}
