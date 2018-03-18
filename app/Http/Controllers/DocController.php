<?php

namespace App\Http\Controllers;

use App\DocVersion;
use Illuminate\Http\Request;

class DocController extends Controller
{
    public function version($version)
    {
        $version = DocVersion::whereName($version)
            ->firstOrFail();

        return $version;
    }

    public function page($version, $slug)
    {
        $version = DocVersion::whereName($version)
            ->firstOrFail();

        $page = $version->pages()
            ->whereSlug($slug)
            ->firstOrFail();

        return $page;
    }
}
