@extends('layouts.auth')

@section('title')
    {{$item->title}}
@endsection

@section('main')
    <div class="flex gap-x-[100px] mt-[80px] ms-[255px] mb-[80px]">
        <div>
            <img src="{{asset('uploads')."/".$item->img_item}}" alt="" class="bg-[#7A798A] rounded-[10px] w-[690px] h-[690px]">
        </div>
        <div class="flex flex-col gap-y-[20px]">
            <div class="flex flex-col gap-y-[16px]">
                <div class="flex flex-col gap-y-[24px]">
                    <div class="flex flex-col gap-y-[16px]">
                        <h2 class="text-white text-[36px] leading-[44px] font-bold">"{{$item->title}}"</h2>
                        <div class="text-white flex gap-x-[377px]">
                            <div class="flex gap-x-[12px] items-center">
                                <button class="bg-[#343444] rounded-[40px] w-[75px] h-[36px] flex gap-x-[6px] items-center justify-center">
                                    <img src="{{asset('img/views.svg')}}" alt="">
                                    <div class="text-[14px]">225</div>
                                </button>
                                @auth()
                                    @if($item->checkLike(auth()->user()))
                                        <form action="{{route('items.likes.destroy', $item)}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button class="bg-[#343444] rounded-[40px] w-[75px] h-[36px] flex gap-x-[6px] items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                                </svg>

                                                <div class="text-[14px]">{{$item->likes()->count()}}</div>
                                            </button>
                                        </form>
                                    @else
                                        <form action="{{route('items.likes.store', $item)}}" method="post">
                                            @csrf
                                            <button class="bg-[#343444] rounded-[40px] w-[75px] h-[36px] flex gap-x-[6px] items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                                </svg>
                                                <div class="text-[14px]">{{$item->likes()->count()}}</div>
                                            </button>
                                        </form>
                                    @endif
                                @endauth

                            </div>
                            <div class="flex gap-x-[12px]">
                                <button class="bg-[#343444] rounded-[40px] w-[36px] h-[36px] flex items-center justify-center">
                                    <img src="{{asset('img/send-Regular-white.svg')}}" alt="">
                                </button>
                                <button class="bg-[#343444] rounded-[40px] w-[36px] h-[36px] flex items-center justify-center">
                                    <img src="{{asset('img/3-dots.svg')}}" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="w-[295px] h-[68px] rounded-[16px] bg-[#343444] flex gap-x-[12px] items-center p-[12px]">
                        <img src="{{asset('profiles')."/".$user->img_user}}" class="bg-[#7A798A] rounded-[15px] w-[44px] h-[44px]"></img>
                        <div class="flex flex-col gap-y-[2px]">
                            <h3 class="text-[13px] leading-[20px] text-[#8A8AA0]">Created By</h3>
                            <h3 class="text-white font-bold text-[15px] leading-[22px]">{{$item->user->name}}</h3>
                        </div>
                    </div>
                </div>
                <p class="mt-[16px] text-white w-[620px]">
                    {{$item->description}}
                </p>
            </div>
            <div class="bg-[#343444] rounded-[8px] flex gap-x-[83px] w-[295px] h-[50px] items-center py-[12px] px-[24px]">
                <h3 class="text-white text-[15px] leading-[26px]">Price</h3>
                <div class="flex gap-x-[7px] items-center">
                    <h3 class="text-white font-bold text-[18px] leading-[26px]">{{$item->price}} ETH</h3>
                    <h4 class="text-[#EBEBEB] text-[13px] leading-[20px]">= ${{$item->price*1736.29}}</h4>
                </div>
            </div>
        </div>
    </div>
@endsection
