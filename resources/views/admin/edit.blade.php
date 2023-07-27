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

    {{-- Trix --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
</head>
<body class="bg-[#C2C2C2]">
    <div class="full-container bg-[#fff] mx-auto max-w-sm h-screen overflow-y-scroll relative">
        <div class="p-4 flex justify-items-start border">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 15 15"><path fill="none" stroke="currentColor" stroke-linecap="square" d="M10 14L3 7.5L10 1"/></svg>
            <h1 class="font-semibold text-base pl-4">Edit Postingan</h1>
        </div>

        <div class="p-4 flex justify-between">
            <input type="text" placeholder="Judul disini" class="text-sm font-normal border-b-2 border-[#43936C]">
            <div class="flex justify-between">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" class="pr-2">
                    <path d="M7 13L3 9M3 9L7 5M3 9H16C17.3261 9 18.5979 9.52678 19.5355 10.4645C20.4732 11.4021 21 12.6739 21 14C21 15.3261 20.4732 16.5979 19.5355 17.5355C18.5979 18.4732 17.3261 19 16 19H11" stroke="#616161" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
    
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" class="pr-2">
                    <path d="M17 13L21 9M21 9L17 5M21 9H8C6.67392 9 5.40215 9.52678 4.46447 10.4645C3.52678 11.4021 3 12.6739 3 14C3 15.3261 3.52678 16.5979 4.46447 17.5355C5.40215 18.4732 6.67392 19 8 19H13" stroke="#616161" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                  
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" class="pr-2" id="show-categroy">
                        <path d="M19.293 9.951L16.96 7.151C16.607 6.728 16.43 6.516 16.214 6.364C16.0222 6.22943 15.8083 6.12958 15.582 6.069C15.327 6 15.052 6 14.502 6H7.2C6.08 6 5.52 6 5.092 6.218C4.71565 6.40969 4.40969 6.71565 4.218 7.092C4 7.52 4 8.08 4 9.2V14.8C4 15.92 4 16.48 4.218 16.908C4.40974 17.2843 4.71569 17.5903 5.092 17.782C5.519 18 6.079 18 7.197 18H14.5C15.051 18 15.326 18 15.581 17.931C15.807 17.871 16.021 17.771 16.213 17.635C16.429 17.483 16.606 17.272 16.959 16.849L19.292 14.049C19.9 13.32 20.202 12.956 20.319 12.549C20.421 12.19 20.421 11.809 20.319 11.451C20.203 11.044 19.9 10.681 19.293 9.951Z" stroke="#616161" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                        <button class="show-upload">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" class="pr-2 ">
                                <path d="M12 20C11.7167 20 11.479 19.904 11.287 19.712C11.095 19.52 10.9993 19.2827 11 19V11.85L9.125 13.725C8.94167 13.9083 8.704 13.996 8.412 13.988C8.12 13.98 7.88267 13.884 7.7 13.7C7.51667 13.5167 7.425 13.2833 7.425 13C7.425 12.7167 7.51667 12.4833 7.7 12.3L11.3 8.7C11.4 8.6 11.5083 8.52934 11.625 8.488C11.7417 8.44667 11.8667 8.42567 12 8.425C12.1333 8.425 12.2583 8.446 12.375 8.488C12.4917 8.53 12.6 8.60067 12.7 8.7L16.3 12.3C16.4833 12.4833 16.575 12.7167 16.575 13C16.575 13.2833 16.4833 13.5167 16.3 13.7C16.1167 13.8833 15.879 13.9793 15.587 13.988C15.295 13.9967 15.0577 13.909 14.875 13.725L13 11.85V19C13 19.2833 12.904 19.521 12.712 19.713C12.52 19.905 12.2827 20.0007 12 20ZM5 9C4.71667 9 4.479 8.904 4.287 8.712C4.095 8.52 3.99934 8.28267 4 8V6C4 5.45 4.196 4.979 4.588 4.587C4.98 4.195 5.45067 3.99934 6 4H18C18.55 4 19.021 4.196 19.413 4.588C19.805 4.98 20.0007 5.45067 20 6V8C20 8.28334 19.904 8.521 19.712 8.713C19.52 8.905 19.2827 9.00067 19 9C18.7167 9 18.479 8.904 18.287 8.712C18.095 8.52 17.9993 8.28267 18 8V6H6V8C6 8.28334 5.904 8.521 5.712 8.713C5.52 8.905 5.28267 9.00067 5 9Z" fill="black"/>
                              </svg>
                        </button>
                          
            </div>
        </div>

        

        <div class="trix-content p-4">
            <form action="">
                <input type="hidden" name="content" id="x">
                <trix-editor id="x"></trix-editor>
            </form>
        </div>
    </div>

    <div class="upload flex justify-center hidden">
        {{-- Modal Upload --}}
        <div class="bg-white rounded-xl shadow-lg max-w-[275px] p-3">
            {{-- Modal Header --}}
            <div class="px-4 py-2 text-base font-bold">
                <h3>Publikasikan postingan?</h3>
            </div>
            {{-- Modal body --}}
            <div class="p-3 text-sm">
                Apakah Anda yakin ingin mempublikasikan postingan ini?
            </div>
            <div class="flex justify-between items-center w-100 p-3">
                <button class="bg-transparent text-[#43936C]">Publikasikan</button>
                <button class="bg-transparent text-[#404040] close-modal">Batalkan</button>
            </div>
        </div>
    </div>

    {{-- Icon --}}
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    {{-- Swiper JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    {{-- JS --}}
    <script src="/js/script.js"></script>

    {{-- Trix --}}
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
</body>
</html>