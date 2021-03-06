<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNotesTable extends Migration {

	public function up()
	{
		Schema::create('notes', function(Blueprint $table) {
		$table->engine = 'MYISAM';
			$table->increments('id');
			$table->timestamps();
			$table->string('content')->nullable();
			$table->bigInteger('company_id')->unsigned();
			$table->bigInteger('user_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('notes');
	}
}
