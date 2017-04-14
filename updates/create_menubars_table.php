<?php namespace RicardoLapa\Backoffice\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateMenubarsTable extends Migration
{
    public function up()
    {
        Schema::create('ricardolapa_backoffice_menubars', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name')->nullable();
            $table->boolean('has_markup')->default(false);
            $table->text('logo_url')->nullabe();
            $table->boolean('is_fixed')->default(false);
            $table->integer('position')->nullable();
            $table->integer('container')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ricardolapa_backoffice_menubars');
    }
}
