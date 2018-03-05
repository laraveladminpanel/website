<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->string('slug', 120);
            $table->string('description')->nullable();
            $table->text('body');
            $table->integer('doc_category_id')->unsigned()->nullable();
            $table->foreign('doc_category_id')->references('id')->on('doc_categories')->onDelete('set null');
            $table->integer('parent_id')->unsigned()->nullable();
            $table->foreign('parent_id')->references('id')->on('doc_pages')->onDelete('set null');
            $table->integer('next_doc_page_id')->unsigned()->nullable();
            $table->foreign('next_doc_page_id')->references('id')->on('doc_pages')->onDelete('set null');
            $table->integer('doc_version_id')->unsigned();
            $table->foreign('doc_version_id')->references('id')->on('doc_versions')->onDelete('cascade');
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
        Schema::dropIfExists('doc_pages');
    }
}
