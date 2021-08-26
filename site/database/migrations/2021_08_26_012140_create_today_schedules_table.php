<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodaySchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('today_schedules', function (Blueprint $table) {
            //<!-- id INT -->
            $table->increments('id');
            //<!-- title varchar(20) -->
            $table->string('title',20);
            //<!-- content TEXT -->
            $table->text('content');
            //<!-- created_atとupdated_atの追加 -->
            $table->timestamps();
            //<!-- deleted_at　論理削除 -->
            $table->softDeletes();
            //<!-- comment_id 設定 -->
            $table->increment('comment_id');
            //<!-- 外部キー制約 -->
            $table->foreign('comment_id')
                    ->references('id')->on('comments')
                    ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('today_schedules',function($table){
            $table->dropForeign(['comment_id']);
        });
        // Schema::drop('today_schedules');
        Schema::dropIfExists('today_schedules');
    }
}
