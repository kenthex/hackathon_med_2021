<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->integer('age')->nullable();
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('lifestyle')->nullable();
            $table->integer('hemoglobin')->nullable();
            $table->integer('cholesterol')->nullable();
            $table->integer('vit_a')->nullable();
            $table->integer('vit_b1')->nullable();
            $table->integer('vit_b3')->nullable();
            $table->integer('vit_b6')->nullable();
            $table->integer('vit_b12')->nullable();
            $table->integer('vit_c')->nullable();
            $table->integer('vit_e')->nullable();
            $table->integer('vit_d')->nullable();
            $table->integer('vit_k')->nullable();
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
