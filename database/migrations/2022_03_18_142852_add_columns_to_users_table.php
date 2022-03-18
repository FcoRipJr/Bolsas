<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nome_completo')->nullable();
            $table->string('telefone')->nullable();
            $table->date('data_nascimento')->nullable();
            $table->string('cpf')->nullable();
            $table->string('foto')->nullable();
            $table->boolean('maior_idade')->default(1)->comment('1:maior de idade - 0:menor de idade');
            $table->unsignedBigInteger('nacionalidade_id')->nullable();
            $table->foreign('nacionalidade_id')
            ->references('id')
            ->on('nacionalidades');
            $table->unsignedBigInteger('parentesco_id')->nullable();
            $table->foreign('parentesco_id')
            ->references('id')
            ->on('parentescos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['parentesco_id']);
            $table->dropColumn('parentesco_id');
            $table->dropForeign(['nacionalidade_id']);
            $table->dropColumn('nacionalidade_id');
            $table->dropColumn('maior_idade');
            $table->dropColumn('foto');
            $table->dropColumn('cpf');
            $table->dropColumn('data_nascimento');
            $table->dropColumn('telefone');
            $table->dropColumn('nome_completo');
        });
    }
}
