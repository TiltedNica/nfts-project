<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Collection;
use App\Models\User;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index(User $user)
    {

//        $items = Item::where('user_id', $user->id)->get();

        $items = Item::with('user')->where('user_id', $user->id)->get();
        $categories = Category::all()->keyBy('id');
        $collections = Collection::all()->keyBy('id');

        return view('author.wall', ['user' => $user, 'categories' => $categories, 'collections' => $collections, 'items'=>$items]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(User $user)
    {
        $users = User::all()->keyBy('id');
        $categories = Category::all()->keyBy('id');
        $collections = Collection::all()->keyBy('id');

        return view('posts.create', ['user' => $user, 'categories' => $categories, 'collections' => $collections, 'users'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'price' => ['required'],
            'title'=>['required'],
            'description'=>['required'],
            'royalties'=>['required'],
            'size'=>['required'],
            'img_item'=>['required']
        ]);

        Item::create([
            'price' => $request->price,
            'title'=>$request->title,
            'description'=>$request->description,
            'royalties'=>$request->royalties,
            'size'=>$request->size,
            'img_item'=>$request->img_item,
            'category_id'=>$request->category_id,
            'collection_id'=>$request->collection_id,
            'user_id'=>auth()->user()->id
        ]);

        return redirect()->route('items.create');
    }

    /**
     * Display the specified resource.
     */
    public function show($name, $item)
    {
        $user = User::where('name', $name)->firstOrFail();
        $item = Item::where('id', $item)->where('user_id', $user->id)->firstOrFail();

        return view('posts.show', ['item' => $item, 'user' => $user]);
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
