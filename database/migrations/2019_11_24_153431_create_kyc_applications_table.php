<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKycApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kyc_applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('citizenship_country_id');
            $table->string('place_of_birth');
            $table->char('sex', 1);
            $table->string('current_address');
            $table->string('phone_number');
            $table->string('photo_id_type');
            $table->string('front_url');
            $table->string('back_url');
            $table->date('date_of_birth');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kyc_applications');
    }
}
