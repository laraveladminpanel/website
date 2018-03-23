<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocPage extends Model
{
    public function category()
    {
        return $this->belongsTo(DocCategory::class);
    }

    public function docCategoryId()
    {
        return $this->category();
    }

    public function parent()
    {
        return $this->belongsTo(DocPage::class, 'parent_id');
    }

    public function parentId()
    {
        return $this->parent();
    }

    public function nextDocPageId()
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
