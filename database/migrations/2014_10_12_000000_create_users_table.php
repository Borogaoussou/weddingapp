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
            $table->string('email')->unique()->default('default@default.com');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('pseudo')->unique();
            $table->string('password');
            $table->string('role')->nullable();
            $table->string('telephone')->nullable();
            $table->string('key')->unique();
            $table->string('qrcode')->nullable();
            $table->string('numtable')->nullable();
            $table->string('numchaise')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->string('updated_at');
            $table->string('created_at');
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
