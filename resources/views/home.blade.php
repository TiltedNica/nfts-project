@php use App\Http\Controllers\CollectionController; @endphp
@extends('layouts.main')

@section('title')
    Main
@endsection


@section('header_action')
    <div class="flex flex-col gap-y-[36px] mt-[117px] 2xl:ms-[255px] ms-[120px]">
        <div>
            <h1 class="text-[56px] font-bold text-white leading-tight">Discover, and collect<br>
                <span class="text-gradient">extraordinary</span><br>
                Monster NFTs
            </h1>
            <h2 class="text-white">Marketplace for monster character collections non fungible token NFTs</h2>
        </div>
        <div class="flex gap-x-[16px] z-20">
            <a
                href="{{route('explore.index')}}"
                class="text-white bg-gradient-to-bl from-[#E250E5] to-[#4B50E6 rounded-[30px] w-[147px] h-[56px] flex items-center justify-center gap-x-[8px]">
                <img src="{{asset('img/rocket.svg')}}" alt="">
                Explore
            </a>
            <a href="{{route('items.create')}}" class="z-20 bg-white rounded-[30px] w-[147px] h-[56px] flex items-center justify-center gap-x-[8px]">
                <img src="{{asset('img/create.svg')}}" alt="">
                Create
            </a>
        </div>
        <div class="flex gap-x-[16px] z-20">
            <a
                href="{{route('create-collection.index')}}"
                class="text-white bg-gradient-to-bl from-[#E250E5]  to-[#4B50E6 rounded-[30px] w-[310px] z-20 h-[56px] flex items-center justify-center gap-x-[8px] ">
                <img src="{{asset('img/rocket.svg')}}" alt="">
                Create Collection
            </a>
        </div>
    </div>

@endsection

@section('main')
    <div class="flex gap-x-[38px] mt-[28px] justify-center  2xl:ms-[260px] 2xl:me-[260px] mb-[80px]">
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
    <div class="flex text-white pt-[60px] px-[120px] 2xl:px-[255px] justify-between items-center">
        <h1 class="font-bold text-[36px] leading-[44px]">New Posts</h1>
        <div>
            <a href="{{route('explore.index')}}">Explore more</a>
            <div class="bg-gradient-to-r from-[#E250E5] to-[#4B50E6] h-[1px]"></div>
        </div>
    </div>
    <div class="2xl:flex mt-[32px] ms-[120px] 2xl:ms-[255px] 2xl:w-[1440px] w-[1050px]">
            <x-auction-card :items="$items"/>
    </div>
    <div class="w-[149px] flex 2xl:ms-[886px] ms-[570px] justify-between pb-[74px] mt-[32px]">
        <button class="sliderBtn" id="prev">
            <img src="{{asset('img/arrow-left.svg')}}" alt="">
        </button>
        <img src="{{asset('img/Ellipse 30.svg')}}" alt="">
        <img src="{{asset('img/Ellipse 30.svg')}}" alt="">
        <img src="{{asset('img/Ellipse 30.svg')}}" alt="">
        <img src="{{asset('img/Ellipse 30.svg')}}" alt="">
        <button id="next" class="sliderBtn">
            <img src="{{asset('img/arrow-right.svg')}}" alt="">
        </button>
    </div>
    <script>
        let buttons = Array.from(document.querySelectorAll('.sliderBtn'));
        const carousel = document.querySelector(".carousel");
        let imageIndex = 0
        const firstImage = carousel.querySelectorAll('.image')[0];

        buttons.forEach(function (button) {
            button.addEventListener("click", function (e) {
                console.log(firstImage)
                let firstImgWidth = firstImage.clientWidth + 30;
                if (button.id === "prev") {
                    if (imageIndex === 0) {
                        return
                    }
                    imageIndex -= 1;
                    console.log(imageIndex)
                    carousel.scrollLeft -= firstImgWidth;
                //  && imageIndex < contents.length - 1
                } else if (button.id === "next" && imageIndex >= 0) {
                    imageIndex += 1;
                    console.log(imageIndex)
                    carousel.scrollLeft += firstImgWidth;
                }
            })
        })
    </script>
@endsection

@section('collections')
    <div class="flex text-white pt-[60px] px-[120px] 2xl:px-[255px] justify-between items-center">
        <h1 class="font-bold text-[36px] leading-[44px]">Popular Collection</h1>
        <div>
            <a href="#">Explore more</a>
            <div class="bg-gradient-to-r from-[#E250E5] to-[#4B50E6] h-[1px]"></div>
        </div>
    </div>


    <div class="2xl:grid-cols-3 grid-cols-2 grid gap-[30px]  ms-[120px] 2xl:ms-[255px] mt-[38px] mb-[80px] 2xl:w-[1410px] w-[1000px]">
        @foreach($collections as $collection)
            <x-collection-card :collection="$collection"/>
        @endforeach

    </div>
@endsection

@section('top_seller')
    <div class="flex text-white pt-[60px] px-[120px] 2xl:px-[255px] justify-between items-center">
        <h1 class="font-bold text-[36px] leading-[44px]">Top Seller</h1>
    </div>
    <div>
        <x-top-seller :user="$user"/>
    </div>
@endsection

@section('today_picks')
    <div class="flex text-white pt-[60px] px-[120px] 2xl:px-[255px] justify-between items-center">
        <h1 class="font-bold text-[36px] leading-[44px]">Today's Picks</h1>
        <div>
            <a href="{{route('explore.index')}}">Explore more</a>
            <div class="bg-gradient-to-r from-[#E250E5] to-[#4B50E6] h-[1px]"></div>
        </div>
    </div>
    <div class="mt-[40px] mb-[171px]">
        <x-today-pick :todayItem="$todayItem"/>
    </div>

@endsection
