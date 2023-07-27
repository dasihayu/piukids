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
                    <div class="role bg-[#43936C] text-xs text-white py-1 px-2 w-12 rounded-full">admin</div>
                </div>
            </div>
        </div>

        {{-- Content --}}
        <div>
            <div class="flex justify-between m-4">
                <h1 class="text-[#91a666] text-sm font-medium">KELOLA</h1>
                <div>Semua(14)</div>
            </div>

            <div class="flex-row px-5">
                <div class="flex justify-start bg-neutral-100 w-[343px] h-[72px] my-3 rounded-lg">
                    <img src="/img/fakenews.png" alt="" class="w-[90px] h-[70px] px-2 py-2">
                    <ul class="py-2 px-3">
                        <li>
                            <h1 class="text-xs font-medium mb-1">Ini judul artikel</h1>
                        </li>
                        <li>
                            <div class="text-white text-xs items-center bg-[#3267E3] rounded-md px-2 font-normal w-[62px] mb-1">Kategori</div>
                        </li>
                        <li>
                            <h1 class="text-xs mb-1"><span class="text-[#CD7B2E]">Draf</span> - 9 Mar 2023</h1> 
                        </li>
                    </ul>                                                                                                                                                                                                                                                                     
                </div>

                <div class="flex justify-start bg-neutral-100 w-[343px] h-[72px] my-3 rounded-lg">
                    <img src="/img/fakenews.png" alt="" class="w-[90px] h-[70px] px-2 py-2">
                    <ul class="py-2 px-3">
                        <li>
                            <h1 class="text-xs font-medium mb-1">Ini judul artikel</h1>
                        </li>
                        <li>
                            <div class="text-white text-xs items-center bg-[#43936C] rounded-md px-2 font-normal w-[62px] mb-1">Kategori</div>
                        </li>
                        <li>
                            <h1 class="text-xs mb-1"><span class="text-[#43936C]">Dipublikasikan</span> - 9 Mar 2023</h1> 
                        </li>
                    </ul>                                                                                                                                                                                                                                                                     
                </div>

                <div class="flex justify-start bg-neutral-100 w-[343px] h-[72px] my-3 rounded-lg">
                    <img src="/img/fakenews.png" alt="" class="w-[90px] h-[70px] px-2 py-2">
                    <ul class="py-2 px-3">
                        <li>
                            <h1 class="text-xs font-medium mb-1">Ini judul artikel</h1>
                        </li>
                        <li>
                            <div class="text-white text-xs items-center bg-[#43936C] rounded-md px-2 font-normal w-[62px] mb-1">Kategori</div>
                        </li>
                        <li>
                            <h1 class="text-xs mb-1"><span class="text-[#43936C]">Dipublikasikan</span> - 9 Mar 2023</h1> 
                        </li>
                    </ul>                                                                                                                                                                                                                                                                     
                </div>

                <div class="flex justify-start bg-neutral-100 w-[343px] h-[72px] my-3 rounded-lg">
                    <img src="/img/fakenews.png" alt="" class="w-[90px] h-[70px] px-2 py-2">
                    <ul class="py-2 px-3">
                        <li>
                            <h1 class="text-xs font-medium mb-1">Ini judul artikel</h1>
                        </li>
                        <li>
                            <div class="text-white text-xs items-center bg-[#43936C] rounded-md px-2 font-normal w-[62px] mb-1">Kategori</div>
                        </li>
                        <li>
                            <h1 class="text-xs mb-1"><span class="text-[#43936C]">Dipublikasikan</span> - 9 Mar 2023</h1> 
                        </li>
                    </ul>                                                                                                                                                                                                                                                                     
                </div>

                <div class="flex justify-start bg-neutral-100 w-[343px] h-[72px] my-3 rounded-lg">
                    <img src="/img/fakenews.png" alt="" class="w-[90px] h-[70px] px-2 py-2">
                    <ul class="py-2 px-3">
                        <li>
                            <h1 class="text-xs font-medium mb-1">Ini judul artikel</h1>
                        </li>
                        <li>
                            <div class="text-white text-xs items-center bg-[#43936C] rounded-md px-2 font-normal w-[62px] mb-1">Kategori</div>
                        </li>
                        <li>
                            <h1 class="text-xs mb-1"><span class="text-[#43936C]">Dipublikasikan</span> - 9 Mar 2023</h1> 
                        </li>
                    </ul>                                                                                                                                                                                                                                                                     
                </div>  
            </div>
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
