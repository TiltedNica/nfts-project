@extends('layouts.app')


@section('title')
    Create Item
@endsection



@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css"/>
@endpush

@section('header_action')
    <div class="flex justify-center">
        <div class="flex flex-col gap-y-[12px] mt-[59px] items-center">
            <h1 class="font-bold text-[48px] text-white">Create Item</h1>
            <div class="flex gap-x-[12px] text-[#8A8AA0]">
                <a href="{{route('home')}}">Home</a>
                <div>/</div>
                <a>Pages</a>
                <div>/</div>
                <a>Create Item</a>
            </div>
        </div>
    </div>
@endsection

@section('main')

    <div>HELLO{{auth()->user()->name}}</div>
    <div class="flex mt-[80px] ms-[255px] mb-[80px]">
        <div class="me-[80px]">
            <div class="text-white font-bold text-[20px] leading-[26px] mb-[20px]">Preview item</div>
            <x-preview-card :user="$user"/>
        </div>
        <div class="flex  flex-col">
            <div>
                <div class="text-white font-bold text-[20px] leading-[26px]">Upload file</div>
                <div>
                    <form action="{{route('image.store')}}" method="post" enctype="multipart/form-data" id="dropzone"
                          class="text-center dropzone mt-[20px] mb-[24px] rounded-[8px] bg-transparent placeholder-[#8A8AA0] border border-[#343444] w-[1000px] h-[102px] text-white"
                          type="text" placeholder="Enter price for one item (ETH)">
                        @csrf
                    </form>
                </div>
            </div>
            <form action="{{route('create-item.store')}}" method="POST" novalidate>
                @csrf
                <div class="text-white font-bold text-[20px] leading-[26px] mb-[20px]">Select Method</div>
                <div class="flex bg-white w-[320px] h-[46px] rounded-[8px] items-center justify-center gap-x-[8px]">
                    <img src="{{asset('img/tag.svg')}}" alt="">
                    <div class="text-[#5142FC]">Fixed Price</div>
                </div>
                <div class="text-white font-bold text-[20px] leading-[26px] mb-[20px] mt-[24px]">Price</div>
                <input name="price"
                       class="price rounded-[8px] bg-transparent placeholder-[#8A8AA0] border border-[#343444] flex justify-center text-left w-[1000px] h-[46px] ps-[20px] py-[13px] text-white"
                       type="number" placeholder="Enter price for one item (ETH)">
                @error('price')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
                <div class="text-white font-bold text-[20px] leading-[26px] mb-[20px] mt-[24px]">Title</div>
                <input name="title" type="text"
                       class="title rounded-[8px] bg-transparent placeholder-[#8A8AA0] border border-[#343444] flex justify-center text-left w-[1000px] h-[46px] ps-[20px] py-[13px] text-white"
                       type="text" placeholder="Enter price for one item (ETH)">
                @error('title')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
                <div class="text-white font-bold text-[20px] leading-[26px] mb-[20px] mt-[24px]">Description</div>
                <textarea name="description" id="" cols="30"
                          class="description rounded-[8px] bg-transparent placeholder-[#8A8AA0] border border-[#343444] flex justify-center text-left w-[1000px] h-[80px] ps-[20px] py-[13px] text-white resize-none"
                          rows="10" placeholder='e.g. “This is very limited item”'></textarea>
                @error('description')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
                <div class="grid-cols-3 grid">
                    <div>
                        <div class="text-white font-bold text-[20px] leading-[26px] mb-[20px] mt-[24px]">Royalties</div>
                        <input name="royalties"
                               class="rounded-[8px] bg-transparent placeholder-[#8A8AA0] border border-[#343444] flex justify-center text-left w-[320px] h-[46px] ps-[20px] py-[13px] text-white"
                               type="number">
                        @error('royalties')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                        @enderror
                    </div>
                    <div>
                        <div class="text-white font-bold text-[20px] leading-[26px] mb-[20px] mt-[24px]">Size</div>
                        <input name="size"
                               class="rounded-[8px] bg-transparent placeholder-[#8A8AA0] border border-[#343444] flex justify-center text-left w-[320px] h-[46px] ps-[20px] py-[13px] text-white"
                               type="number">
                        @error('size')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                        @enderror
                    </div>
                    <div>
                        <div class="text-white font-bold text-[20px] leading-[26px] mb-[20px] mt-[24px]">Collection
                        </div>
                        <select
                            class="rounded-[8px] bg-transparent placeholder-[#8A8AA0] border border-[#343444] flex justify-center text-left w-[320px] h-[46px] ps-[20px] py-[13px] text-white"
                            name="category_id" id="">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <div class="text-white font-bold text-[20px] leading-[26px] mb-[20px] mt-[24px]">Categories
                        </div>
                        <select
                            class="rounded-[8px] bg-transparent placeholder-[#8A8AA0] border border-[#343444] flex justify-center text-left w-[320px] h-[46px] ps-[20px] py-[13px] text-white"
                            name="collection_id" id="">
                            @foreach($collections as $collection)
                                <option value="{{$collection->id}}">{{$collection->collection_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-5">
                    <input name="img_item" value="{{old('img_item')}}" type="hidden">
                    @error('img_item')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <input type="submit" value="Create Item"
                       class="bg-[#333340] hover:bg-[#5142FC] transition-colors cursor-pointer uppercase font-bold w-full p-3 rounded-lg text-white">
            </form>
        </div>
    </div>

@endsection
