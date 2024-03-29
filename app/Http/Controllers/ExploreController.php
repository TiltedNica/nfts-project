<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Item;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()    {

        $items = Item::with('user', 'likes')->withCount('likes')->orderBy('created_at', 'DESC')->get();
        $collections = Collection::all();
        $categories  = Category::all();
        return view('/explore', ['collections' => $collections, 'categories'=>$categories, 'items'=>$items]);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function filter(Request $request)
    {
        $query = Item::with('user', 'likes')->withCount('likes');



        if ($request->filled('collections')) {
            $collections = $request->input('collections');
            $query->whereIn('collection_id', $collections);
        }

        if ($request->filled('categories')) {
            $categories = $request->input('categories');
            $query->whereIn('category_id', $categories);
        }


        $items = $query->get();

        $collections = Collection::all();
        $categories = Category::all();

        return view('/explore', compact('collections', 'categories', 'items'));
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
