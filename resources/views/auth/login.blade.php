@extends('layouts.auth')

@section('title')
    Login
@endsection

@section('header_action')
    <div class="flex justify-center">
        <div class="flex flex-col gap-y-[12px] mt-[59px] items-center">
            <h1 class="font-bold text-[48px] text-white">Login</h1>
            <div class="flex gap-x-[12px] text-[#8A8AA0]">
                <a>Home</a>
                <div>/</div>
                <a>Pages</a>
                <div>/</div>
                <a>Signup</a>
            </div>
        </div>
    </div>
@endsection

@section('main')
    <div class="flex flex-col gap-y-[40px] items-center mt-[80px] mb-[80px]">
        <h1 class="font-bold text-[36px] leading-[44px] text-center text-white">Login to NFTs</h1>
        <div class="flex flex-col gap-y-[40px]">
            <div class="flex gap-x-3 items-center justify-center">
                <div class="w-4/12 h-[1px] bg-[#343444]"></div>
                <h2 class="font-normal text-[18px] leading-[18px] text-center text-[#EBEBEB]">Login with social</h2>
                <div class="w-4/12 h-[1px] bg-[#343444]"></div>
            </div>
            <div class="flex gap-x-[30px]">
                <button class="border-[2px] border-[#5142FC] rounded-[56px] w-[330px] h-[54px] flex items-center justify-center gap-x-[8px]">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.54991 6.03331L0.824781 4.45996C0.298219 5.52406 3.125e-05 6.72412 0 8C0 9.25822 0.301406 10.4603 0.836062 11.5339L3.54972 9.96716C3.28206 9.36447 3.13041 8.69972 3.13044 8C3.13047 7.30031 3.28222 6.63578 3.54991 6.03331Z" fill="white"/>
                        <path d="M13.2476 1.9615C11.8417 0.738564 10.0045 -0.00134192 7.99441 1.82717e-06C5.24437 0.00184558 2.78981 1.40578 1.34766 3.557L4.075 5.13169C4.96191 3.92188 6.38875 3.13041 8.00003 3.13044C9.17462 3.13047 10.2513 3.55035 11.0923 4.2461C11.2982 4.41638 11.5992 4.40078 11.7881 4.21188L13.2734 2.72653C13.4876 2.51235 13.4761 2.16025 13.2476 1.9615Z" fill="white"/>
                        <path d="M15.945 7.07405C15.9139 6.80921 15.6912 6.60874 15.4246 6.60874L8.86941 6.6084C8.58128 6.6084 8.34766 6.84199 8.34766 7.13015V9.21537C8.34766 9.50349 8.58125 9.73712 8.86941 9.73712H12.5428C12.2044 10.6177 11.6167 11.3747 10.8686 11.925L12.4288 14.6275C13.9993 13.5632 15.1934 11.9541 15.7193 10.0546C16.0053 9.02184 16.0567 8.02315 15.945 7.07405Z" fill="white"/>
                        <path d="M9.96599 12.4498C9.36427 12.7178 8.70003 12.8699 7.99952 12.87C6.38643 12.87 4.9604 12.0785 4.07412 10.8691L1.3584 12.4371C2.78846 14.5671 5.21552 16.0004 7.99946 16.0004C9.25796 16.0004 10.4558 15.6927 11.5272 15.154L9.96599 12.4498Z" fill="white"/>
                    </svg>
                    <h3 class="text-white font-bold">Google</h3>
                </button>
                <button class="border-[2px] border-[#5142FC] rounded-[56px] w-[330px] h-[54px] flex items-center justify-center gap-x-[8px]">
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.00195312 10.0631C0.00311667 15.0128 3.58036 19.2272 8.43895 20.0029V12.9709H5.90195V10.0631H8.44195V7.84957C8.32841 6.80069 8.68447 5.75534 9.41359 4.99704C10.1427 4.23874 11.1693 3.84608 12.215 3.92556C12.9655 3.93775 13.7141 4.00501 14.455 4.12679V6.60093H13.191C12.7558 6.54358 12.3183 6.68818 12.0017 6.994C11.6851 7.29981 11.5237 7.73374 11.563 8.17355V10.0631H14.334L13.891 12.9719H11.563V20.0029C16.8174 19.1674 20.502 14.3391 19.9475 9.01578C19.3929 3.6925 14.7932 -0.262137 9.48078 0.0168194C4.16831 0.295776 0.0027976 4.71067 0.00195312 10.0631Z" fill="white"/>
                    </svg>
                    <h3 class="text-white font-bold">Facebook</h3>
                </button>
            </div>
        </div>
        <div class="flex flex-col gap-y-[43px]">
            <div class="flex gap-x-3 items-center justify-center">
                <div class="w-4/12 h-[1px] bg-[#343444]"></div>
                <h3 class="text-white">Or login with email</h3>
                <div class="w-4/12 h-[1px] bg-[#343444]"></div>
            </div>
            <form class="flex flex-col gap-y-[24px]" action="{{route('login')}}" method="post" novalidate>
                @csrf

                @if(session('message'))
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{session('message')}}</p>
                @endif
                <div class="flex flex-col gap-y-[24px]">
                    <input class="rounded-[8px] bg-transparent placeholder-[#8A8AA0] border border-[#343444] flex justify-center text-left w-[690px] ps-[20px] py-[13px] text-white" type="email" placeholder="Your Email Address" name="email">
                    @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                    <input class="rounded-[8px] bg-transparent placeholder-[#8A8AA0] border border-[#343444] flex justify-center text-left w-[690px] ps-[20px] py-[13px] text-white" type="password" placeholder="Your Password" name="password">
                    @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <div class="flex flex-col gap-y-[32px]">
                    <div class="flex justify-between">
                        <div class="flex gap-x-2">
                            <input id="check" type="checkbox" name="remember">
                            <label class="text-white" for="check">Remember me</label>
                        </div>
                        <a class="text-white" href="">Forgot Password?</a>
                    </div>
                    <button class="border-[2px] border-white rounded-[56px] w-[690px] h-[54px] flex items-center justify-center gap-x-[8px] text-white">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection
