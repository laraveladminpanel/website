<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(DocVersionTypesTableSeeder::class);
        $this->call(DocVersionsTableSeeder::class);
        $this->call(DocCategoriesTableSeeder::class);
        $this->call(DocPagesTableSeeder::class);
    }
}
