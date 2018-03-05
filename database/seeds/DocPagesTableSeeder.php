<?php

use App\DocPage;
use App\DocVersion;
use Illuminate\Database\Seeder;

class DocPagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $docVersion_0_1 = DocVersion::whereName('0.1')->first();

        $docCategoryGettingStarted = $docVersion_0_1->categories()->whereTitle('GETTING STARTED')->first();

        DocPage::firstOrCreate([
            'title' => 'Welcome',
            'slug' => 'getting-started',
            'description' => 'Documentation for Laravel Admin Panel 0.1 (still in development)',
            'body' => 'Welcome to the Laravel Admin Panel Documentation for version 0.1. These docs will teach you how to install, configure, and use Laravel Admin Panel so that way you can create some Documentation.',
            'doc_category_id' => $docCategoryGettingStarted->id,
            'doc_version_id' => $docVersion_0_1->id
        ]);

        $installationDocPage = DocPage::firstOrCreate([
            'title' => 'Installation',
            'slug' => 'installation',
            'description' => 'Learn how to install Laravel Admin Panel',
            'body' => 'Laravel Admin Panel is super easy to install. After creating your new Laravel application you can include the Laravel Admin Panel package with the following command: `$composer require laraveladminpanel/admin`.',
            'doc_category_id' => $docCategoryGettingStarted->id,
            'doc_version_id' => $docVersion_0_1->id
        ]);

        DocPage::firstOrCreate([
            'title' => 'Adding the Service Provider',
            'slug' => 'adding-the-service-provider',
            'body' => 'To add the Admin Service Provider open up your application config/app.php file and add LaravelAdminPanel\AdminServiceProvider::class',
            'doc_category_id' => $docCategoryGettingStarted->id,
            'parent_id' => $installationDocPage->id,
            'doc_version_id' => $docVersion_0_1->id
        ]);
    }
}
