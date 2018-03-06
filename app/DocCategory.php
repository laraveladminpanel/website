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

    public function parent()
    {
        return $this->belongsTo(DocCategory::class, 'parent_id');
    }

    public function parentId()
    {
        return $this->parent();
    }

    public function version()
    {
        return $this->belongsTo(DocVersion::class);
    }

    public function docVersionId()
    {
        return $this->version();
    }
}
