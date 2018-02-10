<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserFkKeyToAdvertisementTable extends Migration
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
            $table->foreign('user_id', 'idx_user_id_fk_user')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table($this->table, function(Blueprint $table)
        {
            $table->dropForeign('idx_user_id_fk_user');
        });
    }
}
