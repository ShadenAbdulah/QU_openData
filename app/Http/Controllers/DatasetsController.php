<?php

namespace App\Http\Controllers;

use App\Models\Dataset;
use App\Models\Tag;
use Illuminate\Http\Request;

class DatasetsController extends Controller
{
    public function index(Request $request, Tag $tag = NULL)
    {
        $dataset = Dataset::select();

        if (request('search')) {
            $dataset->where('ar_title', 'like', "%$request->search%")
                ->orWhere('ar_description', 'like', '%' . request('search') . '%')
                ->orWhere('periodically_updating', 'like', '%' . request('search') . '%')
                ->simplePaginate(5);
        }
        if ($tag)
            $dataset = $tag->datasets();

        return view('dataset.index', [
            'datasets' => $dataset->published()->simplePaginate(5),
        ]);
    }

    public function show(Dataset $dataset)
    {
        return view('dataset.show', [
            'data' => $dataset,
        ]);
    }
}
