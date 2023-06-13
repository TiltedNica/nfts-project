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
                                <button class="bg-[#343444] rounded-[40px] w-[75px] h-[36px] flex gap-x-[6px] items-center justify-center">
                                    <img src="{{asset('img/heart white.svg')}}" alt="">
                                    <div class="text-[14px]">100</div>
                                </button>
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
