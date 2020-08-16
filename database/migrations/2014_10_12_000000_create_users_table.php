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
            $table->string('realname');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->text('avatar')->nullable()->default('https://img4.thuthuatphanmem.vn/uploads/2019/11/27/bo-hinh-avatar-doi-dep-nhat-1_025435516.jpg');
            $table->boolean('sex')->default('0')->comment('0:name , 1:nu');
            $table->date('birthday')->nullable();
            $table->text('address')->nullable();
            $table->string('phone')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
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
