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

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body class="bg-[#C2C2C2]">
    <div class="full-container bg-[#fff] mx-auto max-w-sm h-screen overflow-y-scroll relative">
        <div class="p-4 flex justify-items-start border">
            <a href="/admin/post"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    viewBox="0 0 15 15">
                    <path fill="none" stroke="currentColor" stroke-linecap="square" d="M10 14L3 7.5L10 1" />
                </svg></a>
            <h1 class="font-semibold text-base pl-4">Edit Postingan</h1>
        </div>

        <form action="{{ route('admin/post/save-post') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="p-4">
                <label for="title">Judul</label>
                <input type="text" placeholder="Judul disini" name="title" id="title"
                    class="text-sm font-normal border-b-2 border-[#43936C] outline-none w-full">
            </div>
            <div class="p-4">
                <label for="category">Category</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="p-4">
                <label for="author">Penulis</label>
                <input type="text" placeholder="Penulis disini" name="author" id="author"
                    class="text-sm font-normal border-b-2 border-[#43936C] outline-none w-full">
            </div>
            <div class="mb-3 p-4">
                <label for="image" class="form-label w-full">Gambar</label>
                <input class="form-control form-control-sm" id="image" type="file" name="image">
            </div>
            <div class="trix-content p-4">
                <input id="content" type="hidden" name="content">
                <trix-editor input="content"></trix-editor>
            </div>

            <button type="submit" class="ml-4 btn btn-success">Publikasi</button>
        </form>


    </div>


    {{-- Icon --}}
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    {{-- Swiper JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    {{-- JS --}}
    <script src="/js/script.js"></script>

    {{-- Trix --}}
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
