<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFreeAddTable extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up()
{
Schema::create('freeadd', function (Blueprint $table) { $table->increments('id'); $table->integer('user_id'); $table->string('title'); $table->integer('prix'); $table->text('message'); $table->string('image'); $table->timestamps(); });
}

/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
Schema::drop("freeadd");
}
}
