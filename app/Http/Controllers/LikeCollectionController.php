<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use const http\Client\Curl\AUTH_ANY;

class LikeCollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Collection $collection)
    {
        $collection->likes()->create(['user_id' => $request->user()->id]);
        return back();
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
    public function destroy(Request $request, Collection $collection, User $user)
    {
//        $request->user()->likes()->where('likeable_id', $collection->id)->orWhere('likeable_type', 'collection')->orWhere('user_id', auth()->user()->id)->delete();
//        dd(auth()->user()->id);
        $userId = Auth::id();
        $request->user()->likes()->where('user_id', $userId)->where('likeable_id', $collection->id)->where('likeable_type', 'collection')->delete();
        return back();
    }
}
