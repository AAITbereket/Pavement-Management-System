<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePavementSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pavement_sections', function (Blueprint $table) {
            $table->increments('Section_Id');
            $table->string('Section_Name');
            $table->string('Project_Id'); // user who created the project
            $table->string('From');
            $table->string('To');
            $table->string('Surface');
            $table->integer('Length');
            $table->integer('Carriage_width');
            $table->integer('Area');
            $table->string('Street_type');
            $table->string('Direction');
            $table->string('Carriage_way_type');
            $table->string('Number_of_lane');
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
        Schema::dropIfExists('pavement_sections');
    }
}
