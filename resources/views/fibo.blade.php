<x-app-layout>
    <x-slot name="heading">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Array dan Fibonaci') }}
        </h2>
       
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Nama: Saeful Anwar Syakur!") }}
                    <br>
                    {{ __("Asal: Tegal!") }}
                </div>
                <div class="p-6 text-gray-900">
                    {{ __("Fibonanci") }}
                </div>
                <div class="p-6 text-gray-900">
                <h2>1. Nilai array yang lebih dari 6:</h2>
    <p>Array: [5,4,1,6,8,9,7,6,3,8,7,8,10]</p>
    <ul>
        @foreach($dataLebihDari6 as $nilai)
            <li>{{ $nilai }}</li>
        @endforeach
    </ul>

    <h2>2. Bilangan Genap:</h2>
    <p>Array: [12,7,9,14,6,3,8,10,5,4]</p>
    <p>Bilangan genap: 
        @foreach($bilanganGenap as $genap)
            {{ $genap }},
        @endforeach
    </p>
    <p>Jumlah bilangan genap: {{ $jumlahGenap }}</p>

    <h2>3. Deret Fibonaci:</h2>
    <p>Dari dua bilangan terbesar masing array (10 dan 14):</p>
    <p>
        @foreach($fibonacci as $angka)
            {{ $angka }},
        @endforeach
    </p>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
