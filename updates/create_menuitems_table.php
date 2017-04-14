<?php namespace RicardoLapa\Backoffice\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateMenuitemsTable extends Migration
{
    public function up()
    {
        Schema::create('ricardolapa_backoffice_menuitems', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ricardolapa_backoffice_menuitems');
    }
}
