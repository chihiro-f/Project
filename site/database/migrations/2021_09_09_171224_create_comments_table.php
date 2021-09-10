<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
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
            
            
            // <!-- today_schedule_id 設定 -->
            $table->integer('today_schedule_id')->unsigned();
            //<!-- 外部キー制約 -->
            $table->foreign('today_schedule_id')
                    ->references('id')->on('today_schedules')
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
        Schema::table('comments',function($table){
            $table->dropForeign(['user_id']);
            $table->dropForeign(['today_schedule_id']);
        });
        // Schema::drop('comments');
        Schema::dropIfExists('comments');
    }
}

