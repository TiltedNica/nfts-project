<?php

namespace App\Http\Controllers;

use App\Events\MyEvent;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeItemController extends Controller
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
    public function store(Request $request, Item $item)
    {
        $item->likes()->create(['user_id' => $request->user()->id]);



//        return back();
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
    public function destroy(Request $request, Item $item)
    {
        $user_id = auth()->user()->id;
//        dd($item->id);
        $request->user()->likes()->where('user_id', $user_id)->where('likeable_id', $item->id)->where('likeable_type', 'items')->delete();
        event(new MyEvent($item, Auth::user(), $item->likes()->count()));
        return response()->json([
            "count"=>$item->likes()->count(),
        ]);
//        return back();
    }
}
