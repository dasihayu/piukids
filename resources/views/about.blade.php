@extends('layout._main')

@section('content')
<nav class="nav flex w-full h-14 border-b-2 items-center px-4" id="nav">
    <a href="\">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
        viewBox="0 0 24 24">
        <path fill="currentColor"
            d="M15.125 21.1L6.7 12.7q-.15-.15-.212-.325q-.063-.175-.063-.375t.063-.375q.062-.175.212-.325l8.425-8.425q.35-.35.875-.35t.9.375q.375.375.375.875t-.375.875L9.55 12l7.35 7.35q.35.35.35.862q0 .513-.375.888t-.875.375q-.5 0-.875-.375Z" />
        </svg>
    </a>
    <h1 class=" ml-6 font-semibold ">Tentang Kami</h1>
</nav>
        <img src="/img/fakebanner.png" class="w-full">
        <div class="px-4 "> 
            <h1 class="mt-8 font-semibold">Tentang Kami PIUKIDS</h1>
            <div class="text-sm w-[319px] mt-8">
                <p class="mb-2">Di dunia yang serba modern saat ini, moral merupakan suatu hal yang kurang diperhatikan bagi generasi muda, padahal, nilai moral sangat penting untuk kemajuan bangsa, pembentukan moral bisa ditempuh dengan pendidikan agama islam dari usia dini.</p>
                <p class="mb-8">Pendidikan Agama Islam bagi anak usia dini adalah sarana untuk menyiapkan peserta didik dalam mememahami, mengenal, bertakwa, mengimani ajaran agama, mengamalkan akhlak mulia beragama Islam dari sumber utamanya yaitu kitab suci Alquran dan hadis, melalui kegiatan pengajaran, pembimbingan dan latihan serta penggunaan pengalaman.</p>
            </div>
        </div>
        <div class="youtube">
            <img src="img/ytdummy.png" class="w-full" alt="youtube">
            <img src="/img/fakebanner.png" class="w-full mt-3 mb-5">
        </div>
@endsection