<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dataset;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DatasetsController extends Controller
{
    public function index(Tag $tag = null)
    {
        $datasets = Dataset::select();
        if ($tag)
            $datasets = $tag->datasets();

        return view('admin.dataset.index', [
            'datasets' => $datasets->simplePaginate(5)
        ]);
    }

    public function store(Request $request)
    {
        $attr =
            request()->validate([
                'ar_title' => 'required', Rule::unique('Datasets', 'ar_title'),
                'status' => 'required'
            ]);
        $dataset = Dataset::create(array_merge($attr, [
            'ar_description' => $request->ar_description,
            'periodically_updating' => $request->periodically_updating,
            'created_by' => auth()->user()->id,
            'updated_by' => request()->user()->id,
        ]));

        return redirect()->route('datasets.show', ['dataset' => $dataset])
            ->with('successes', 'أضيفت المجموعة بنجاح ✔️');
    }

    public function create()
    {
        return view('admin.dataset.create');
    }

    public function update(Request $request, Dataset $dataset)
    {
        $request->validate([
            'ar_title' => ['required', Rule::unique('datasets', 'ar_title')
                ->ignore($dataset->id)],
        ]);

        $attr = [
            'ar_title' => $request->ar_title,
            'ar_description' => $request->ar_description,
            'periodically_updating' => $request->periodically_updating,
            'status' => $request->status,
            'updated_by' => $request->user()->id
        ];

        $dataset->update($attr);

        return redirect()->route('datasets.show', ['dataset' => $dataset])
            ->with('successes', 'حُدثت المجموعة بنجاح ✔️');
    }

    public function show(Dataset $dataset)
    {
        return view('admin.dataset.show', [
            'data' => $dataset,
        ]);
    }

    public function edit(Dataset $dataset)
    {
        return view('admin.dataset.edit', [
            'dataset' => $dataset,
            'tags' => Tag::whereNotIn('id', $dataset->tags->pluck('id'))->get()
        ]);
    }

    public function destroy(Dataset $dataset)
    {
        $dataset->tags()->detach($dataset->tags());
        $dataset->delete();

        return redirect()->route('datasets.index')
            ->with('successes', 'حُذفت المجموعة بنجاح ✔️');
    }
}
