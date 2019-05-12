<?php

use App\Inside\Constants;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class ProductsGalleryMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Constants::PRODUCTS_GALLERY_DB, function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('type_app_id');
            $table->bigInteger('products_id');
            $table->string('path');
            $table->string('mime_type')->nullable();
            $table->timestamp('created_at');
        });
        Schema::table(Constants::PRODUCTS_GALLERY_DB, function (Blueprint $table) {
            $table->foreign('products_id')->references('id')->on(Constants::PRODUCTS_DB)->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Constants::PRODUCTS_GALLERY_DB);
    }
}
