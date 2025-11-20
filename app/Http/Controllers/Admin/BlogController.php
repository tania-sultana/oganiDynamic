<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Repositories\BlogRepository;
use App\Repositories\MediaRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $blogs = Blog::all();
        // dd($blogs);
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $firstMedia = null;
        if ($request->hasFile('first_thumbnail')) {
            $firstMedia = MediaRepository::storeByRequest($request->first_thumbnail, 'blog');
        }

        $secondMedia = null;
        if ($request->hasFile('second_thumbnail')) {
            $secondMedia = MediaRepository::storeByRequest($request->second_thumbnail, 'blog');
        }

        Blog::create([
            'first_title' => $request->first_title,
            'second_title' => $request->second_title,
            'name' => $request->name,
            'designation' => $request->designation,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'category' => $request->category,
            'tag' => $request->tag,
            'first_thumbnail_id' => $firstMedia?->id,
            'second_thumbnail_id' => $secondMedia?->id,
        ]);

        return to_route('admin.blog.index')->withSuccess('Blog created successfully!');
    }


    public function show(Blog $blog)
    {
        return view('admin.blog.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(BlogRequest $request, Blog $blog)
    {
        BlogRepository::updateByRequest($request, $blog);
        return to_route('admin.blog.index')->withSuccess('Blog updated successfully!');
    }

    public function destroy(Blog $blog)
    {
        if ($blog->firstMedia && Storage::exists($blog->firstMedia->src)) {
            Storage::delete($blog->firstMedia->src);
            $blog->firstMedia->delete();
        }

        if ($blog->secondMedia && Storage::exists($blog->secondMedia->src)) {
            Storage::delete($blog->secondMedia->src);
            $blog->secondMedia->delete();
        }

        $blog->delete();

        return back()->with('success', 'Blog deleted successfully!');
    }
}
