<?php

use App\DocVersionType;
use Illuminate\Database\Seeder;

class DocVersionTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DocVersionType::firstOrCreate(['name' => 'stable']);
        DocVersionType::firstOrCreate(['name' => 'beta']);
        DocVersionType::firstOrCreate(['name' => 'alpha']);
    }
}
