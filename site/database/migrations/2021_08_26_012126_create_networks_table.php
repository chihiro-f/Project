<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNetworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('networks', function (Blueprint $table) {
            //<!-- id INT -->
            $table->increments('id')->unique();
            //<!-- title varchar(20) -->
            $table->string('title',20);
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
        Schema::table('networks',function($table){
            $table->dropForeign(['user_id']);
        });
        // Schema::drop('networks');
        Schema::dropIfExists('networks');
    }
}
