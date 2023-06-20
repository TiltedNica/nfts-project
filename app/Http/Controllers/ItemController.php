<?php

namespace App\Http\Controllers;

use App\Events\MyEvent;
use App\Models\Category;
use App\Models\Collection;
use App\Models\User;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ItemController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index(User $user)
    {

//        $items = Item::where('user_id', $user->id)->get();

        $items = Item::with('likes', 'user')->withCount('likes')->where('user_id', $user->id)->get();
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

    public function like(Item $item)
    {
        if ($like = $item->likes()->where('user_id', Auth::id())->first()){
            $like->delete();
        }else{
            $item->likes()->create([
                'user_id'=>Auth::id(),
            ]);

        }
        event(new MyEvent($item, Auth::user(),'item', $item->likes()->count()));
        return response()->json([
            "count"=>$item->likes()->count(),
        ]);
    }
    /**
     * Display the specified resource.
     */
    public function show($name, $item)
    {
        $user = User::query()->where('name', $name)->firstOrFail();
        $items = Item::with('likes')->withCount('likes')->where('id','!=', $item)->where('user_id', $user->id)->get();
        $item = Item::with('likes')->withCount('likes')->where('id', $item)->where('user_id', $user->id)->firstOrFail();

        return view('posts.show', ['item' => $item, 'user' => $user, 'items'=>$items]);
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
