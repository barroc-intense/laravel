<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // offerte
        Schema::create('quotations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sales_id');
            $table->unsignedBigInteger('customer_id');
            $table->string('type');
            $table->string('email');
            $table->string('company_name');
            $table->bigInteger('KVK');
            $table->timestamps();

            $table->foreign('sales_id')
                ->references('id')
                ->on('users');
            $table->foreign('customer_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quotations');
    }
}
