@extends('layout.main')

@section('content')
    {{-- navbar --}}
    <nav class="nav flex items-center bg-white h-10 border-b-2 z-50" id="nav">
        <ul class="flex justify-evenly text-xs">
            <li><a href="" class="font-semibold text-[#91A666]">Beranda</a></li>
            <li><a href="" class=" ml-10">Artikel</a></li>
            <li><a href="" class=" ml-10">Tentang Kami</a></li>
            <li><a href="" class=" ml-10">Belanja</a></li>
        </ul>
    </nav>
    {{-- akhir navbar --}}

    {{-- Hero --}}
    <section class="hero pb-5" id="hero">
        <div class="hero-image pb-4">
            <img src="/img/hero.png" alt="">
        </div>
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="/img/sliderimage.png" alt=""></div>
                <div class="swiper-slide"><img src="/img/sliderimage.png" alt=""></div>
                <div class="swiper-slide"><img src="/img/sliderimage.png" alt=""></div>
            </div>
        </div>
    </section>
    {{-- Akhir Hero --}}
    {{-- Category --}}
    <section class="categories px-4 mb-6" id="categories">
        <div class="all-category ml-2 flex overflow-x-scroll" id="category">
            <div class="category mx-4 text-center">
                <a href=""><img src="img/fakeimage.png" alt="kategory" class="h-14"></a>
                <a href="" class="text-xs">Belanja</a>
            </div>
            <div class="category mx-4 text-center">
                <a href=""><img src="img/fakeimage.png" alt="kategory" class="h-14"></a>
                <a href="" class="text-xs">Permainan</a>
            </div>
            <div class="category mx-4 text-center">
                <a href=""><img src="img/fakeimage.png" alt="kategory" class="h-14"></a>
                <a href="" class="text-xs">Event</a>
            </div>
            <div class="category mx-4 text-center">
                <a href=""><img src="img/fakeimage.png" alt="kategory" class="h-14"></a>
                <a href="" class="text-xs">Artikel</a>
            </div>
        </div>
    </section>
    {{-- Akhir Category --}}

    <div class="container bg-[#f5f5f5] rounded-t-3xl">
        {{-- Shop --}}
        <section class="shops px-4 pt-5 pb-11" id="shops">
            <div class="heading flex justify-between">
                <h1 class="font-semibold pb-4">Belanja PIUKIDS</h1>
                <a href="/belanja" class="text-[#607C23] text-xs">Lihat Semua <span class="ml-4">></span></a>
            </div>
            <div class="items flex flex-wrap justify-between">
                @foreach ($shops as $shop)
                    <div class="item relative w-[104px] h-60 bg-white rounded-xl shadow mt-5">
                        <div class="image-section">
                            <a href="/detail-barang/{{ $shop->product }}">
                                <img src="/img/fakebanner.png" alt="" class=" rounded-t-xl w-[104px] h-[104px]">
                            </a>
                        </div>
                        <div class="price-section pl-1 mt-1 w-[90px]">
                            <a href="/detail-barang/{{ $shop->product }}"
                                class="text-xs text-[#404040]">{{ $shop->product }}</a>
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
                            <a href=""
                                class="bg-[#91A666] text-xs text-white font-semibold px-8 py-1 mx-2 text-center rounded">Beli</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        {{-- Akhir Shop --}}
        {{-- Artikel --}}
        <section class="articles pb-11 px-4" id="articles">
            <div class="heading flex justify-between">
                <h1 class="font-semibold">Artikel Terbaru</h1>
                <a href="/artikel" class="text-[#607C23] text-xs">Lihat Semua <span class="ml-4">></span></a>
            </div>
            @foreach ($articles as $article)
                <article class="article mt-4 w-full rounded-xl h-[100px] px-3 border-2 flex justify-between items-center bg-white"
                    id="article">
                    <div class="text text-xs flex flex-col">
                        <a href="detail-artikel/{{ $article->title }}" class=" w-[130px]">{{ $article->title }}</a>
                        <a href="" class="text-[10px] mt-1 text-[#607C23]">{{ $article->category->name }}</a>
                    </div>
                    <div class="image">
                        <a href=""><img src="img/fakeimage.png" alt=""></a>
                    </div>
                </article>
            @endforeach
        </section>
        {{-- Akhir Artikel --}}
        {{-- blank section --}}
        <div class="blank-section">
            <img src="/img/fakebanner.png" width="100%" height="188px" alt="">
        </div>
    </div>
@endsection
