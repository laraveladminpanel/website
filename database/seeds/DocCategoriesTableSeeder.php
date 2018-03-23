<?php

use App\DocCategory;
use App\DocVersion;
use Illuminate\Database\Seeder;

class DocCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $docVersion_0_1 = DocVersion::whereName('0.1')->first();
        $docVersion_0_2 = DocVersion::whereName('0.2')->first();
        $docVersion_0_3 = DocVersion::whereName('0.3')->first();
        $docVersion_1_0 = DocVersion::whereName('1.0')->first();

        DocCategory::firstOrCreate([
            'title' => 'GETTING STARTED',
            'doc_version_id' => $docVersion_0_1->id
        ]);

        DocCategory::firstOrCreate([
            'title' => 'CORE CONCEPTS',
            'doc_version_id' => $docVersion_0_1->id
        ]);

        DocCategory::firstOrCreate([
            'title' => 'CUSTOMIZATION',
            'doc_version_id' => $docVersion_0_1->id
        ]);

        DocCategory::firstOrCreate([
            'title' => 'TROUBLESHOOTING',
            'doc_version_id' => $docVersion_0_1->id
        ]);

        DocCategory::firstOrCreate([
            'title' => 'GETTING STARTED',
            'doc_version_id' => $docVersion_0_2->id
        ]);

        DocCategory::firstOrCreate([
            'title' => 'CORE CONCEPTS',
            'doc_version_id' => $docVersion_0_2->id
        ]);

        DocCategory::firstOrCreate([
            'title' => 'CUSTOMIZATION',
            'doc_version_id' => $docVersion_0_2->id
        ]);

        DocCategory::firstOrCreate([
            'title' => 'TROUBLESHOOTING',
            'doc_version_id' => $docVersion_0_2->id
        ]);
    }
}
