<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToBolsoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bolsoes', function (Blueprint $table) {
            $table->unsignedBigInteger('status_bolsao_id')->nullable();
            $table->foreign('status_bolsao_id')
            ->references('id')
            ->on('status_bolsao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bolsoes', function (Blueprint $table) {
            $table->dropForeign(['status_bolsao_id']);
            $table->dropColumn('status_bolsao_id');
        });
    }
}
