@php use App\Http\Controllers\ItemController; @endphp
@if($todayItem->count())
    <div class="grid grid-cols-4 gap-x-[30px] gap-y-[40px] w-[1410px] ms-[120px] 2xl:ms-[255px]">
        @foreach($todayItem->take(8) as $item)
            {{--            {{dd($item->user()->name)}}--}}
            <div class="bg-[#343444] rounded-[20px] w-[330px] p-[20px] flex flex-col gap-y-[21px]">
                <div class="relative">
                    <a href="{{route('items.show', ['item'=>$item, 'user'=>$item->user->name])}}">
                        <img src="{{asset('uploads')."/".$item->img_item}}" class="w-[290px] h-[290px] rounded-[20px] relative group block">
                    </a>
                </div>

                <div>
                    <h2 class="text-white mb-[17px]">{{$item->title}}.</h2>
                    <div class="flex justify-between items-center gap-y-[19px] mb-[19px]">
                        <div class="flex gap-x-[12px] items-center">
                            <img src="{{asset('profiles')."/".$item->user->img_user}}" class="bg-[#7A798A] h-[44px] w-[44px] rounded-[15px]"></img>
                            <div>
                                <h4 class="text-[#8A8AA0] font-normal text-[13px] leading-[20px]">Creator</h4>
                                <h3 class="text-white font-bold text-[15px] leading-[22px]"></h3>
                            </div>
                        </div>
                        <div class="bg-[#5142FC] rounded-[8px] w-[49px] h-[24px] font-bold text-[12px] leading-[20px text-white flex items-center justify-center">
                            <span>BSC</span>
                        </div>
                    </div>
                    <hr class="border-black mb-[15px]">
                    <div class="flex justify-between items-center">
                        <div class=>
                            <h4 class="text-[#8A8AA0] font-normal text-[13px] leading-[20px]">Current Bid</h4>
                            <div class="flex gap-x-[7px] items-center">
                                <h2 class="text-white">{{$item->price}} ETH</h2>
                                <h4 class="text-[#8A8AA0] font-normal text-[13px] leading-[20px]">= ${{$item->price*1736.29}}</h4>
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
@else
    <div class="flex items-center justify-center mt-[80px]">
        <h1 class="font-bold text-[36px] leading-[44px] text-gray-500">It looks like there are no picks for today, <br> stay tuned until someone creates a new NTF</h1>
    </div>
@endif

