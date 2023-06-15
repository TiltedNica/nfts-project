<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/js/bootstrap.js')
</head>
<body class="bg-[#14141F] h-screen">
<header class="pb-[59px] bg-red-[#14141F] relative h-[753px]">
    <img class="absolute z-0" src="{{asset('img/Graphic 2.svg')}}" alt="">
    <div class="h-[80px] border-b-2 border-b-gray-400  border-opacity-40 flex justify-between items-center">
        <div class="ms-[255px]">
            <svg width="133" height="56" viewBox="0 0 133 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M50.584 15.8H55.642L64.804 41H60.142L58.522 36.536H47.722L46.102 41H41.44L50.584 15.8ZM49.324 32.144H56.902L53.104 21.758L49.324 32.144ZM66.4009 41L72.9889 31.964L66.4549 22.982H71.8729L75.6889 28.22L79.5229 22.982H84.9409L78.4069 31.964L84.9949 41H79.5769L75.6889 35.672L71.8189 41H66.4009ZM87.7577 23H92.1497V41H87.7577V23ZM89.9717 20.318C89.3357 20.318 88.7957 20.108 88.3517 19.688C87.9077 19.256 87.6857 18.716 87.6857 18.068C87.6857 17.432 87.9077 16.898 88.3517 16.466C88.7957 16.034 89.3357 15.818 89.9717 15.818C90.6077 15.818 91.1417 16.034 91.5737 16.466C92.0177 16.898 92.2397 17.432 92.2397 18.068C92.2397 18.716 92.0177 19.256 91.5737 19.688C91.1417 20.108 90.6077 20.318 89.9717 20.318ZM106.084 41.468C104.428 41.468 102.916 41.042 101.548 40.19C100.192 39.338 99.1059 38.192 98.2899 36.752C97.4859 35.312 97.0839 33.722 97.0839 31.982C97.0839 30.674 97.3179 29.45 97.7859 28.31C98.2539 27.158 98.8959 26.15 99.7119 25.286C100.54 24.41 101.5 23.726 102.592 23.234C103.684 22.742 104.848 22.496 106.084 22.496C107.488 22.496 108.772 22.796 109.936 23.396C111.112 23.984 112.108 24.794 112.924 25.826C113.74 26.858 114.334 28.034 114.706 29.354C115.078 30.674 115.162 32.054 114.958 33.494H101.8C101.968 34.166 102.244 34.772 102.628 35.312C103.012 35.84 103.498 36.266 104.086 36.59C104.674 36.902 105.34 37.064 106.084 37.076C106.852 37.088 107.548 36.908 108.172 36.536C108.808 36.152 109.336 35.636 109.756 34.988L114.238 36.032C113.506 37.628 112.414 38.936 110.962 39.956C109.51 40.964 107.884 41.468 106.084 41.468ZM101.656 30.2H110.512C110.38 29.48 110.098 28.832 109.666 28.256C109.246 27.668 108.724 27.2 108.1 26.852C107.476 26.504 106.804 26.33 106.084 26.33C105.364 26.33 104.698 26.504 104.086 26.852C103.474 27.188 102.952 27.65 102.52 28.238C102.1 28.814 101.812 29.468 101.656 30.2ZM123.798 41.324C122.862 41.264 121.956 41.078 121.08 40.766C120.216 40.442 119.448 40.004 118.776 39.452C118.104 38.9 117.588 38.24 117.228 37.472L120.936 35.888C121.08 36.128 121.314 36.386 121.638 36.662C121.962 36.926 122.346 37.148 122.79 37.328C123.246 37.508 123.744 37.598 124.284 37.598C124.74 37.598 125.172 37.538 125.58 37.418C126 37.286 126.336 37.088 126.588 36.824C126.852 36.56 126.984 36.218 126.984 35.798C126.984 35.354 126.828 35.012 126.516 34.772C126.216 34.52 125.832 34.334 125.364 34.214C124.908 34.082 124.464 33.962 124.032 33.854C122.892 33.626 121.83 33.272 120.846 32.792C119.874 32.312 119.088 31.694 118.488 30.938C117.9 30.17 117.606 29.246 117.606 28.166C117.606 26.978 117.918 25.952 118.542 25.088C119.166 24.224 119.988 23.558 121.008 23.09C122.028 22.622 123.126 22.388 124.302 22.388C125.73 22.388 127.038 22.688 128.226 23.288C129.426 23.876 130.374 24.71 131.07 25.79L127.596 27.842C127.428 27.554 127.194 27.29 126.894 27.05C126.594 26.798 126.252 26.594 125.868 26.438C125.484 26.27 125.082 26.174 124.662 26.15C124.122 26.126 123.63 26.174 123.186 26.294C122.742 26.414 122.382 26.618 122.106 26.906C121.842 27.194 121.71 27.578 121.71 28.058C121.71 28.514 121.89 28.856 122.25 29.084C122.61 29.3 123.042 29.468 123.546 29.588C124.062 29.708 124.554 29.84 125.022 29.984C126.078 30.332 127.068 30.758 127.992 31.262C128.928 31.766 129.678 32.384 130.242 33.116C130.806 33.848 131.076 34.724 131.052 35.744C131.052 36.908 130.704 37.928 130.008 38.804C129.312 39.668 128.412 40.328 127.308 40.784C126.216 41.24 125.046 41.42 123.798 41.324Z"
                    fill="white"/>
                <path
                    d="M18.75 4C10.2255 9.0344 11.25 23.2187 11.25 23.2187C11.25 23.2187 7.5 21.9375 7.5 16.1719C3.02601 18.831 0 23.9421 0 29.625C0 38.1164 6.71572 45 15 45C23.2843 45 30 38.1164 30 29.625C29.9999 17.1328 18.75 14.5703 18.75 4V4ZM16.3176 39.7023C13.3034 40.4725 10.2505 38.5924 9.49887 35.5027C8.74736 32.4131 10.5816 29.2838 13.596 28.5135C20.8732 26.6538 21.7852 22.4592 21.7852 22.4592C21.7852 22.4592 25.4141 37.3775 16.3176 39.7023Z"
                    fill="url(#paint0_linear_504_1801)"/>
                <defs>
                    <linearGradient id="paint0_linear_504_1801" x1="26.25" y1="4" x2="-5.52352" y2="35.3469"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="#E250E5"/>
                        <stop offset="1" stop-color="#4B50E6"/>
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <nav class="">
            <ul class="flex list-none gap-x-10 text-white font-bold">
                <li>
                    <a href="">Home</a>
                </li>
                <li>
                    <a href="">Explore</a>
                </li>
                <li>
                    <a href="">Activity</a>
                </li>
                <li>
                    <a href="">Community</a>
                </li>
                <li>
                    <a href="#">Pages</a>
                </li>
                <li>
                    <a href="">Contact</a>
                </li>
            </ul>
        </nav>
        <div class="flex gap-x-[36px] items-center z-0">
            <a href="">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="mask0_504_1781" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="1" y="1"
                          width="18"
                          height="17">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.66699 1.6665H17.6862V17.332H1.66699V1.6665Z"
                              fill="white" stroke="white"/>
                    </mask>
                    <g mask="url(#mask0_504_1781)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M9.67711 2.87297C5.9406 2.87297 2.90072 5.84489 2.90072 9.49887C2.90072 13.1529 5.9406 16.1256 9.67711 16.1256C13.4128 16.1256 16.4527 13.1529 16.4527 9.49887C16.4527 5.84489 13.4128 2.87297 9.67711 2.87297ZM9.67709 17.332C5.26039 17.332 1.66699 13.818 1.66699 9.49887C1.66699 5.17973 5.26039 1.6665 9.67709 1.6665C14.0938 1.6665 17.6864 5.17973 17.6864 9.49887C17.6864 13.818 14.0938 17.332 9.67709 17.332Z"
                              fill="white"/>
                        <path
                            d="M9.67711 2.37297C5.67512 2.37297 2.40072 5.5582 2.40072 9.49887H3.40072C3.40072 6.13158 6.20607 3.37297 9.67711 3.37297V2.37297ZM2.40072 9.49887C2.40072 13.4395 5.67504 16.6256 9.67711 16.6256V15.6256C6.20615 15.6256 3.40072 12.8662 3.40072 9.49887H2.40072ZM9.67711 16.6256C13.6784 16.6256 16.9527 13.4394 16.9527 9.49887H15.9527C15.9527 12.8663 13.1472 15.6256 9.67711 15.6256V16.6256ZM16.9527 9.49887C16.9527 5.55824 13.6783 2.37297 9.67711 2.37297V3.37297C13.1473 3.37297 15.9527 6.13155 15.9527 9.49887H16.9527ZM9.67709 16.832C5.52595 16.832 2.16699 13.5314 2.16699 9.49887H1.16699C1.16699 14.1046 4.99484 17.832 9.67709 17.832V16.832ZM2.16699 9.49887C2.16699 5.46641 5.52588 2.1665 9.67709 2.1665V1.1665C4.9949 1.1665 1.16699 4.89305 1.16699 9.49887H2.16699ZM9.67709 2.1665C13.8282 2.1665 17.1864 5.46634 17.1864 9.49887H18.1864C18.1864 4.89312 14.3593 1.1665 9.67709 1.1665V2.1665ZM17.1864 9.49887C17.1864 13.5315 13.8282 16.832 9.67709 16.832V17.832C14.3594 17.832 18.1864 14.1046 18.1864 9.49887H17.1864Z"
                            fill="white"/>
                    </g>
                    <mask id="mask1_504_1781" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="13" y="13"
                          width="6"
                          height="6">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M14.2012 14.2998H18.3333V18.3332H14.2012V14.2998Z"
                              fill="white" stroke="white"/>
                    </mask>
                    <g mask="url(#mask1_504_1781)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M17.7166 18.3332C17.5596 18.3332 17.4016 18.2745 17.2807 18.1571L14.3823 15.3307C14.1413 15.0951 14.1405 14.713 14.3815 14.4774C14.6217 14.2401 15.0123 14.2417 15.2541 14.4757L18.1526 17.3029C18.3935 17.5386 18.3944 17.9198 18.1534 18.1555C18.0333 18.2745 17.8746 18.3332 17.7166 18.3332Z"
                              fill="white"/>
                        <path
                            d="M17.7166 18.3332C17.5595 18.3332 17.4016 18.2745 17.2807 18.1571L14.3823 15.3307C14.1413 15.0951 14.1405 14.713 14.3815 14.4774C14.6217 14.2401 15.0123 14.2417 15.2541 14.4757L18.1526 17.3029C18.3935 17.5386 18.3944 17.9198 18.1534 18.1555C18.0333 18.2745 17.8746 18.3332 17.7166 18.3332"
                            stroke="white"/>
                    </g>
                </svg>
            </a>
            @auth
                <div class="flex gap-x-4">
                    <button
                        class="flex items-center gap-x-[8px] rounded-[34px] border border-[#5142FC] px-[33px] py-[14px]">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M13.8077 4.98483H17.3337C17.3337 2.15383 15.6374 0.5 12.7633 0.5H5.23736C2.36329 0.5 0.666992 2.15383 0.666992 4.94872V11.0513C0.666992 13.8462 2.36329 15.5 5.23736 15.5H12.7633C15.6374 15.5 17.3337 13.8462 17.3337 11.0513V10.7913H13.8077C12.1713 10.7913 10.8448 9.49793 10.8448 7.9025C10.8448 6.30707 12.1713 5.01372 13.8077 5.01372V4.98483ZM13.8077 6.22701H16.7114C17.0551 6.22701 17.3337 6.49861 17.3337 6.83365V8.94247C17.3297 9.27588 17.0534 9.54521 16.7114 9.54911H13.8744C13.046 9.55998 12.3216 9.00698 12.1337 8.22027C12.0396 7.73191 12.1717 7.22797 12.4946 6.84351C12.8174 6.45906 13.2981 6.2334 13.8077 6.22701ZM13.9337 8.44415H14.2077C14.5596 8.44415 14.8448 8.16608 14.8448 7.82306C14.8448 7.48004 14.5596 7.20197 14.2077 7.20197H13.9337C13.7654 7.20004 13.6033 7.26387 13.4837 7.3792C13.364 7.49453 13.2966 7.65177 13.2966 7.81584C13.2966 8.16005 13.5806 8.44019 13.9337 8.44415ZM4.61513 4.98483H9.31884C9.67066 4.98483 9.95587 4.70676 9.95587 4.36375C9.95587 4.02073 9.67066 3.74266 9.31884 3.74266H4.61513C4.26618 3.74263 3.98215 4.01633 3.9781 4.35652C3.97807 4.70073 4.26211 4.98088 4.61513 4.98483Z"
                                  fill="white"/>
                        </svg>
                        <div class="text-[15px] leading-[22px] text-white font-bold">Wallet Connect</div>
                    </button>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button
                            class=" me-[268px] flex items-center gap-x-[8px] rounded-[34px] border border-[#5142FC] px-[33px] py-[14px] text-[15px] leading-[22px] text-white font-bold" type="submit">
                            Logout
                        </button>
                    </form>
                </div>
            @endauth
            @guest()
                <div class="flex gap-x-4">
                    <button
                        class="flex items-center gap-x-[8px] rounded-[34px] border border-[#5142FC] px-[33px] py-[14px]">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M13.8077 4.98483H17.3337C17.3337 2.15383 15.6374 0.5 12.7633 0.5H5.23736C2.36329 0.5 0.666992 2.15383 0.666992 4.94872V11.0513C0.666992 13.8462 2.36329 15.5 5.23736 15.5H12.7633C15.6374 15.5 17.3337 13.8462 17.3337 11.0513V10.7913H13.8077C12.1713 10.7913 10.8448 9.49793 10.8448 7.9025C10.8448 6.30707 12.1713 5.01372 13.8077 5.01372V4.98483ZM13.8077 6.22701H16.7114C17.0551 6.22701 17.3337 6.49861 17.3337 6.83365V8.94247C17.3297 9.27588 17.0534 9.54521 16.7114 9.54911H13.8744C13.046 9.55998 12.3216 9.00698 12.1337 8.22027C12.0396 7.73191 12.1717 7.22797 12.4946 6.84351C12.8174 6.45906 13.2981 6.2334 13.8077 6.22701ZM13.9337 8.44415H14.2077C14.5596 8.44415 14.8448 8.16608 14.8448 7.82306C14.8448 7.48004 14.5596 7.20197 14.2077 7.20197H13.9337C13.7654 7.20004 13.6033 7.26387 13.4837 7.3792C13.364 7.49453 13.2966 7.65177 13.2966 7.81584C13.2966 8.16005 13.5806 8.44019 13.9337 8.44415ZM4.61513 4.98483H9.31884C9.67066 4.98483 9.95587 4.70676 9.95587 4.36375C9.95587 4.02073 9.67066 3.74266 9.31884 3.74266H4.61513C4.26618 3.74263 3.98215 4.01633 3.9781 4.35652C3.97807 4.70073 4.26211 4.98088 4.61513 4.98483Z"
                                  fill="white"/>
                        </svg>
                        <div class="text-[15px] leading-[22px] text-white font-bold">Wallet Connect</div>
                    </button>
                    <form action="{{route('login')}}" method="get">
                        @csrf
                        <button
                            class=" me-[268px] flex items-center gap-x-[8px] rounded-[34px] border border-[#5142FC] px-[33px] py-[14px] text-[15px] leading-[22px] text-white font-bold" type="submit">
                            Login
                        </button>
                    </form>
                </div>
            @endguest
        </div>
    </div>
    @yield('header_action')
