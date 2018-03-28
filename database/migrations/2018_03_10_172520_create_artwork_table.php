<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtworkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artwork', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->unsignedInteger('user_id')->index();
            $table->mediumText('description')->nullable();
            $table->string('images', 150)->nullable();
            $table->mediumText('keywords')->nullable();
            $table->string('owner_type')->default('users');
            $table->mediumInteger('likes')->default(0);
            $table->mediumInteger('dislikes')->default(0);
            $table->mediumInteger('rate')->default(0);
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
        Schema::dropIfExists('artwork');
    }
}
