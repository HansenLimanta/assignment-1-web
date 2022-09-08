---
title: Trainer
description: Jadwal pelatihan stir mobil
---
@extends('_layouts.main')

@section('body')
    <div class="flex flex-col justify-center items-center">
        <h1 class="top-0 inset-x-0">Trainer</h1>
        <p class="text-center">Belajar lebih menenangkan dengan trainer terpercaya kami. <br> Dengan pengalaman lebih dari 10 tahun, kami siap membantu anda <br> menguasai mobil dalam waktu yang singkat.</p>

        <div class="flex flex-auto justify-center place-content-evenly">
            <div class="flex flex-col justify-center items-center h-full">
                <img src="/assets/img/person-1.jpg" alt="person-1" class="flex rounded-full h-64 w-64 object-cover m-6">
                <h3 class="text-center">Iskandar Maimunah</h3>

            </div>
            <div class="flex flex-col justify-center items-center h-full">
                <img src="/assets/img/person-2.jpg" alt="person-2" class="flex rounded-full h-64 w-64 object-cover m-6 ">
                <h3 class="text-center">Abdullah Hasan</h3>
            </div>
            <div class="flex flex-col justify-center items-center h-full">
                <img src="/assets/img/person-3.jpg" alt="person-3" class="flex rounded-full h-64 w-64 object-cover m-6 ">
                <h3 class="text-center">Taufik Arif</h3>
            </div>
        </div>
    </div>
@endsection
