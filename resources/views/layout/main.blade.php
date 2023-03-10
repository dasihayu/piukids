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
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-[#f5f5f5]">
    <div class="full-container bg-[#fff] mx-auto max-w-md h-screen overflow-y-scroll">
        @include('template.navbar')

        <div class="content px-4">
            @yield('content')
        </div>

        @include('template.footer')
    </div>
</body>

</html>
