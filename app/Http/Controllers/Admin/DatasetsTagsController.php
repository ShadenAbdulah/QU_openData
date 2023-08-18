<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dataset;
use App\Models\Tag;
use Illuminate\Http\Request;

class DatasetsTagsController extends Controller
{
    public function store(Request $request, Dataset $dataset)
    {
        $tag = Tag::find($request->tag);
        if (!isset($tag))
            return redirect()->back();

        $dataset->tags()->attach($tag);
        return redirect()->back();
    }

    public function destroy(Dataset $dataset, Tag $tag)
    {
        $dataset->tags()->detach($tag->id);
        return redirect()->back();
    }
}
