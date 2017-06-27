<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_infos', function (Blueprint $table) {
            $table->increments('Project_Id');
            $table->string('Created_By'); // user who created the project
            $table->string('Client_Name');
            $table->string('Project_Name');
            $table->string('Company_Name');
            $table->text('Company_Logo_URL');
            $table->string('Inspect_By');
            $table->string('Checker');
            $table->string('Supervisior');
            $table->string('Date');
            $table->string('Issue_Number');
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
        Schema::dropIfExists('project_infos');
    }
}
