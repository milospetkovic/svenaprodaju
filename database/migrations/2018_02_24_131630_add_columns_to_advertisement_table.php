<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToAdvertisementTable extends Migration
{
    private $table = 'advertisement';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table($this->table, function(Blueprint $table)
        {
            $table->integer('sell_or_buy')->nullable(false);
            $table->integer('fk_category')->nullable(true);
            $table->integer('fk_group')->nullable(true);
            $table->integer('fk_condition')->nullable(true);
            $table->double('price')->nullable(true);
            $table->integer('fk_price_currency')->nullable(true);
            $table->double('fk_price_type')->nullable(true);
            $table->tinyInteger('accept_replacement')->nullable(true);
            $table->tinyInteger('accepted_publish_condition')->nullable(false);
            $table->integer('fk_place')->nullable(false);
            $table->string('contact_name')->nullable(false);
            $table->string('contact_phone')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table($this->table, function (Blueprint $table) {
            $table->dropColumn('sell_or_buy');
            $table->dropColumn('fk_category');
            $table->dropColumn('fk_group');
            $table->dropColumn('fk_condition');
            $table->dropColumn('price');
            $table->dropColumn('fk_price_currency');
            $table->dropColumn('fk_price_type');
            $table->dropColumn('accept_replacement');
            $table->dropColumn('accepted_publish_condition');
            $table->dropColumn('fk_place');
            $table->dropColumn('contact_name');
            $table->dropColumn('contact_phone');
        });
    }
}
