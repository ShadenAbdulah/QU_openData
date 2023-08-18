<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TagsController extends Controller
{
    public function index()
    {
        return view('admin.tag.index', [
            'tags' => Tag::simplePaginate(5),
        ]);
    }

    public function store(Request $request)
    {
        Tag::create(
            $request->validate([
                'name' => ['required', Rule::unique('tags', 'name')],
            ])
        );

        return redirect()->route('tags.index', ['tags' => Tag::all()])
            ->with('successes', 'أُضيف الوسم بنجاح ✔️');
    }

    public function create()
    {
        return view('admin.tag.create');
    }

    public function edit(Tag $tag)
    {
        return view('admin.tag.edit', [
            'tag' => $tag,
        ]);
    }

    public function update(Request $request, Tag $tag)
    {
        $attr = $request->validate([
            'name' => ['required', Rule::unique('tags', 'name')->ignore($tag->id)],
        ]);
        $tag->update($attr);

        return redirect()->route('tags.index')
            ->with('successes', 'حُدث الوسم بنجاح ✔️')->withErrors('');
    }

    public function destroy(Tag $tag)
    {
        $tag->datasets()->detach();
        $tag->delete();

        return redirect()->route('tags.index')
            ->with('successes', 'حُذف الوسم بنجاح ✔️');
    }
}
