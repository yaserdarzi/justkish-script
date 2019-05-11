<?php

use App\Inside\Constants;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FeaturesQuestionsAnswersTableMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Constants::FEATURES_QUESTIONS_ANSWERS_DB, function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('type_app_id');
            $table->bigInteger('features_id');
            $table->string('title');
            $table->string('image');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table(Constants::FEATURES_QUESTIONS_ANSWERS_DB, function (Blueprint $table) {
            $table->foreign('features_id')->references('id')->on(Constants::FEATURES_DB)->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Constants::FEATURES_QUESTIONS_ANSWERS_DB);
    }
}
