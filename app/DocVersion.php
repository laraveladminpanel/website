<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocVersion extends Model
{
    /**
     * Get the categories for the version.
     */
    public function categories()
    {
        return $this->hasMany(DocCategory::class);
    }

    /**
     * Get the pages for the version.
     */
    public function pages()
    {
        return $this->hasMany(DocPage::class);
    }

    /**
     * Get the version type.
     */
    public function docVersionTypeId()
    {
        return $this->belongsTo(DocVersionType::class);
    }

    /**
     * Get the version type.
     */
    public function versionType()
    {
        return $this->docVersionTypeId();
    }
}
