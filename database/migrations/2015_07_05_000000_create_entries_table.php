<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
   		// Create entries table to store my blog entries
    	Schema::create('entries', function (Blueprint $table) {
    		$table->increments('id');
    		$table->string('title');
    		$table->string('body', 1024);
    		$table->timestamps();
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop entries table
    	Schema::drop('entries');	 
    }
}
