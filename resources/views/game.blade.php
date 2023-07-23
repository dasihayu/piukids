@extends('layout.main')

@section('content')
    <nav class="nav flex w-full h-14 border-b-2 items-center px-4" id="nav">
        <a href="/permainan">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M15.125 21.1L6.7 12.7q-.15-.15-.212-.325q-.063-.175-.063-.375t.063-.375q.062-.175.212-.325l8.425-8.425q.35-.35.875-.35t.9.375q.375.375.375.875t-.375.875L9.55 12l7.35 7.35q.35.35.35.862q0 .513-.375.888t-.875.375q-.5 0-.875-.375Z" />
            </svg>
        </a>
        <h1 class=" ml-6 font-semibold ">Permainan</h1>
    </nav>

    {{-- Games --}}
    <div class="games" id="games">
        <div class="image-section">
            <img src="/img/fakeimage.png" alt="" width="100%" height="215px">
        </div>
        <div class="game-section px-4">
            <article class="game">
                <p class="pt-8 text-xs">{{ $game->created_at->format('d M Y') }}</p>
                <h1 class="mt-2 font-semibold">{{ $game->title }}</h1>
                <p class="mt-2 mb-8 text-xs">Ditulis oleh {{ $game->author }}</p>
                <div class="content pb-16 text-xs">
                    {!! $game->content !!}
                </div>
            </article>
        </div>
    </div>

    {{-- More games --}}
    <div class="more-games px-4 items-center pb-16" id="more-games">
        <div class="heading flex justify-between">
            <h1 class="font-semibold pb-5">Ide Permainan Lainnya</h1>
            <a href="/permainan" class="text-[#607C23] text-xs">Lihat Semua <span class="ml-4">></span></a>
        </div>
        @foreach ($games as $game)
            <article class="games mt-4 w-full rounded-xl h-[100px] px-3 border-2 flex justify-between items-center"
                id="games">
                <div class="text text-xs flex flex-col">
                    <a href="/detail-permainan/{{ $game->title }}" class=" w-[130px]">{{ $game->title }}</a>
                    <a href="" class="text-[10px] mt-1 text-[#607C23]">{{ $game->category->name }}</a>
                </div>
                <div class="image">
                    <a href="/detail-permainan/{{ $game->title }}"><img src="/img/fakeimage.png" alt=""></a>
                </div>
            </article>
        @endforeach
    </div>
@endsection
