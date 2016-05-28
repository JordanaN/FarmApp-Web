<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignProdutosCategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produtos', function (Blueprint $table) {
            Schema::enableForeignKeyConstraints();
            $table->foreign('categoria_id')->references("id")->on("categorias");
            Schema::disableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produtos', function (Blueprint $table) {
            Schema::enableForeignKeyConstraints();
            $table->dropForeign("produtos_categoria_id_foreign");
            Schema::disableForeignKeyConstraints();

        });
    }
}
