<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionConditionIndicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_condition_indices', function (Blueprint $table) {
            $table->increments('Condition_Index_id');
            $table->string('Section_Id'); // user who created the project
            $table->string('Inspection_date');
            $table->string('Inspection_Id');
            $table->string('Distress_type');
            $table->string('Severity');
            $table->string('Quantity');
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
        Schema::dropIfExists('section_condition_indices');
    }
}
