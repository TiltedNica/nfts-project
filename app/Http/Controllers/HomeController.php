<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Item;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;


class HomeController extends Controller
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
        $user = User::with('items')->get();
        $items = Item::with('user', 'likes')->withCount('likes')->orderBy('created_at', 'DESC')->get();
        $todayItem = Item::with('user', 'likes')->withCount('likes')->whereDate('created_at', Carbon::today())->get();

        $collections = Collection::with('items', 'user', 'likes')->withCount('likes')->get();
        return view('home', ['collections'=> $collections, 'items'=>$items, 'user'=>$user, 'todayItem'=>$todayItem]);
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
