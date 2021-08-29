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
            // id INT
            $table->increments('id')->unique();
            //grade varchar(1)
            $table->string('grade',1);
            //password varchar(10)
            $table->string('password',10);
            //part  char(10)
            $table->string('part',10);
            // created_atとupdated_atの追加
            $table->timestamps();
            // deleted_at　論理削除
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            // Schema::drop('users');
        Schema::dropIfExists('users');
    }
}
