@extends('layout.main')

@section('content')
    {{-- Navbar --}}
    <nav class="nav flex w-full h-14 border-b-2 items-center px-4 " id="nav">
        <a href="/artikel">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M15.125 21.1L6.7 12.7q-.15-.15-.212-.325q-.063-.175-.063-.375t.063-.375q.062-.175.212-.325l8.425-8.425q.35-.35.875-.35t.9.375q.375.375.375.875t-.375.875L9.55 12l7.35 7.35q.35.35.35.862q0 .513-.375.888t-.875.375q-.5 0-.875-.375Z" />
            </svg>
        </a>
        <h1 class=" ml-6 font-semibold "><img src="/img/logoPIUKIDS.png" width="93px" height="25px" alt=""></h1>
    </nav>

    {{-- Article --}}
    <div class="articles" id="articles">
        <div class="image-section">
            <img src="/img/fakeimage.png" alt="" width="100%" height="215px">
        </div>
        <div class="article-section px-4">
            <article class="article">
                <p class="pt-8 text-xs">{{ $article->created_at->format('d M Y') }}</p>
                <h1 class="mt-2 font-semibold">{{ $article->title }}</h1>
                <p class="mt-2 mb-8 text-xs">Ditulis oleh {{ $article->author }}</p>
                <div class="content pb-16 text-xs">
                    {!! $article->content !!}
                </div>
            </article>
        </div>
    </div>

    {{-- More Articles --}}
    <div class="more-articles px-4 items-center pb-16" id="more-articles">
        <div class="heading flex justify-between">
            <h1 class="font-semibold pb-5">Kategori Artikel</h1>
            <a href="/artikel" class="text-[#607C23] text-xs">Lihat Semua <span class="ml-4">></span></a>
        </div>
        @foreach ($articles as $article)
            <article class="article mt-4 w-full rounded-xl h-[100px] px-3 border-2 flex justify-between items-center"
                id="article">
                <div class="text text-xs flex flex-col">
                    <a href="detail-artikel/" class=" w-[130px]">{{ $article->title }}</a>
                    <a href="" class="text-[10px] mt-1 text-[#607C23]">{{ $article->category->name }}</a>
                </div>
                <div class="image">
                    <a href=""><img src="/img/fakeimage.png" alt=""></a>
                </div>
            </article>
        @endforeach
    </div>
@endsection
