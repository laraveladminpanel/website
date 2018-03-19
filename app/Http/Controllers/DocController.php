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

        return view('docs.version', compact('version'));
    }

    public function page($version, $slug)
    {
        $version = DocVersion::whereName($version)
            ->firstOrFail();

        $page = $version->pages()
            ->whereSlug($slug)
            ->firstOrFail();

        return view('docs.page', compact('page'));
    }
}
