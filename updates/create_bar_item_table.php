<?php namespace RicardoLapa\Backoffice\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateBarItemsTable extends Migration
{
    public function up()
    {
        Schema::create('ricardolapa_backoffice_bar_item', function(Blueprint $table) {
            $table->integer('bar_id')->unsigned();
            $table->integer('item_id')->unsigned();
            $table->primary(['bar_id', 'item_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('ricardolapa_backoffice_bar_item');
    }
}
