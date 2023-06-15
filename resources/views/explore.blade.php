@extends('layouts.app')

@section('header_action')
    <div class="flex justify-center">
        <div class="flex flex-col gap-y-[12px] mt-[59px] items-center">
            <h1 class="font-bold text-[48px] text-white">Explore</h1>
            <div class="flex gap-x-[12px] text-[#8A8AA0]">
                <a>Home</a>
                <div>/</div>
                <a>Pages</a>
                <div>/</div>
                <a>Explore</a>
            </div>
        </div>
    </div>
@endsection

@section('main')
    <div class="flex ms-[255px] mt-[80px] me-[260px]">
        <aside class="text-white w-[280px] flex flex-col gap-y-[10px]">
            <div class="border-white border-b me-[81px] pb-[24px] border-opacity-20">
                <h2 class="text-white font-bold text-[20px] leading-[26px]">Collections</h2>
                @foreach($collections as $collect)
                    {{--                {{dd($items)}}--}}
                    <ul class="flex flex-col gap-y-[8px]">
                        <li class="list-none flex gap-x-[8px]">
                            <input name="{{$collect->collection_name}}" type="checkbox">
                            <label class="text-white font-light text-[13px] leading-[20px]" for="buy_now">{{$collect->collection_name}}</label>
                        </li>
                    </ul>
                @endforeach
            </div>

            <h2 class="text-white font-bold text-[20px] leading-[26px]">Categories</h2>
            @foreach($categories as $cat)
                <ul class="flex flex-col gap-y-[8px]">
                    <li class="list-none flex gap-x-[8px]">
                        <input name="{{$cat->name}}" type="checkbox">
                        <label class="text-white font-light text-[13px] leading-[20px]" for="buy_now">{{$cat->name}}</label>
                    </li>
                </ul>
            @endforeach
        </aside>

        <div class="w[1071px]">
            <x-explorer-card :items="$items"/>
        </div>
    </div>
@endsection
