@extends('layouts.app')

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
@endsection
