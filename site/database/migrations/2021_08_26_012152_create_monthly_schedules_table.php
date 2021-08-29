<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonthlySchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monthly_schedules', function (Blueprint $table) {
            //<!-- id INT -->
            $table->increments('id')->unique();
            //<!-- content TEXT -->
            $table->text('content');
            //<!-- created_atとupdated_atの追加 -->
            $table->timestamps();
            //<!-- deleted_at　論理削除 -->
            $table->softDeletes();
            
            //<!-- user_id 設定 -->
            $table->integer('user_id')->unsigned();
            //<!-- 外部キー制約 -->
            $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('monthly_schedules',function($table){
            $table->dropForeign(['user_id']);
        });
        // Schema::drop('monthly_schedules');
        Schema::dropIfExists('monthly_schedules');
    }
}
