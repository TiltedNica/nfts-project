@extends('layouts.auth')

@section('header_action')
    <div class="flex justify-center">
        <div class="flex flex-col gap-y-[12px] mt-[59px] items-center">
            <h1 class="font-bold text-[48px] text-white">Create Collection</h1>
            <div class="flex gap-x-[12px] text-[#8A8AA0]">
                <a>Home</a>
                <div>/</div>
                <a>Pages</a>
                <div>/</div>
                <a>Create Collection</a>
            </div>
        </div>
    </div>
@endsection

@section('main')
    <div class="flex gap-x-4 justify-center mt-[80px] mb-[80px]">
        <form class="flex flex-col gap-y-[24px]" action="{{route('create-collection.index')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col gap-y-[24px]">
                <label class="text-white font-bold text-xl" for="">Name of Collection</label>
                <input
                    class="rounded-[8px] bg-transparent placeholder-[#8A8AA0] border border-[#343444] flex justify-center text-left w-[690px] ps-[20px] py-[13px] text-white"
                    type="text" placeholder="Name of Collection" name="collection_name">
                @error('collection_name')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
                <input
                    class="rounded-[8px] bg-transparent placeholder-[#8A8AA0] border border-[#343444] flex justify-center text-left w-[690px] ps-[20px] py-[13px] text-white"
                    type="file" name="img_collection" accept=".jpg, .png, .jpeg">
                <button
                    class="border-[2px] border-white rounded-[56px] w-[690px] h-[54px] flex items-center justify-center gap-x-[8px] text-white">
                    Register
                </button>
            </div>
        </form>
    </div>
@endsection
