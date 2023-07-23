@extends('layout.main')

@section('content')
    <nav class="nav flex w-full h-14 border-b-2 items-center px-4" id="nav">
        <a href="/belanja">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M15.125 21.1L6.7 12.7q-.15-.15-.212-.325q-.063-.175-.063-.375t.063-.375q.062-.175.212-.325l8.425-8.425q.35-.35.875-.35t.9.375q.375.375.375.875t-.375.875L9.55 12l7.35 7.35q.35.35.35.862q0 .513-.375.888t-.875.375q-.5 0-.875-.375Z" />
            </svg>
        </a>
        <img src="/img/logoPIUKIDS.png" class="ml-5 w-[93px] h-[25px]" alt="">
    </nav>
    <img src="/img/dummyitem.png" alt="dummy-item" class="w-full">
    <div class="px-4">
        <h1 class="font-semibold pt-8 pb-6 text-base">{{ $shop->product }}</h1>

        <div class="flex flex-row">
            <div class="bg-[#F8CE60] rounded-lg">
                <h1 class="text-white px-1 font-bold text-sm mt-[2px]">{{ $shop->discount }}%</h1>
            </div>
            @php
                $discountPrice = ($shop->discount / 100) * $shop->price;
            @endphp
            <h1 class="text-neutral-500 ml-[6px] line-through">{{ number_format($discountPrice,0,'','.') }}</h1>

        </div>
        <div class="flex">
            <h1 class="w-1/2 font-semibold mt-2">Rp {{ number_format($shop->price,0,'','.') }}</h1>
            <div class="w-1/2 flex justify-end">
                <a href="/pilih-ecommerce"
                    class="bg-[#91A666] py-1 mx-4 text-center w-20 rounded text-white text-sm font-extrabold">Beli</a>
            </div>
        </div>
        <div class="pb-20 mt-8">
            {!! $shop->description_product !!}
        </div>

    </div>
@endsection
