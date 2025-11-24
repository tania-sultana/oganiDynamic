<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\cardRequest;
use App\Models\Card;
use App\Models\Category;
use App\Repositories\CardRepository;
use App\Repositories\MediaRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CardController extends Controller
{
    public function index(Request $request)
    {
        $cards = Card::all();
        return view('admin.card.index', compact('cards'));
    }

    public function create()
    {
        $categories = Category::latest()->get();
        return view('admin.card.create', compact('categories'));
    }

    public function store(cardRequest $request)
    {
        $media = null;
        if ($request->hasFile('thumbnail')) {
            $media = MediaRepository::storeByRequest($request->thumbnail, 'card');
        }
        Card::create([
            'category_id' => $request->category,
            'offer' => $request->offer,
            'btn_name' => $request->btn_name,
            'btn_url' => $request->btn_url,
            'media_id' => $media?->id,
        ]);
        return to_route('admin.card.index')->withSuccess('Card created successfully!');
    }

    public function show(Card $card)
    {
        return view('admin.card.show', compact('card'));
    }

    public function edit(Card $card)
    {
        $categories = Category::latest()->get();
        return view('admin.card.edit', compact('card', 'categories'));
    }

    public function update(cardRequest $request, Card $card)
    {
        CardRepository::updateByRequest($request, $card);
        return to_route('admin.card.index')->withSuccess('Card updated successfully!');
    }

    public function destroy(Card $card)
    {
        $media = $card->media;
        if ($media && Storage::exists($media->src)) {
            Storage::delete($media->src);
        }
        $card->delete();
        if ($media)
            $media->delete();
        return back()->with('success', 'Card deleted successfully!');
    }
}
