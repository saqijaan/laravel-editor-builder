<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Page $page)
    {
        return $page->getEditor();
    }

    public function store(Request $request, Page $page)
    {
        return $page->saveEditorData($request);
    }

    public function templates(Page $page)
    {
    //    return array_merge(
    //        $page->getTemplatesFromPath(resource_path('views/templates')),
    //        $page->getBlocksFromPath(resource_path('views/blocks')),
    //     );
        return [];
    }
}
