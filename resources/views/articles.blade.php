@extends('layout.main')

@section('content')
<nav class="nav flex w-full h-14 border-b-2 items-center px-4" id="nav">
    <a href="\">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
        viewBox="0 0 24 24">
        <path fill="currentColor"
            d="M15.125 21.1L6.7 12.7q-.15-.15-.212-.325q-.063-.175-.063-.375t.063-.375q.062-.175.212-.325l8.425-8.425q.35-.35.875-.35t.9.375q.375.375.375.875t-.375.875L9.55 12l7.35 7.35q.35.35.35.862q0 .513-.375.888t-.875.375q-.5 0-.875-.375Z" />
        </svg>
    </a>
    <h1 class=" ml-6 font-semibold ">Artikel PIUKIDS</h1>
</nav>
    <section class="categories pt-5 px-4" id="categories">
        <h1 class="font-semibold pb-5">Kategori Artikel</h1>
        <div class="all-category ml-2 flex overflow-x-scroll" id="category">
            @foreach ($categories as $category)
                <div class="category mx-4 text-center">
                    <a href=""><img src="img/fakeimage.png" alt="kategory" class="h-14 w-14"></a>
                    <a href="" class="text-xs">{{ $category->name }}</a>
                </div>
            @endforeach
        </div>
    </section>
    <section class="articles pt-8 pb-24 px-4" id="articles">
        <h1 class="font-semibold">Artikel Terbaru</h1>
        @foreach ($articles as $article)
            <article class="article mt-4 w-full rounded-xl h-[100px] px-3 border-2 flex justify-between items-center"
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
        {{ $articles->links() }}
    </section>
@endsection
