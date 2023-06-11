<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.register');
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
            'name' => ['required', 'max:20'],
            'email' => ['required', 'unique:users', 'email', 'max:60'],
            'password' => ['required', 'confirmed', 'min:6'],
            'desc_user'=>['required', 'max:100'],
            'img_user'=>['required']
        ]);

        $data['password'] = bcrypt($data['password']); //Hashing password

        $image = $request->file('img_user');
        $imageName = Str::uuid().".".$image->extension();
        $serverImage = Image::make($image);
        $serverImage->fit(1000, 1000);

        $imagePath = public_path('profiles').'/'.$imageName;
        $serverImage->save($imagePath);

        $data['img_user'] = $imageName;

        User::create($data);

//        auth()->attempt([
//            'email' => $request->email,
//            'password'=>$request->password
//        ]);

        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('home');
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
