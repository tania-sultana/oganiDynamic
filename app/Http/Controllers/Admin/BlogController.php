<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Models\Category;
use App\Repositories\BlogRepository;
use App\Repositories\MediaRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $blogs = Blog::all();

        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        $categories = Category::latest()->get();

        return view('admin.blog.create', compact('categories'));
    }

    public function store(BlogRequest $request)
    {
        BlogRepository::storeByRequest($request);

        return to_route('admin.blog.index')->withSuccess('Blog created successfully!');
    }


    public function show(Blog $blog)
    {
        return view('admin.blog.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        $categories = Category::latest()->get();

        return view('admin.blog.edit', compact('blog', 'categories'));
    }

    public function update(BlogRequest $request, Blog $blog)
    {
        BlogRepository::updateByRequest($request, $blog);

        return to_route('admin.blog.index')->withSuccess('Blog updated successfully!');
    }

    public function destroy(Blog $blog)
    {
        $firstThumbnail = $blog->firstMedia();
        if ($blog->firstMedia && Storage::exists($blog->firstMedia->src)) {
            Storage::delete($blog->firstMedia->src);
        }

        $secondThumbnail = $blog->secondMedia();
        if ($blog->secondMedia && Storage::exists($blog->secondMedia->src)) {
            Storage::delete($blog->secondMedia->src);
        }

        $blog->delete();

        if ($firstThumbnail) {
            $firstThumbnail->delete();
        }
        if ($secondThumbnail) {
            $secondThumbnail->delete();
        }

        return back()->with('success', 'Blog deleted successfully!');
    }

    public function socialLink(Blog $blog)
    {

        return view('admin.blog.socialLink', compact('blog'));
    }

    public function socialLinkUpdate(Blog $blog, Request $request)
    {
        $blog->sicialLink()->updateOrCreate([
            'blog_id' => $blog ? $blog->id : null

        ], [
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'whatsapp' => $request->whatsapp,
        ]);
        return to_route('admin.blog.index')->withSuccess('Social Link updated successfully!');
    }

}
