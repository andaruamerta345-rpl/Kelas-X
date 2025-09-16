@extends('Backend.back')
@section('admincontent')
    <div>
        <h1>Kategori</h1>
    </div>
    <div class="mt-3 mb-1">
        <a href="{{ route('kategori.create') }}" class="btn btn-primary">Tambah Data</a>
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Ubah</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            @php
                $no = 1;
            @endphp
            <tbody>
                @foreach ($kategoris as $kategori)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $kategori->kategori }}</td>
                        <td>
                            <a 
                                class="btn btn-info" 
                                style="color: white"
                                href="{{ url('admin/kategori/'.$kategori->idkategori.'/edit') }}"
                                >Ubah
                            </a>
                        </td>
                        <td>
                            <a 
                                class="btn btn-danger" 
                                href="{{ url('admin/kategori/'.$kategori->idkategori) }}"
                                >Hapus
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection