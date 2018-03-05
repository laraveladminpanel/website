<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocCategory extends Model
{
    /**
     * Get the pages for the version.
     */
    public function pages()
    {
        return $this->hasMany(DocPage::class);
    }
}
