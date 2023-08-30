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
</head>

<body class="bg-[#C2C2C2]">
    <div class="full-container bg-[#fff] mx-auto max-w-sm h-screen overflow-y-scroll relative">
        <div class="form-container bg-[#91A666] h-screen pl-[25%] py-[35%]">
            <h1 class="mb-3 font-bold text-[#EDEDED] text-2xl ml-6">Admin Login</h1>
            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('admin/login') }}" method="POST">
                @csrf
                <div class="name block mb-4">
                    <label for="name" class="font-medium text-[#EDEDED]">Name</label>
                    <br>
                    <input type="text" name="name" id="name" placeholder="name"
                        class="px-2 py-1 rounded-xl text-[#616161] outline-none">
                </div>

                <div class="password block mb-4">
                    <label for="password" class="font-medium text-[#EDEDED]">Password</label>
                    <br>
                    <input type="password" name="password" id="password" placeholder="Password"
                        class="px-2 py-1 rounded-xl text-[#616161] outline-none">
                </div>

                <button type="submit" class="bg-[#ededed] px-2 p-1 text-sm rounded text-[#616161]">Login</button>
            </form>
        </div>
    </div>
</body>

</html>
