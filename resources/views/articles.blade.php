@extends('layout.main')

@section('content')
    <section class="categories pt-5" id="categories">
        <h1 class="font-semibold pb-5">Kategori Artikel</h1>
        @php
            $data = [1, 2, 3, 4, 5];
        @endphp
        <div class="all-category ml-2 flex overflow-x-scroll" id="category">
            @foreach ($data as $item)
                <div class="category mx-4">
                    <a href=""><img src="img/fakeimage.png" alt="kategory" class=" w-14 h-14"></a>
                    <a href="" class="text-xs">Parenting</a>
                </div>
            @endforeach
        </div>
    </section>
    <section class="articles pt-8 pb-24" id="articles">
        <h1 class="font-semibold">Artikel Terbaru</h1>
        @foreach ($data as $item)
            <article class="article mt-4 w-full rounded-xl h-[100px] px-3 border-2 flex justify-between items-center"
                id="article">
                <div class="text text-xs flex flex-col">
                    <a href="" class=" w-[130px]">Pentingnya Pendidikan
                        Islam untuk anak
                        di usai dini</a>
                    <a href="" class="text-[8px] mt-1 text-[#607C23]">Pendidikan Islam</a>
                </div>
                <div class="image">
                    <a href=""><img src="img/fakeimage.png" alt=""></a>
                </div>
            </article>
        @endforeach
    </section>
@endsection
