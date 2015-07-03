<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('name_description');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->string('image_file');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('beads');
    }
}
