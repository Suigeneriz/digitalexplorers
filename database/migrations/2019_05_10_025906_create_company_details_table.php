<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id');
            $table->string('vat');
            $table->string('manager');
            $table->integer('num_of_employees');
            $table->double('average_salary');
            $table->string('social_insurance_taxes');
            $table->string('turnover');
            $table->integer('social_media_likes');
            $table->integer('social_media_followers');
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
        Schema::dropIfExists('company_details');
    }
}
