<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname', 100)->nullable();
            $table->string('lastname',100)->nullable();
            $table->string('username')->nullable()->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('images', 140)->nullable();
            $table->string('phone')->nullable();
            $table->boolean('isCustomTemplate')->default(false);
            $table->boolean('active')->default(false);
            $table->date('birthdate')->nullable();
            $table->string('fbid')->nullable();
            $table->string('googleid')->nullable();
            $table->string('pinterestid')->nullable();
            $table->string('artstationid')->nullable();
            $table->string('website')->nullable();
            $table->unsignedInteger('role')->nullable();
            $table->unsignedInteger('country_id');
            $table->string('slug');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
