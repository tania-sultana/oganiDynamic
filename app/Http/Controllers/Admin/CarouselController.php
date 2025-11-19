<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarouselRequest;
use App\Models\Carousel;
use App\Repositories\CarouselRepository;
use App\Repositories\MediaRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarouselController extends Controller
{
    public function index(Request $request)
    {
        $carousels = Carousel::all();
        return view('admin.carousel.index', compact('carousels'));
    }
    public function create()
    {
        return view('admin.carousel.create');
    }
    public function store(CarouselRequest $request)
    {
        // $data = new Carousel();
        // $data->header = $request->header;
        // if ($request->hasFile('thumbnail')) {
        //     $media = MediaRepository::storeByRequest($request->thumbnail, 'carousel');
        //     $data->media_id = $media->id;
        // }
        // $data->save();
        // return to_route('admin.carousel.index')->with('success', 'Carousel created successfully!');

        $media = null;
        if ($request->hasFile('thumbnail')) {
            $media = MediaRepository::storeByRequest($request->thumbnail, 'carousel');
        }

        Carousel::create([
            'header' => $request->header,
            'media_id' => $media ? $media->id : null,
        ]);

        return to_route('admin.carousel.index')->withSuccess('Carousel created successfully!');
    }

    public function edit(Carousel $carousel)
    {
        return view('admin.carousel.edit', compact('carousel'));
    }

    public function update(CarouselRequest $request, Carousel $carousel)
    {
        if ($carousel && $carousel?->id) {
            CarouselRepository::updateByRequest($request, $carousel);
        } else {
            $this->store($request);
        }
        return to_route('admin.carousel.index')->with('success', 'Carousel updated successfully!');
    }

    public function destroy(Carousel $carousel)
    {
        $media = $carousel->media;
        if ($media && Storage::exists($media->src)) {
            Storage::delete($media->src);
        }
        $carousel->delete();
        return back()->with('success', 'Carousel deleted successfully!');
    }
}
