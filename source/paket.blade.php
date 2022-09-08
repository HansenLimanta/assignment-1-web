---
title: Paket
description: Jadwal pelatihan stir mobil
---
@extends('_layouts.main')

@section('body')
    <h1 class="top-0 inset-x-0 text-center">Paket</h1>
    <p class="text-center">Paket tersedia dengan 3 pilihan, sesuai dengan kebutuhan anda.</p>

    <div class="flex flex-wrap justify-center items-center">
        <div class="p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 m-3">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Paket 1</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Sesi: 6 x 1 Jam <br> Biaya: Rp 490.000 <br> Materi:</p>
            <ul class="ml-6">
                <li>Belajar Teori Safety Driving</li>
                <li>Mengoper Gigi Mobil Manual & Automatic</li>
                <li>Mengemudi Mobil Mundur</li>
                <li>Mengendarai Mobil di Belokan</li>
                <li>Parkir Mobil Paralel dan Seri <br><br></li>
            </ul>
            <a href="/contact" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 hover:text-white">
                Hubungi
                <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
        <div class="p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 m-3">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Paket 2</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Sesi: 8 x 1 Jam <br> Biaya: Rp 660.000 <br> Materi:</p>
            <ul class="ml-6">
                <li>Belajar Teori Safety Driving</li>
                <li>Mengoper Gigi Mobil Manual & Automatic</li>
                <li>Mengemudi Mobil Mundur</li>
                <li>Mengendarai Mobil di Belokan</li>
                <li>Parkir Mobil Paralel dan Seri</li>
                <li>Mengendarai Mobil di Jalan Raya <br></li>
            </ul>
            <a href="/contact" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 hover:text-white">
                Hubungi
                <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
        <div class="p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 m-3">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Paket 3</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Sesi: 10 x 1 Jam <br> Biaya: Rp 800.000 <br> Materi:</p>
            <ul class="ml-6">
                <li>Belajar Teori Safety Driving</li>
                <li>Mengoper Gigi Mobil Manual & Automatic</li>
                <li>Mengemudi Mobil Mundur</li>
                <li>Mengendarai Mobil di Belokan</li>
                <li>Parkir Mobil Paralel dan Seri</li>
                <li>Mengendarai Mobil di Jalan Raya</li>
                <li>Tips & Trik Berkendara</li>
            </ul>
            <a href="/contact" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 hover:text-white">
                Hubungi
                <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>

    </div>

    
@endsection
