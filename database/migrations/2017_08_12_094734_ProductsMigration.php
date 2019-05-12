<?php

use App\Inside\Constants;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class ProductsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Constants::PRODUCTS_DB, function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('type_app_id');
            $table->bigInteger('category_id');
            $table->string('title');
            $table->string('image');
            $table->longText('small_description')->nullable();
            $table->longText('description')->nullable();
            $table->longText('rule')->nullable();
            $table->longText('recovery')->nullable();
            $table->longText('terms_of_use')->nullable();
            $table->integer('sort');
            $table->boolean('is_happy')->default(false)->nullable();
            $table->boolean('is_best_sales')->default(false)->nullable();
            $table->boolean('time_limitation')->default(false)->nullable();
            $table->boolean('special_offer')->default(false)->nullable();
            $table->boolean('today_buy')->default(false)->nullable();
            $table->integer('star');
            $table->bigInteger('price_adult');
            $table->bigInteger('price_child');
            $table->bigInteger('price_baby');
            $table->bigInteger('cash_back');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table(Constants::PRODUCTS_DB, function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on(Constants::CATEGORY_DB)->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Constants::PRODUCTS_DB);
    }
}
