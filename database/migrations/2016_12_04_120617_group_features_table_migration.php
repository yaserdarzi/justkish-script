<?php

use App\Inside\Constants;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GroupFeaturesTableMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Constants::GROUP_FEATURES_DB, function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('type_app_id');
            $table->string('title');
            $table->longText('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Constants::GROUP_FEATURES_DB);
    }
}
