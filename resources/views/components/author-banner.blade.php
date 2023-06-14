<div class="w-[1410px] h-[354px] relative rounded-[12px] overflow-hidden mt-[80px] ms-[255px] mb-[60px]">
    <div class="h-[280px] w-[1410px] bg-[#313037] pt-[60px] flex gap-x-[225px]">
        <div class="ms-[355px] text-white">
            <h3 class="text-[18px] leading-[28px]">Author Profile</h3>
            <h2 class="text-[36px] leading-[44px]">{{$user->name}}</h2>
            <p class="leading-[22px]">{{$user->desc_user}}</p>
        </div>
        <div>
            <ul class="flex gap-x-3">
                @auth()
                    @if($user->id !== auth()->user()->id)
                        @if(!$user->isFollowing(auth()->user()))
                            <form action="{{route('user.follow', $user)}}" method="POST">
                                @csrf
                                <li>
                                    <input type="submit" value="FOLLOW"  class="bg-white rounded-lg w-[80px] h-[40px] flex items-center justify-center font-bold cursor-pointer">

                                </li>
                            </form>
                        @else
                            <form action="{{route('user.unfollow', $user)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <li>
                                    <input type="submit" value="UNFOLLOW"  class="bg-red-500 rounded-lg w-[100px] h-[40px] flex items-center justify-center font-bold cursor-pointer">

                                </li>
                            </form>
                        @endif
                    @endif
                @endauth
                <div class="bg-white rounded-lg h-[full] flex flex-col items-center justify-center font-bold ">
                    <p>
                        {{$user->followers()->count()}} Followers
                    </p>
                    <hr>
                    <p>
                        {{$user->followings()->count()}} Following
                    </p>
                </div>
                <li>
                    <a class="bg-white rounded-lg w-[40px] h-[40px] flex items-center justify-center">
                        <img src="{{asset('img/faceebook-black.svg')}}" alt="">
                    </a>
                </li>
                <li>
                    <a class="bg-white rounded-lg w-[40px] h-[40px] flex items-center justify-center">
                        <img src="{{asset('img/twitter black.svg')}}" alt="">
                    </a>
                </li>
                <li>
                    <a class="bg-white rounded-lg w-[40px] h-[40px] flex items-center justify-center">
                        <img src="{{asset('img/google-black.svg')}}" alt="">
                    </a>
                </li>
                <li>
                    <a class="bg-white rounded-lg w-[40px] h-[40px] flex items-center justify-center">
                        <img src="{{asset('img/twitch-black.svg')}}" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="h-[74px] bg-[#343444] w-full">
        <nav class="flex gap-x-[135px] text-white text-[20px] leading-[26px] ms-[414px] pt-[24px]">
            <a href="">ALL</a>
            <a href="">ART</a>
            <a href="">MUSIC</a>
            <a href="">COLLECTIBLES</a>
            <a href="">SPORTS</a>
        </nav>
    </div>

    <img src="{{asset('profiles')."/".$user->img_user}}" alt="" class="bg-[#7A798A] rounded-[20px] absolute top-[40px] left-[40px] w-[274px] h-[274px]">
</div>
