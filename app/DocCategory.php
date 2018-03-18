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

    public function version()
    {
        return $this->belongsTo(DocVersion::class, 'doc_version_id');
    }

    public function parentId()
    {
        return $this->parent();
    }

    public function parentIdList()
    {
        return $this->adminList()->get();
    }

    public function docVersionId()
    {
        return $this->version();
    }

/*    public function adminList()
    {
        return $this->whereHas('version', function($query){
            $query->whereName(request('v'));
        });
    }*/

/*    public function docVersionIdList()
    {
        return $this->version();
    }*/
}
