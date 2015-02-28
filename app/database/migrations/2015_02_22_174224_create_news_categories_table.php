<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('news_categories', function($table) {
            $table->increments('id');
            $table->integer('parent');
            $table->string('name');
            $table->foreign('parent')->references('id')->on('news_categories');
        });

        Schema::create('news', function($table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('name');
            $table->string('description');
            $table->text('text');
            $table->string('meta_title');
            $table->string('meta_description');
            $table->string('meta_keywords');
            $table->foreign('category_id')->references('id')->on('news_categories');

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
