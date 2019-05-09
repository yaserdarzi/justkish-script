<?php

use App\Inside\Constants;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Constants::ROLES_DB, function (Blueprint $table) {
            $table->increments('id');
            $table->string('role_name')->unique();
            $table->integer('created_at');
            $table->integer('updated_at');
        });

        Schema::create(Constants::PERMISSIONS_DB, function (Blueprint $table) {
            $table->increments('id');
            $table->string('route_name')->unique();
            $table->string('description');
            $table->integer('created_at');
            $table->integer('updated_at');
        });

        Schema::create(Constants::ROLE_PERMISSIONS_DB, function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('permission_id');

            $table->foreign('role_id')->references('id')->on(Constants::ROLES_DB)->onDelete('cascade');
            $table->foreign('permission_id')->references('id')->on(Constants::PERMISSIONS_DB)->onDelete('cascade');
        });

        Schema::create(Constants::ROLE_ADMIN_DB, function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('admin_id');
            $table->unsignedInteger('role_id');

            $table->foreign('admin_id')->references('id')->on(Constants::ADMIN_DB)->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on(Constants::ROLES_DB)->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Constants::ROLE_ADMIN_DB);
        Schema::dropIfExists(Constants::ROLE_PERMISSIONS_DB);
        Schema::dropIfExists(Constants::PERMISSIONS_DB);
        Schema::dropIfExists(Constants::ROLES_DB);
    }
}
