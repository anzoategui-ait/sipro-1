<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requidetbos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('requisicion_id')->unsigned();
            $table->bigInteger('poa_id')->unsigned();
            $table->bigInteger('meta_id')->unsigned();
            $table->bigInteger('financiamiento_id')->unsigned();
            $table->bigInteger('bos_id')->unsigned();
            $table->bigInteger('undmedida_id')->unsigned();
            $table->string('claspres', 15);
            $table->text('descripcion');
            $table->double('cantidad', 25, 2);

            $table->foreign('requisicion_id')->references('id')->on('requisiciones')->onDelete('cascade');
            $table->foreign('poa_id')->references('id')->on('poas')->onDelete('cascade');
            $table->foreign('meta_id')->references('id')->on('metas')->onDelete('cascade');
            $table->foreign('financiamiento_id')->references('id')->on('financiamientos')->onDelete('cascade');
            $table->foreign('bos_id')->references('id')->on('bos')->onDelete('cascade');
            $table->foreign('undmedida_id')->references('id')->on('unidadmedidas')->onDelete('cascade');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requidetbos');
    }
};
