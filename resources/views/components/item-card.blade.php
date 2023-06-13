@if($items->count())

    <div class="grid grid-cols-4 gap-x-[30px] gap-y-[40px] w-[1410px] ms-[255px] mb-[60px]">
        @foreach($items as $item)
            <div class="bg-[#343444] rounded-[20px] h-[511px] w-[330px] p-[20px] flex flex-col gap-y-[21px]">
                <a href="{{route('items.show', ['item'=>$item, 'user'=>$user->name])}}">
                    <img src="{{asset('uploads')."/".$item->img_item}}" class="w-[290px] h-[290px] rounded-[20px] relative group block">
                    <button class="flex gap-x-[6px] w-[145px] h-[48px] rounded-[30px] bg-white items-center justify-center absolute top-[121px] right-[73px] hidden group-hover:flex group-hover:items-center group-hover:justify-center">
                        <img src="{{asset('img/Bag 2.svg')}}" alt="">
                        <span class="font-bold text-[15px] leading-[22px]">Buy</span>
                    </button>
                    </img>
                </a>
                <div>
                    <h2 class="text-white mb-[17px]">{{$item->title}}.</h2>
                    <div class="flex gap-x-[97px] items-center gap-y-[19px] mb-[19px]">
                        <div class="flex gap-x-[12px] items-center">
                            <img src="{{asset('profiles')."/".$user->img_user}}" class="bg-[#7A798A] h-[44px] w-[44px] rounded-[15px]"></img>
                            <div>
                                <h4 class="text-[#8A8AA0] font-normal text-[13px] leading-[20px]">Creator</h4>
                                <h3 class="text-white font-bold text-[15px] leading-[22px]">{{$item->user->name}}</h3>
                            </div>
                        </div>
                        <div class="bg-[#5142FC] rounded-[8px] w-[49px] h-[24px] font-bold text-[12px] leading-[20px text-white flex items-center justify-center">
                            <span>BSC</span>
                        </div>
                    </div>
                    <hr class="border-black mb-[15px]">
                    <div class="flex gap-x-[38px] items-center">
                        <div class=>
                            <h4 class="text-[#8A8AA0] font-normal text-[13px] leading-[20px]">Current Bid</h4>
                            <div class="flex gap-x-[7px] items-center">
                                <h2 class="text-white">{{$item->price}} ETH</h2>
                                <h4 class="text-[#8A8AA0] font-normal text-[13px] leading-[20px]">= $12.246</h4>
                            </div>
                        </div>
                        <button class="flex bg-transparent w-[120px] h-[28px] items-center justify-center gap-x-[8px] rounded-[8px]">
                            <img src="{{asset('img/reload.svg')}}" alt="">
                            <span class="text-[#8A8AA0] font-bold leading-[26px]">View History</span>
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif
