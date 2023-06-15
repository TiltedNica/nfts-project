
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
        @auth()
            @if($collection->checkLike(auth()->user()->id))
                <form action="{{route('collection.likes.destroy', $collection)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="bg-[#343444] rounded-[40px] w-[75px] h-[36px] flex gap-x-[6px] items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>
                        <div class="text-[14px]">{{$collection->likes()->count()}}</div>
                    </button>
                </form>
            @else
                <form action="{{route('collection.likes.store', $collection)}}" method="post">
                    @csrf
                    <button class="bg-[#343444] rounded-[40px] w-[75px] h-[36px] flex gap-x-[6px] items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>
                        <div class="text-[14px]">{{$collection->likes_count}}</div>
                    </button>
                </form>
            @endif
        @endauth
        @guest()
            <button class="bg-[#343444] rounded-[40px] w-[75px] h-[36px] flex gap-x-[6px] items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>
                <div class="text-[14px]">{{$collection->likes_count}}</div>
            </button>
        @endguest
    </div>
</div>
