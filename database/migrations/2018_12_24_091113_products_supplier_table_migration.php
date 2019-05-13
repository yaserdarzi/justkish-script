<?php

use App\Inside\Constants;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsSupplierTableMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Constants::PRODUCTS_SUPPLIER_DB, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('type_app_id');
            $table->bigInteger('products_id');
            $table->bigInteger('supplier_id');
            $table->string('type');
            $table->bigInteger('percent')->nullable()->default(0);
            $table->bigInteger('price')->nullable()->default(0);
            $table->bigInteger('income')->nullable()->default(0);
            $table->bigInteger('award')->nullable()->default(0);
            $table->bigInteger('price_adult')->nullable()->default(0);
            $table->bigInteger('price_child')->nullable()->default(0);
            $table->bigInteger('price_baby')->nullable()->default(0);
            $table->bigInteger('cash_back')->nullable()->default(0);
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->longText('small_description')->nullable();
            $table->longText('description')->nullable();
            $table->longText('rule')->nullable();
            $table->longText('recovery')->nullable();
            $table->longText('terms_of_use')->nullable();
            $table->integer('sort')->nullable()->default(0);
            $table->boolean('is_happy')->default(false)->nullable();
            $table->boolean('is_best_sales')->default(false)->nullable();
            $table->boolean('time_limitation')->default(false)->nullable();
            $table->boolean('special_offer')->default(false)->nullable();
            $table->boolean('today_buy')->default(false)->nullable();
            $table->integer('star')->nullable()->default(0);
            $table->timestamps();
            $table->softDeletes();

        });
        Schema::table(Constants::PRODUCTS_SUPPLIER_DB, function (Blueprint $table) {
            $table->foreign('products_id')->references('id')->on(Constants::PRODUCTS_DB)->onDelete('cascade');
            $table->foreign('supplier_id')->references('id')->on(Constants::SUPPLIER_DB)->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Constants::PRODUCTS_SUPPLIER_DB);
    }
}
