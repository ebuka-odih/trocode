<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('ads_id');
            $table->string('objective');
            $table->integer('days');
            $table->string('media')->nullable();
            $table->double('budget')->nullable();
            $table->string('start_age')->nullable();
            $table->string('end_age')->nullable();
            $table->string('gender')->nullable();

            $table->integer('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaigns');
    }
}
