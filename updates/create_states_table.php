<?php namespace RainLab\User\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateStatesTable extends Migration
{

    public function up()
    {
        Schema::create('rainlab_user_states', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('rainlab_user_states');
    }

}