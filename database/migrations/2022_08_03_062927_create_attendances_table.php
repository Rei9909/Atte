<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{

    /**
     * マイグレーションの実行
     *
     * @return void
     */

    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->date('date')->nullable(false);
            $table->time('start_time')->nullable(false);
            $table->time('end_time');
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
        Schema::dropIfExists('attendances');
    }
}
