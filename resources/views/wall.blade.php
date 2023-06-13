@extends('layouts.auth')

@section('title')
    Profile
@endsection

@section('header_action')
    <div class="flex justify-center">
        <div class="flex flex-col gap-y-[12px] mt-[59px] items-center">
            <h1 class="font-bold text-[48px] text-white">Author {{$user->name}}</h1>
            <div class="flex gap-x-[12px] text-[#8A8AA0]">
                <a>Home</a>
                <div>/</div>
                <a>Pages</a>
                <div>/</div>
                <a>Author</a>
            </div>
        </div>
    </div>
@endsection

@section('main')
        <x-author-banner :user="$user"/>
        <x-item-card :items="$items" :user="$user"/>
        <div class="">
            <div class="flex text-white pt-[60px] px-[255px] justify-between items-center mb-[40px]">
                <h1 class="font-bold text-[36px] leading-[44px]">More From This Author</h1>
                <div>
                    <a href="#">Explore more</a>
                    <div class="bg-gradient-to-r from-[#E250E5] to-[#4B50E6] h-[1px]"></div>
                </div>
            </div>
            <div class="grid grid-cols-4 gap-[30px] ms-[255px] w-[1410px]">
                @foreach($user->items as $item)
                    <x-card :user="$user"/>
                @endforeach
            </div>
        </div>
@endsection
