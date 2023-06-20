@php use App\Http\Controllers\ItemController; @endphp
@if($items->count())

    <div class="grid grid-cols-4 gap-x-[30px] gap-y-[40px] w-[1410px] ms-[255px] mb-[174px]">
        @foreach($items as $item)
{{--            {{dd($item->user()->name)}}--}}
            <div class="bg-[#343444] rounded-[20px] w-[330px] p-[20px] flex flex-col gap-y-[21px]">
                <div class="relative">
                    <a href="{{route('items.show', ['item'=>$item, 'user'=>$user->name])}}">
                        <img src="{{asset('uploads')."/".$item->img_item}}" class="w-[290px] h-[290px] rounded-[20px] relative group block">
                    </a>
                    <button id="like_{{$item->id}}"
                            class="absolute top-[14px] right-[12px] flex bg-[#14141F] w-[64px] h-[28px] items-center justify-center gap-x-[5px] rounded-[8px]">
                        <svg id="heart" xmlns="http://www.w3.org/2000/svg" fill="red"
                             viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                        </svg>
                        <span id="item_show_{{$item->id}}" class="text-white">{{$item->likes_count}}</span>
                    </button>
                </div>

                <div>
                    <h2 class="text-white mb-[17px]">{{$item->title}}.</h2>
                    <div class="flex justify-between items-center gap-y-[19px] mb-[19px]">
                        <div class="flex gap-x-[12px] items-center">
                            <img src="{{asset('profiles')."/".$user->img_user}}" class="bg-[#7A798A] h-[44px] w-[44px] rounded-[15px]"></img>
                            <div>
                                <h4 class="text-[#8A8AA0] font-normal text-[13px] leading-[20px]">Creator</h4>
                                <h3 class="text-white font-bold text-[15px] leading-[22px]">{{$user->name}}</h3>
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

            <script>

                console.log(document.querySelector('#like_{{$item->id}}'));
                document.querySelector('#like_{{$item->id}}').addEventListener('click', function (e) {
                    console.log('hi')

                    e.preventDefault();
                    fetch("{{action([ItemController::class, 'like'], compact('item'))}}", {
                        method: 'post',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                        },
                        body: JSON.stringify({
                            _token: "{{csrf_token()}}"
                        })
                    }).then(response => response.json()).then(data => {
                        // if (button.style.fill === 'red') {
                        //     button.style.fill = 'none'
                        // } else {
                        //     button.style.fill = 'red'
                        // }
                        {{--document.querySelector('#show_{{$item->id}}').innerHTML = data.count;--}}

                    })

                })
            </script>
        @endforeach
    </div>
@endif
