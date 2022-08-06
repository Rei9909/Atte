<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtteUsersTable extends Migration
{
    /**
     * マイグレーションの実行
     *
     * @return void
     */

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary()->nullable(false);
            $table->string('name',255)->nullable(false);
            $table->string('email',255)->unique('email')->nullable(false);
            $table->string('password',255)->nullable(false);
            $table->char('remember_token');
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * マイグレーションを戻す
     *
     * @return void
     */

    public function down()
    {
        Schema::dropIfExists('');
    }
}
