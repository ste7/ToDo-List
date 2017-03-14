<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeyOnTasksTable extends Migration
{
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table){
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::table('tasks', function (Blueprint $table){
            $table->dropForeign(['user_id']);
        });
    }
}
