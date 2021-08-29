<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            //- id INT -->
            $table->increments('id')->unique();
            // title varchar(20) -->
            $table->string('title',20);
            // person varchar(20) -->
            $table->string('person',20);
            // url varchar(20) -->
            $table->string('url',255);
            // created_atとupdated_atの追加 -->
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
        Schema::dropIfExists('records');
        // Schema::drop('records');
    }
}
