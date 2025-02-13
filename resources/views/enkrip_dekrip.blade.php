<x-app-layout>
    <x-slot name="heading">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Enkripsi dan Dekripsi') }}
        </h2>
       
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Nama: Saeful Anwar Syakur!") }}
                    {{ __("Asal: Tegal!") }}
                </div>
                <div class="p-6 text-gray-900">
                    {{ __("Encript") }}
                    <!-- Form Enkripsi -->
    <form method="POST" action="{{ route('encrypt') }}">
        @csrf
        <h2>Enkripsi</h2>
        <textarea name="plaintext" placeholder="Masukkan teks..."></textarea>
        <button type="submit">Enkripsi</button>
    </form>

    <hr>
                    {{ __("Descript") }}
                    <!-- Form Dekripsi -->
    <form method="POST" action="{{ route('decrypt') }}">
        @csrf
        <h2>Dekripsi</h2>
        <textarea name="ciphertext" placeholder="Masukkan ciphertext..."></textarea>
        <button type="submit">Dekripsi</button>
    </form>

    <!-- Menampilkan Hasil -->
    @if(session('result'))
    <div>
        <h3>Hasil:</h3>
        <p>{{ session('result') }}</p>
    </div>
@endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
