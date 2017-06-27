<?php

use Illuminate\Database\Seeder;

class project_info_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Default values 

        DB::table('project_infos')->insert([
        'Created_By' => 'Bereket',
        'Client_Name'=> 'Lorem',
        'Project_Name' => 'project_name',
        'Company_Name' => 'Accra',
        'Company_Logo_URL' => 'uploads/images/logo.png',
        'Inspect_By' => 'Alex Lorem',
        'Checker' => 'someone',
        'Supervisior' =>'Lorem xdn',
        'Date' => '2/12/2017',
        'Issue_Number' => '13245648'
        ]);
        
    }
}
