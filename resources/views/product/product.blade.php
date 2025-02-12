<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Halaman Produk') }}
        </h2>
       
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <table class="table-auto">
  <thead>
    <tr>
      <th>No</th>
      <th>Gambar</th>
      <th>Nama Produk</th>
      <th>Qty</th>
      <th>Kasir</th>
      <th>aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($produk as $k)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $k->nama }}</td>
                                <td>{{ $k->jenis }}</td>
                                <td>{{ $k->harga_jual }}</td>
                                <td>{{ $k->harga_beli }}</td>
                                <td>
                                    @empty($k->foto)
                                        <img src="{{ url('image/nophoto.jpg') }}" alt="project-image" class="rounded"
                                            style="width: 100%; max-width: 100px; height: auto;">
                                    @else
                                        <img src="{{ url('image') }}/{{ $k->foto }}" alt="project-image" class="rounded"
                                            style="width: 100%; max-width: 100px; height: auto;">
                                    @endempty
                                </td>
                                <td>
                                    <a href="" class="btn btn-sm btn-secondary">show</a>
                                    <a href="{{ route('index.edit', $k->id) }}" class="btn btn-sm btn-warning">edit</a>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal{{ $k->id }}">
                                        Hapus
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{ $k->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Produk</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah anda yakin akan menghapus data {{ $k->nama }}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>

                                                    <form action="{{ route('index.destroy', $k->id) }}" method="POST"
                                                        style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