</header>
<section class=>
    @yield('main')
</section>
<section class="bg-[#0D0D11]">
    @yield('auctions')
</section>
<section>
    @yield('collections')
</section>
<footer class="bg-[#0D0D11] flex h-[362px] gap-x-[147px] items-center justify-center">
    <div class="flex items-start justify-center gap-x-[145px]">
        <div class="flex gap-x-[147px] items-center">
            <div class="flex flex-col gap-y-[28px]">
                <div class="flex flex-col gap-y-[12px]">
                    <div class="absolute -z-50">
                        <svg width="133" height="56" viewBox="0 0 133 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M50.584 15.8H55.642L64.804 41H60.142L58.522 36.536H47.722L46.102 41H41.44L50.584 15.8ZM49.324 32.144H56.902L53.104 21.758L49.324 32.144ZM66.4009 41L72.9889 31.964L66.4549 22.982H71.8729L75.6889 28.22L79.5229 22.982H84.9409L78.4069 31.964L84.9949 41H79.5769L75.6889 35.672L71.8189 41H66.4009ZM87.7577 23H92.1497V41H87.7577V23ZM89.9717 20.318C89.3357 20.318 88.7957 20.108 88.3517 19.688C87.9077 19.256 87.6857 18.716 87.6857 18.068C87.6857 17.432 87.9077 16.898 88.3517 16.466C88.7957 16.034 89.3357 15.818 89.9717 15.818C90.6077 15.818 91.1417 16.034 91.5737 16.466C92.0177 16.898 92.2397 17.432 92.2397 18.068C92.2397 18.716 92.0177 19.256 91.5737 19.688C91.1417 20.108 90.6077 20.318 89.9717 20.318ZM106.084 41.468C104.428 41.468 102.916 41.042 101.548 40.19C100.192 39.338 99.1059 38.192 98.2899 36.752C97.4859 35.312 97.0839 33.722 97.0839 31.982C97.0839 30.674 97.3179 29.45 97.7859 28.31C98.2539 27.158 98.8959 26.15 99.7119 25.286C100.54 24.41 101.5 23.726 102.592 23.234C103.684 22.742 104.848 22.496 106.084 22.496C107.488 22.496 108.772 22.796 109.936 23.396C111.112 23.984 112.108 24.794 112.924 25.826C113.74 26.858 114.334 28.034 114.706 29.354C115.078 30.674 115.162 32.054 114.958 33.494H101.8C101.968 34.166 102.244 34.772 102.628 35.312C103.012 35.84 103.498 36.266 104.086 36.59C104.674 36.902 105.34 37.064 106.084 37.076C106.852 37.088 107.548 36.908 108.172 36.536C108.808 36.152 109.336 35.636 109.756 34.988L114.238 36.032C113.506 37.628 112.414 38.936 110.962 39.956C109.51 40.964 107.884 41.468 106.084 41.468ZM101.656 30.2H110.512C110.38 29.48 110.098 28.832 109.666 28.256C109.246 27.668 108.724 27.2 108.1 26.852C107.476 26.504 106.804 26.33 106.084 26.33C105.364 26.33 104.698 26.504 104.086 26.852C103.474 27.188 102.952 27.65 102.52 28.238C102.1 28.814 101.812 29.468 101.656 30.2ZM123.798 41.324C122.862 41.264 121.956 41.078 121.08 40.766C120.216 40.442 119.448 40.004 118.776 39.452C118.104 38.9 117.588 38.24 117.228 37.472L120.936 35.888C121.08 36.128 121.314 36.386 121.638 36.662C121.962 36.926 122.346 37.148 122.79 37.328C123.246 37.508 123.744 37.598 124.284 37.598C124.74 37.598 125.172 37.538 125.58 37.418C126 37.286 126.336 37.088 126.588 36.824C126.852 36.56 126.984 36.218 126.984 35.798C126.984 35.354 126.828 35.012 126.516 34.772C126.216 34.52 125.832 34.334 125.364 34.214C124.908 34.082 124.464 33.962 124.032 33.854C122.892 33.626 121.83 33.272 120.846 32.792C119.874 32.312 119.088 31.694 118.488 30.938C117.9 30.17 117.606 29.246 117.606 28.166C117.606 26.978 117.918 25.952 118.542 25.088C119.166 24.224 119.988 23.558 121.008 23.09C122.028 22.622 123.126 22.388 124.302 22.388C125.73 22.388 127.038 22.688 128.226 23.288C129.426 23.876 130.374 24.71 131.07 25.79L127.596 27.842C127.428 27.554 127.194 27.29 126.894 27.05C126.594 26.798 126.252 26.594 125.868 26.438C125.484 26.27 125.082 26.174 124.662 26.15C124.122 26.126 123.63 26.174 123.186 26.294C122.742 26.414 122.382 26.618 122.106 26.906C121.842 27.194 121.71 27.578 121.71 28.058C121.71 28.514 121.89 28.856 122.25 29.084C122.61 29.3 123.042 29.468 123.546 29.588C124.062 29.708 124.554 29.84 125.022 29.984C126.078 30.332 127.068 30.758 127.992 31.262C128.928 31.766 129.678 32.384 130.242 33.116C130.806 33.848 131.076 34.724 131.052 35.744C131.052 36.908 130.704 37.928 130.008 38.804C129.312 39.668 128.412 40.328 127.308 40.784C126.216 41.24 125.046 41.42 123.798 41.324Z"
                                fill="white"/>
                            <path
                                d="M18.75 4C10.2255 9.0344 11.25 23.2187 11.25 23.2187C11.25 23.2187 7.5 21.9375 7.5 16.1719C3.02601 18.831 0 23.9421 0 29.625C0 38.1164 6.71572 45 15 45C23.2843 45 30 38.1164 30 29.625C29.9999 17.1328 18.75 14.5703 18.75 4V4ZM16.3176 39.7023C13.3034 40.4725 10.2505 38.5924 9.49887 35.5027C8.74736 32.4131 10.5816 29.2838 13.596 28.5135C20.8732 26.6538 21.7852 22.4592 21.7852 22.4592C21.7852 22.4592 25.4141 37.3775 16.3176 39.7023Z"
                                fill="url(#paint0_linear_504_1801)"/>
                            <defs>
                                <linearGradient id="paint0_linear_504_1801" x1="26.25" y1="4" x2="-5.52352" y2="35.3469"
                                                gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#E250E5"/>
                                    <stop offset="1" stop-color="#4B50E6"/>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <p class="text-white font-normal leading-[22px]">
                        Lorem ipsum dolor sit amet,consectetur <br>
                        adipisicing elit. Quis non, fugit totam vel <br>
                        laboriosam vitae.
                    </p>
                </div>
                <div>
                    <ul class="flex gap-x-3">
                        <li>
                            <a class="bg-[#343444] rounded-lg w-[40px] h-[40px] flex items-center justify-center">
                                <svg width="20" height="20" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.00195312 10.0631C0.00311667 15.0128 3.58036 19.2272 8.43895 20.0029V12.9709H5.90195V10.0631H8.44195V7.84957C8.32841 6.80069 8.68447 5.75534 9.41359 4.99704C10.1427 4.23874 11.1693 3.84608 12.215 3.92556C12.9655 3.93775 13.7141 4.00501 14.455 4.12679V6.60093H13.191C12.7558 6.54358 12.3183 6.68818 12.0017 6.994C11.6851 7.29981 11.5237 7.73374 11.563 8.17355V10.0631H14.334L13.891 12.9719H11.563V20.0029C16.8174 19.1674 20.502 14.3391 19.9475 9.01578C19.3929 3.6925 14.7932 -0.262137 9.48078 0.0168194C4.16831 0.295776 0.0027976 4.71067 0.00195312 10.0631Z" fill="white"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="bg-[#343444] rounded-lg w-[40px] h-[40px] flex items-center justify-center">
                                <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.6441 3.18054C18.5012 2.64436 19.1425 1.80009 19.4483 0.805353C18.6429 1.30541 17.7618 1.65766 16.8429 1.84687C15.569 0.436695 13.5505 0.093522 11.9155 1.00911C10.2804 1.9247 9.4335 3.87238 9.84798 5.76384C6.54901 5.59052 3.47544 3.95985 1.3921 1.27759C0.304847 3.23999 0.860458 5.74861 2.66182 7.01046C2.01043 6.98855 1.37348 6.804 0.804092 6.47219C0.804092 6.4902 0.804092 6.50821 0.804092 6.52622C0.804469 8.5704 2.18125 10.3312 4.09599 10.7363C3.49179 10.9083 2.85802 10.9337 2.24304 10.8104C2.78153 12.5585 4.32121 13.7561 6.07611 13.7919C4.62265 14.9856 2.82769 15.6329 0.980017 15.6298C0.65252 15.6303 0.32528 15.6106 0 15.5707C1.87627 16.8324 4.06002 17.5021 6.29028 17.4997C9.39311 17.522 12.375 16.242 14.569 13.946C16.763 11.6499 17.986 8.52947 17.9644 5.2826C17.9644 5.0965 17.9603 4.91141 17.952 4.72732C18.7556 4.11961 19.4491 3.36679 20 2.5042C19.2514 2.85144 18.4573 3.07941 17.6441 3.18054Z" fill="white"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="bg-[#343444] rounded-lg w-[40px] h-[40px] flex items-center justify-center">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.20933 7.35809V10.8365H14.1483C13.6887 13.0469 11.7644 14.317 9.20933 14.317C6.2333 14.2769 3.84224 11.9062 3.84224 8.9955C3.84224 6.08482 6.2333 3.7141 9.20933 3.67404C10.4464 3.67259 11.6453 4.09241 12.6003 4.8614L15.28 2.24074C12.2061 -0.402031 7.71692 -0.741943 4.26368 1.40661C0.810443 3.55516 -0.776892 7.6758 0.368424 11.5185C1.51374 15.3612 5.11645 18.0024 9.20933 18C13.8134 18 18 14.7252 18 8.995C17.9929 8.44328 17.9238 7.89401 17.7939 7.35708L9.20933 7.35809Z" fill="white"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="bg-[#343444] rounded-lg w-[40px] h-[40px] flex items-center justify-center">
                                <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18 0.5V12.3756L13.304 17.1249H9.391L6.954 19.5H3.913V17.1249H0V3.66616L1.227 0.5H18ZM16.435 2.08308H3.13V13.9587H6.26V16.3328L8.609 13.9577H13.304L16.434 10.7915V2.08308H16.435ZM13.305 5.24924V9.99949H11.739V5.25025H13.304L13.305 5.24924ZM9.391 5.24924V9.99949H7.826V5.25025H9.391V5.24924Z" fill="white"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex gap-x-[140px]">
                <div class="flex flex-col gap-y-[24px]">
                    <h3 class="text-white font-bold text-lg leading-[26px]">My account</h3>
                    <ul class="flex flex-col text-white gap-y-[16px] justify-center">
                        <li>
                            <a href="">Authors</a>
                        </li>
                        <li>
                            <a href="">Collection</a>
                        </li>
                        <li>
                            <a href="">Author Profile</a>
                        </li>
                        <li>
                            <a href="">Create Collection</a>
                        </li>
                    </ul>
                </div>
                <div class="flex flex-col gap-y-[24px]">
                    <h3 class="text-white font-bold text-lg leading-[26px]">Resources</h3>
                    <ul class="flex flex-col text-white gap-y-[16px] justify-center">
                        <li>
                            <a href="">Help & Support</a>
                        </li>
                        <li>
                            <a href="">Live Auctions</a>
                        </li>
                        <li>
                            <a href="">Item Details</a>
                        </li>
                        <li>
                            <a href="">Activity</a>
                        </li>
                    </ul>
                </div>
                <div class="flex flex-col gap-y-[24px]">
                    <h3 class="text-white font-bold text-lg leading-[26px] ">Company</h3>
                    <ul class="flex flex-col text-white  gap-y-[16px] justify-center">
                        <li>
                            <a  href="">About us</a>
                        </li>
                        <li>
                            <a href="">Contact Us</a>
                        </li>
                        <li>
                            <a href="">Our blog</a>
                        </li>
                        <li>
                            <a href="">Discover</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-y-[24px]">
            <h3 class="text-white font-bold text-lg leading-[26px] font-normal">Subscribe Us</h3>
            <form class="flex" action="">
                @csrf
                <input class="rounded-tl-[10px] rounded-bl-[10px] bg-transparent placeholder-[#8A8AA0] border-l border-t border-b border-[#343444] flex justify-center text-center" type="text" placeholder="info@yourgmail.com">
                <button class="bg-[#5142FC] rounded-tr-[10px] rounded-br-[10px] w-[60px] h-[56px] flex justify-center items-center">
                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.915334 0.188759C1.23957 -0.0449367 1.67182 -0.0631242 2.01454 0.142509L17.0145 9.14251C17.3157 9.32323 17.5 9.64874 17.5 10C17.5 10.3513 17.3157 10.6768 17.0145 10.8575L2.01454 19.8575C1.67182 20.0631 1.23957 20.0449 0.915334 19.8112C0.591098 19.5775 0.437155 19.1732 0.523857 18.7831L2.25343 11L7.5 11C8.05228 11 8.5 10.5523 8.5 10C8.5 9.44772 8.05228 9 7.5 9L2.25343 9L0.523857 1.21693C0.437155 0.826771 0.591098 0.422456 0.915334 0.188759Z" fill="white"/>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</footer>
</body>
</html>
