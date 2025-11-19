<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HeroSectionRequest;
use App\Models\HeroSection;
use App\Repositories\HeroSectionRepository;
use App\Repositories\MediaRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroSectionController extends Controller
{
    public function index(Request $request)
    {
        $herosection = HeroSection::latest()->first();
        return view('admin.herosection.index', compact('herosection'));
    }
    public function create()
    {
        return view('admin.herosection.create');
    }
    public function store(HeroSectionRequest $request)
    {
       $data = new HeroSection();
       $data->header = $request->header;
       $data->first_title = $request->first_title;
       $data->second_title = $request->second_title;
       $data->short_description = $request->short_description;
       if ($request->hasFile('thumbnail')) {
          $media = MediaRepository::storeByRequest($request->thumbnail, 'herosection');
          $data->media_id = $media->id;
       }
       $data->btn_name = $request->btn_name;
       $data->btn_url = $request->btn_url;
       $data->save();
       return to_route('admin.herosection.index')->with('success', 'Hero Section created successfully!');
    }
    public function edit(HeroSection $herosection)
    {
        return view('admin.herosection.edit', compact('herosection'));
    }
    public function update(HeroSectionRequest $request, HeroSection $herosection)
    {
        if ($herosection && $herosection?->id){
            HeroSectionRepository::updateByRequest($request, $herosection);
        }
        else{
            $this->store($request);
        }
        return to_route('admin.herosection.index')->with('success', 'Hero Section updated successfully!');
    }
    public function destroy(HeroSection $herosection)
    {
       $media = $herosection->media;
       if($media && Storage::exists($media->src)){
        Storage::delete($media->src);
       }
       $herosection->delete();
       return back()->with('success', 'Hero Section deleted successfully!');

    }
}

