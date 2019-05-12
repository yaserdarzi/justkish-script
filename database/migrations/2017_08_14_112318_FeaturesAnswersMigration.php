<?php

use App\Inside\Constants;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class FeaturesAnswersMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Constants::PRODUCTS_FEATURES_ANSWERS_DB, function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('type_app_id');
            $table->bigInteger('products_id');
            $table->bigInteger('features_id');
            $table->bigInteger('features_questions_answers_id');
            $table->timestamp('created_at');

        });
        Schema::table(Constants::PRODUCTS_FEATURES_ANSWERS_DB, function (Blueprint $table) {
            $table->foreign('products_id')->references('id')->on(Constants::PRODUCTS_DB)->onDelete('cascade');
            $table->foreign('features_id')->references('id')->on(Constants::FEATURES_DB)->onDelete('cascade');
            $table->foreign('features_questions_answers_id')->references('id')->on(Constants::FEATURES_QUESTIONS_ANSWERS_DB)->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Constants::PRODUCTS_FEATURES_ANSWERS_DB);
    }
}
