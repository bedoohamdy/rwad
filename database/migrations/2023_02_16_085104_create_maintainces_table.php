<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintaincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintainces', function (Blueprint $table) {
            $table->id();
            $table->integer("Tabashery");
            $table->string("PlateNumber");
            $table->string("CarType");
            $table->integer("Counter");
            $table->string("Desc");
            $table->string("CategName");
            $table->string("GroupName");
            $table->string("BranchName");
            $table->integer("Count");
            $table->string("op");
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
        Schema::dropIfExists('maintainces');
    }
}
