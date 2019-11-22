<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaseTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lease_Types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('period');
            $table->timestamps();
        });

        $periods = [['Mothly', 1], ['Quarter', 3]];

        for ($i = 0; $i < count($periods); $i++) {
            \App\leaseType::insert([
                'name' => $periods[$i][0],
                'period' => $periods[$i][1],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lease_Types');
    }
}
