@extends('layouts.main')

@section('title')
    Main
@endsection

@section('header_action')
    <div class="flex flex-col gap-y-[36px] mt-[117px] ms-[255px] z-10">
        <div>
            <h1 class="text-[56px] font-bold text-white leading-tight">Discover, and collect<br>
                <span class="text-gradient">extraordinary</span><br>
                Monster NFTs
            </h1>
            <h2 class="text-white">Marketplace for monster character collections non fungible token NFTs</h2>
        </div>
        <div class="flex gap-x-[16px]">
            <a
                class="text-white bg-gradient-to-bl from-[#E250E5]  to-[#4B50E6 rounded-[30px] w-[147px] h-[56px] flex items-center justify-center gap-x-[8px]">
                <img src="{{asset('img/rocket.svg')}}" alt="">
                Explore
            </a>
            <a href="{{route('items.create')}}" class="z-0 bg-white rounded-[30px] w-[147px] h-[56px] flex items-center justify-center gap-x-[8px]">
                <img src="{{asset('img/create.svg')}}" alt="">
                Create
            </a>
        </div>
    </div>
@endsection

@section('main')
    <div class="flex gap-x-[38px] mt-[28px] justify-center ms-[260px] me-[260px] mb-[80px]">
        <div class="flex flex-col items-center gap-y-[24px] w-[321px]">
            <div class="rounded-[16px] bg-[#5142FC] w-[56px] h-[56px] flex items-center justify-center">
                <img src="{{asset('img/wallet.svg')}}" alt="">
            </div>
            <div class="flex flex-col gap-y-[10px]">
                <h2 class="font-bold text-white text-[24px] leading-[30px] text-center">Set up your Wallet</h2>
                <p class="text-white text-center">Once you’ve set up your wallet of choice, connect it to OpenSeaby clicking the NFT Marketplacein the top
                    right corner.</p>
            </div>
        </div>
        <div class="flex flex-col items-center gap-y-[24px] w-[321px]">
            <div class="rounded-[16px] bg-[#47A432] w-[56px] h-[56px] flex items-center justify-center">
                <img src="{{asset('img/category.svg')}}" alt="">
            </div>
            <div class="flex flex-col gap-y-[10px]">
                <h2 class="font-bold text-white text-[24px] leading-[30px] text-center">Create your collection</h2>
                <p class="text-white text-center">Click Create and set up your collection. Add social links, a description, profile & banner images, and set a secondary sales fee.</p>
            </div>
        </div>
        <div class="flex flex-col items-center gap-y-[24px] w-[321px]">
            <div class="rounded-[16px] bg-[#9835FB] w-[56px] h-[56px] flex items-center justify-center">
                <img src="{{asset('img/gallery.svg')}}" alt="">
            </div>
            <div class="flex flex-col gap-y-[10px]">
                <h2 class="font-bold text-white text-[24px] leading-[30px] text-center">Add your NFTs</h2>
                <p class="text-white text-center">Upload your work (image, video, audio, or 3D art), add a title and description, and customize your NFTs with properties, stats.</p>
            </div>
        </div>
        <div class="flex flex-col items-center gap-y-[24px] w-[321px]">
            <div class="rounded-[16px] bg-[#DF4949] w-[56px] h-[56px] flex items-center justify-center">
                <img src="{{asset('img/save.svg')}}" alt="">
            </div>
            <div class="flex flex-col gap-y-[10px]">
                <h2 class="font-bold text-white text-[24px] leading-[30px] text-center">List them for sale</h2>
                <p class="text-white text-center">Choose between auctions, fixed-price listings, and declining-price listings. You choose how you want to sell your NFTs!</p>
            </div>
        </div>
    </div>
@endsection

@section('auctions')
    <div class="flex text-white pt-[60px] px-[255px] justify-between items-center">
        <h1 class="font-bold text-[36px] leading-[44px]">New Posts</h1>
        <div>
            <a href="#">Explore more</a>
            <div class="bg-gradient-to-r from-[#E250E5] to-[#4B50E6] h-[1px]"></div>
        </div>
    </div>
    <div class="flex gap-x-[30px] mt-[32px] pb-[122px] ms-[255px]">
            <x-auction-card :items="$items"/>
    </div>
@endsection

@section('collections')
    <div class="flex text-white pt-[60px] px-[255px] justify-between items-center">
        <h1 class="font-bold text-[36px] leading-[44px]">Popular Collection</h1>
        <div>
            <a href="#">Explore more</a>
            <div class="bg-gradient-to-r from-[#E250E5] to-[#4B50E6] h-[1px]"></div>
        </div>
    </div>
    <div class="grid-cols-3 grid gap-[30px] ms-[255px] mt-[38px] mb-[80px] w-[1410px]">
        @foreach($collections as $collection)
            <x-collection-card :collection="$collection"/>
        @endforeach

    </div>
@endsection
