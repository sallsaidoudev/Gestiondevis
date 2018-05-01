<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('designation');
            $table->decimal('prix_unitaire');
            $table->integer('unites');
            $table->unsignedDecimal('tva');
            $table->unsignedDecimal('acompte');
            $table->unsignedInteger('client_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('client_id')->references('id')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factures');
    }
}
