<?php

use App\Inside\Constants;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class FeaturesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Constants::FEATURES_DB, function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('type_app_id');
            $table->bigInteger('group_features_id');
            $table->string('title');
            $table->longText('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table(Constants::FEATURES_DB, function (Blueprint $table) {
            $table->foreign('group_features_id')->references('id')->on(Constants::GROUP_FEATURES_DB)->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Constants::FEATURES_DB);
    }
}
