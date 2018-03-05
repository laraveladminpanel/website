<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocVersionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_versions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 10);
            $table->string('code', 40)->nullable();
            $table->integer('doc_version_type_id')->unsigned();
            $table->foreign('doc_version_type_id')->references('id')->on('doc_version_types')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('doc_versions');
    }
}
