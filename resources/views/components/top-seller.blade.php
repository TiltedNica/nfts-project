<div class="grid-cols-5 grid ms-[255px] mt-[38px] mb-[80px] w-[1410px]">
    @foreach($user as $info)
        <div class="flex items-center text-white gap-x-[15px] w-[212px]">
            <a href="{{route('items.index', ['user'=>$info->name])}}" class="relative">
                <img class="w-[100px] h-[100px] rounded-[34px]" src="{{asset('profiles')."/".$info->img_user}}" alt="">
                <img src="{{asset('img/Check.svg')}}" alt="" class="absolute left-[74px] top-[74px]">
            </a>
            <div>
                <h3>{{$info->name}}</h3>
                @php
                    $sum = 0
                @endphp
                @foreach($info->items as $t)
                    @php
                        $sum += $t->price
                    @endphp
                @endforeach
                <p>{{$sum}} ETH</p>
            </div>
        </div>
    @endforeach
</div>
