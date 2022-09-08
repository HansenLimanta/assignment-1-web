---
title: Jadwal
description: Jadwal pelatihan stir mobil
---
@extends('_layouts.main')

@section('body')
    <h1>Jadwal Kursus Mobil</h1>

    <img src="/assets/img/driving-1.jpg"
        alt="About image"
        class="flex rounded-full h-80 w-80 object-cover mx-auto md:float-right my-6 md:ml-10">

    <h2>Senin - Jumat</h2>
    <p class="mb-6">09.00 - 12.00 WIB</p>
    <p class="mb-6">13.00 - 18.00 WIB</p>
    
    <h2>Sabtu</h2>
    <p class="mb-6">10.00 - 12.00 WIB</p>
    <p class="mb-6">13.00 - 16.00 WIB</p>

    <h2>Minggu</h2>
    <p class="mb-6">Tidak ada kegiatan.</p>

    <a href="/contact" class="bg-blue-500 text-white hover:bg-blue-700 hover:text-white font-bold py-2 px-4 rounded-full mt-10 text-2xl">Daftar Sekarang</a>
@endsection
