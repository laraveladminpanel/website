<?php

use App\DocVersion;
use App\DocVersionType;
use Illuminate\Database\Seeder;

class DocVersionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $docVersionTypeAlpha = DocVersionType::whereName('alpha')->first();
        $docVersionTypeBeta = DocVersionType::whereName('beta')->first();
        $docVersionTypeStable = DocVersionType::whereName('stable')->first();

        DocVersion::firstOrCreate([
            'name' => '0.1',
            'doc_version_type_id' => $docVersionTypeAlpha->id
        ]);

        DocVersion::firstOrCreate([
            'name' => '0.2',
            'doc_version_type_id' => $docVersionTypeBeta->id
        ]);

        DocVersion::firstOrCreate([
            'name' => '0.3',
            'doc_version_type_id' => $docVersionTypeBeta->id
        ]);

        DocVersion::firstOrCreate([
            'name' => '1.0',
            'doc_version_type_id' => $docVersionTypeStable->id
        ]);
    }
}
