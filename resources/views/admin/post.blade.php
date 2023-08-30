<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">

    {{-- tailwind css --}}
    @vite('resources/css/app.css')

    {{-- CSS --}}
    <link rel="stylesheet" href="/css/style.css">

    {{-- Swiper JS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
</head>

<body class="bg-[#C2C2C2]">
    <div class="full-container bg-[#fff] mx-auto max-w-sm h-screen overflow-y-scroll relative">
        <div class="post pt-4 bg-[#91A666] rounded-b-3xl">
            <div class="nav flex px-2 w-[375px] h-[122px] items-center">
                <div class="logo bg-white rounded-full bg-auto w-16 h-16 justify-items-center">
                    <img src="/img/logoPIUKIDS.png" alt="" class="w-15 py-6 ">
                </div>
                <div class="px-5 justify-items-center">
                    <div class="usn text-white font-medium text-base">admin_piukids</div>
                    <a href="{{ route('logout') }}"
                        class="role bg-[#43936C] text-xs text-white py-1 px-2 w-12 rounded-full">Log Out</a>
                </div>
            </div>
        </div>

        {{-- Content --}}
        <div class="relative">
            <div class="flex justify-between m-4">
                <h1 class="text-[#91a666] text-sm font-medium">KELOLA</h1>
            </div>

            <div class="flex-row px-5">
                @foreach ($articles as $article)
                    <article class="flex justify-start bg-neutral-100 w-[343px] h-[72px] my-3 rounded-lg">
                        <img src="{{ asset('storage/'.$article->image) }}" alt="" class="w-[90px] h-[70px] px-2 py-2">
                        <ul class="py-2 px-3">
                            <li>
                                <h1 class="text-xs font-medium mb-1">{{ $article->title }}</h1>
                            </li>
                            <li>
                                <div
                                    class="text-white text-xs items-center bg-[#43936C] rounded-md px-2 font-normal mb-1">
                                    </div>
                            </li>
                            <li class="flex items-center">
                                <a href="post/edit/{{ $article->id }}" class="text-[10px] bg-[#91A666] p-1 rounded-md mr-3"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 1024 1024">
                                        <path fill="white"
                                            d="M832 512a32 32 0 1 1 64 0v352a32 32 0 0 1-32 32H160a32 32 0 0 1-32-32V160a32 32 0 0 1 32-32h352a32 32 0 0 1 0 64H192v640h640V512z" />
                                        <path fill="white"
                                            d="m469.952 554.24l52.8-7.552L847.104 222.4a32 32 0 1 0-45.248-45.248L477.44 501.44l-7.552 52.8zm422.4-422.4a96 96 0 0 1 0 135.808l-331.84 331.84a32 32 0 0 1-18.112 9.088L436.8 623.68a32 32 0 0 1-36.224-36.224l15.104-105.6a32 32 0 0 1 9.024-18.112l331.904-331.84a96 96 0 0 1 135.744 0z" />
                                    </svg></a>
                                <a href="post/delete/{{ $article->id }}" class=" bg-red-600 p-1 rounded-md mr-3"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24">
                                        <path fill="white"
                                            d="M10 5h4a2 2 0 1 0-4 0ZM8.5 5a3.5 3.5 0 1 1 7 0h5.75a.75.75 0 0 1 0 1.5h-1.32l-1.17 12.111A3.75 3.75 0 0 1 15.026 22H8.974a3.75 3.75 0 0 1-3.733-3.389L4.07 6.5H2.75a.75.75 0 0 1 0-1.5H8.5Zm2 4.75a.75.75 0 0 0-1.5 0v7.5a.75.75 0 0 0 1.5 0v-7.5ZM14.25 9a.75.75 0 0 1 .75.75v7.5a.75.75 0 0 1-1.5 0v-7.5a.75.75 0 0 1 .75-.75Zm-7.516 9.467a2.25 2.25 0 0 0 2.24 2.033h6.052a2.25 2.25 0 0 0 2.24-2.033L18.424 6.5H5.576l1.158 11.967Z" />
                                    </svg></a>
                            </li>
                        </ul>
                    </article>
                @endforeach
                {{ $articles->links() }}
            </div>
            <a href="post/create" class="add-post bg-[#91A666] w-8 h-8 rounded-full absolute right-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    class=" m-auto">
                    <path fill="white"
                        d="M12 4a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2h-6v6a1 1 0 1 1-2 0v-6H5a1 1 0 1 1 0-2h6V5a1 1 0 0 1 1-1z" />
                </svg>
            </a>
        </div>
    </div>


    {{-- Icon --}}
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    {{-- Swiper JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    {{-- JS --}}
    <script src="/js/script.js"></script>
</body>

</html>
