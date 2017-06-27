<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionCostAnalysesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section__cost__analyses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Section_Id');
            $table->string('Worked_date');
            $table->string('Initial_Construction_Cost');
            $table->string('Salvage_value');
            $table->string('Discount_Rate');
            $table->string('Analysis_Period');
            $table->string('Alternative')->nullable();
            $table->string('input_TotalMaintCost')->nullable();
            $table->string('input_Totalcostrehab')->nullable();
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
        Schema::dropIfExists('section__cost__analyses');
    }
}
