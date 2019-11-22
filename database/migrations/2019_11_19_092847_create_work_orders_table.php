<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workOrders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('maintenance_id');
            $table->unsignedBigInteger('lease_id');
            $table->timestamps();

            $table->foreign('maintenance_id')
                ->references('id')
                ->on('users');
            $table->foreign('lease_id')
                ->references('id')
                ->on('leases');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workOrders');
    }
}
