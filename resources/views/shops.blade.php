@extends('layout.main')

@section('content')
    <nav class="nav flex w-full h-14 border-b-2 items-center px-4" id="nav">
        <a href="\">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M15.125 21.1L6.7 12.7q-.15-.15-.212-.325q-.063-.175-.063-.375t.063-.375q.062-.175.212-.325l8.425-8.425q.35-.35.875-.35t.9.375q.375.375.375.875t-.375.875L9.55 12l7.35 7.35q.35.35.35.862q0 .513-.375.888t-.875.375q-.5 0-.875-.375Z" />
            </svg>
        </a>
        <h1 class=" ml-6 font-semibold ">Belanja</h1>
    </nav>

    <section class="section-shops pt-7 pb-16">
        {{-- search section --}}
        <form action="" method="get"
            class="w-[343px] h-12 border flex items-center px-5 rounded-lg mx-auto mb-7 bg-white">
            <label for="search" class="cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="#757575"
                        d="M15.5 14h-.79l-.28-.27a6.5 6.5 0 0 0 1.48-5.34c-.47-2.78-2.79-5-5.59-5.34a6.505 6.505 0 0 0-7.27 7.27c.34 2.8 2.56 5.12 5.34 5.59a6.5 6.5 0 0 0 5.34-1.48l.27.28v.79l4.25 4.25c.41.41 1.08.41 1.49 0c.41-.41.41-1.08 0-1.49L15.5 14zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5S14 7.01 14 9.5S11.99 14 9.5 14z" />
                </svg>
            </label>
            <input type="search" name="search" id="search" width="100%" class="px-2 outline-none text-xs ml-5"
                placeholder="Pencarian Produk" value="{{ old('search') }}">
        </form>
        {{-- akhir search section --}}
        {{-- item section --}}
        @if ($shops->count())
            <section class="items px-4 flex flex-wrap justify-between" id="items">
                @foreach ($shops as $shop)
                    <div class="item relative w-[104px] h-60 bg-white rounded-xl shadow mt-6">
                        <div class="image-section">
                            <a href="">
                                <img src="/img/fakebanner.png" alt="" class=" rounded-t-xl w-[104px] h-[104px]">
                            </a>
                        </div>
                        <div class="price-section pl-1 mt-1 w-[90px]">
                            <h3 class="text-xs text-[#404040]">{{ $shop->product }}</h3>
                            <div class="prices flex items-center justify-between my-1">
                                <p class="bg-[#F8CE60] text-white px-1 rounded-lg text-[10px]">{{ $shop->discount }}%</p>
                                @php
                                    $discountPrice = ($shop->discount / 100) * $shop->price;
                                @endphp
                                <p class=" line-through text-[10px] text-[#404040]">
                                    {{ number_format($discountPrice, 0, '', '.') }}</p>
                            </div>
                            <h6 class="text-xs font-semibold mb-3">Rp {{ number_format($shop->price, 0, '', '.') }}</h6>
                        </div>
                        <div class="buy-section absolute bottom-2">
                            <a href="/detail-barang/{{ $shop->product }}"
                                class="bg-[#91A666] text-xs text-white font-semibold px-8 py-1 mx-2 text-center rounded">Beli</a>
                        </div>
                    </div>
                @endforeach
            </section>
            {{-- akhir item section --}}
        @else
            <div class="something-else font-medium text-xl text-center my-32 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 24 24">
                    <path fill="#91A666"
                        d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5A6.5 6.5 0 0 0 9.5 3C6.08 3 3.28 5.64 3.03 9h2.02C5.3 6.75 7.18 5 9.5 5C11.99 5 14 7.01 14 9.5S11.99 14 9.5 14c-.17 0-.33-.03-.5-.05v2.02c.17.02.33.03.5.03c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5z" />
                    <path fill="#91A666"
                        d="M6.47 10.82L4 13.29l-2.47-2.47l-.71.71L3.29 14L.82 16.47l.71.71L4 14.71l2.47 2.47l.71-.71L4.71 14l2.47-2.47z" />
                </svg>
                <h1 class="ml-2 text-[#757575]">Ooops, produk gak ada</h1>
            </div>
        @endif
    </section>
@endsection
