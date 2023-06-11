<div class="bg-[#343444] rounded-[20px] h-[511px] w-[330px] p-[20px] flex flex-col gap-y-[21px]">

    <img src="https://openseauserdata.com/files/3d825b936774e0ae3c8247613c91d436.png" class="image-preview bg-[#7A798A] w-[290px] h-[290px] rounded-[20px] relative group block">
        <button class="flex gap-x-[6px] w-[145px] h-[48px] rounded-[30px] bg-white items-center justify-center absolute top-[121px] right-[73px] hidden group-hover:flex group-hover:items-center group-hover:justify-center">
            <img src="{{asset('img/Bag 2.svg')}}" alt="">
            <span class="font-bold text-[15px] leading-[22px]">Buy</span>
        </button>
    </img>
    <div>
        <h2 class="print-title text-white mb-[17px]"></h2>
        <div class="flex gap-x-[97px] items-center gap-y-[19px] mb-[19px]">
            <div class="flex gap-x-[12px] items-center">
                <div class="bg-[#7A798A] h-[44px] w-[44px] rounded-[15px]"></div>
                <div>
                    <h4 class="text-[#8A8AA0] font-normal text-[13px] leading-[20px]">Creator</h4>
                    <h3 class="text-white font-bold text-[15px] leading-[22px]">{{auth()->user()->name}}</h3>
                </div>
            </div>
            <div class="bg-[#5142FC] rounded-[8px] w-[49px] h-[24px] font-bold text-[12px] leading-[20px text-white flex items-center justify-center">
                <span>BSC</span>
            </div>
        </div>
        <hr class="border-black mb-[15px]">
        <div class="flex gap-x-[95px] items-center">
            <div class=>
                <h4 class="text-[#8A8AA0] font-normal text-[13px] leading-[20px]">Current Bid</h4>
                <div class="flex gap-x-[7px] items-center">
                    <div class="flex gap-x-[5px]">
                        <h2 class="text-white print-price">4.89</h2>
                        <h2 class="text-white">ETH</h2>
                    </div>
                    <h4 class="text-[#8A8AA0] font-normal text-[13px] leading-[20px]">= $12.246</h4>
                </div>
            </div>
            <button class="flex bg-[#14141F] w-[64px] h-[28px] items-center justify-center gap-x-[5px] rounded-[8px]">
                <img src="{{asset('img/heart.svg')}}" alt="">
                <span class="text-white">100</span>
            </button>
        </div>
    </div>
</div>
