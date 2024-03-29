@extends('layout.main')

@section('content')
    <nav class="nav flex w-full h-14 border-b-2 items-center px-4" id="nav">
        <a href="\">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M15.125 21.1L6.7 12.7q-.15-.15-.212-.325q-.063-.175-.063-.375t.063-.375q.062-.175.212-.325l8.425-8.425q.35-.35.875-.35t.9.375q.375.375.375.875t-.375.875L9.55 12l7.35 7.35q.35.35.35.862q0 .513-.375.888t-.875.375q-.5 0-.875-.375Z" />
            </svg>
        </a>
        <h1 class=" ml-6 font-semibold ">Permainan</h1>
    </nav>

    {{-- search section --}}
    <section class="section-shops pt-7 pb-16">
        <form action="" method="get"
            class="w-[343px] h-12 border flex items-center px-5 rounded-lg mx-auto mb-7 bg-white">
            <button type="submit" for="search" class="cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="#757575"
                        d="M15.5 14h-.79l-.28-.27a6.5 6.5 0 0 0 1.48-5.34c-.47-2.78-2.79-5-5.59-5.34a6.505 6.505 0 0 0-7.27 7.27c.34 2.8 2.56 5.12 5.34 5.59a6.5 6.5 0 0 0 5.34-1.48l.27.28v.79l4.25 4.25c.41.41 1.08.41 1.49 0c.41-.41.41-1.08 0-1.49L15.5 14zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5S14 7.01 14 9.5S11.99 14 9.5 14z" />
                </svg>
            </button>
            <input type="search" name="search" id="search" width="100%" class="px-2 outline-none text-xs ml-5"
                placeholder="Pencarian Permainan" value="{{ old('search') }}">
        </form>
        {{-- akhir search section --}}

        {{-- games section --}}
        @if ($games->count())
            <section class="games pt-8 pb-24 px-4" id="games">
                <h1 class="font-semibold">Ide Permainan Anak</h1>
                @foreach ($games as $game)
                    <article class="game mt-4 w-full rounded-xl h-[100px] px-3 border-2 flex justify-between items-center"
                        id="game">
                        <div class="text text-xs flex flex-col">
                            <a href="detail-permainan/{{ $game->title }}" class=" w-[130px]">{{ $game->title }}</a>
                            <a href="" class="text-[10px] mt-1 text-[#607C23]">{{ $game->category->name }}</a>
                        </div>
                        <div class="image">
                            <a href=""><img src="img/fakeimage.png" alt=""></a>
                        </div>
                    </article>
                @endforeach
                {{ $games->links() }}
            </section>
            {{-- akhir games section --}}
        @else
            <div class="something-else font-medium text-xl text-center my-32 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 24 24">
                    <path fill="#91A666"
                        d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5A6.5 6.5 0 0 0 9.5 3C6.08 3 3.28 5.64 3.03 9h2.02C5.3 6.75 7.18 5 9.5 5C11.99 5 14 7.01 14 9.5S11.99 14 9.5 14c-.17 0-.33-.03-.5-.05v2.02c.17.02.33.03.5.03c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5z" />
                    <path fill="#91A666"
                        d="M6.47 10.82L4 13.29l-2.47-2.47l-.71.71L3.29 14L.82 16.47l.71.71L4 14.71l2.47 2.47l.71-.71L4.71 14l2.47-2.47z" />
                </svg>
                <h1 class="ml-2 text-[#757575]">Ooops, permainan gak ada</h1>
            </div>
        @endif
        </section>
    @endsection
