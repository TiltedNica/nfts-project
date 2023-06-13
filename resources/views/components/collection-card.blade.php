
<div class="w-[450px] h-[394px] bg-[#343444] rounded-[10px] p-[20px] flex flex-col gap-y-[10px]">
    <div class="grid grid-cols-3 h-[272px] gap-[10px]">
        @foreach($collection->items as $item)
            <div class="">
                <img src="{{asset('uploads')."/".$item->img_item}}" class="bg-[#7A798A] w-[200px] h-[131px] rounded-[10px]"></img>
            </div>
        @endforeach
    </div>
{{--    <div class="flex gap-x-[10px]">--}}
{{--        <div class="bg-[#7A798A] w-[157px] h-[141px] rounded-[10px]"></div>--}}
{{--        <div class="bg-[#7A798A] w-[157px] h-[141px] rounded-[10px]"></div>--}}
{{--        <div class="bg-[#7A798A] w-[157px] h-[141px] rounded-[10px]"></div>--}}
{{--    </div>--}}
    <div class="flex gap-x-[67px]">
        <div class="flex gap-x-[10px] items-center">
            <img src="{{asset('profiles')."/".$collection->img_collection}}" class="bg-[#7A798A] w-[64px] h-[64px] rounded-[21px]"></img>
            <div class="flex flex-col gap-y-[2px]">
                <div class="font-bold text-white leading-[26px]">{{$collection->collection_name}}</div>
                <div class="flex gap-x-[6px]">
                    <div class="text-[#8A8AA0] leading-[20px]">Created by</div>
                    <div class="text-[15px] text-white leading-[22px]">{{$collection->user->name}}</div>
                </div>
            </div>
        </div>
        <button class="bg-[#14141F] w-[64px] h-[28px] flex items-center text-white justify-center rounded-[10px] gap-x-[5px]">
            <img src="{{asset('img/heart white.svg')}}" alt="">
            <div>100</div>
        </button>
    </div>
</div>
