<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Arr;


class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('create-collection');
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
        $data = $request->validate([
            'collection_name' => ['required'],
            'img_collection'=>['required']
        ]);

        $image = $request->file('img_collection');
        $imageName = Str::uuid().".".$image->extension();
        $serverImage = Image::make($image);
        $serverImage->fit(1000, 1000);

        $imagePath = public_path('profiles').'/'.$imageName;
        $serverImage->save($imagePath);

        $data['img_collection'] = $imageName;
        $data['user_id'] = auth()->user()->id;

        Collection::create($data);

        return redirect()->route('create-collection.index');
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
