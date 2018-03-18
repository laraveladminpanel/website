<?php

namespace App\Http\Controllers;

use App\Doc;
use Illuminate\Http\Request;

class DocController extends Controller
{
    public function docVersion($version)
    {
        $doc = Doc::whereVersion($version)->firstOrFail();
        return view('doc', compact('doc'));
    }
}
