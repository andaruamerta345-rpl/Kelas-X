@extends('Backend.back')
@section('admincontent')
<div>
    <h2>Insert Data</h2>
</div>
    <div class="row mt-5">
        <div class="col-6">
            <form action="{{ url('admin/menu') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label class="form-label" for="">Kategori :</label>
                <select class="form-select" name="idkategori">
                    @foreach ($kategoris as $kategori)
                        <option 
                        value="{{ $kategori->idkategori  }}"
                        >
                            {{ $kategori->kategori  }}
                        </option>
                    @endforeach
                </select>
                
                <div class="mt-2">
                    <label class="form-label" for="">Menu :</label>
                    <input 
                        class="form-control" 
                        type="text" 
                        name="menu" 
                        id="menu"
                        >
                    <span class="text-danger">
                        @error('menu')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="mt-2">
                    <label class="form-label" for="">Deskripsi :</label>
                    <input 
                        class="form-control" 
                        type="text" 
                        name="deskripsi" 
                        id="deskripsi"
                        >
                    <span class="text-danger">
                        @error('deskripsi')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="mt-2">
                    <label class="form-label" for="">Harga :</label>
                    <input 
                        class="form-control" 
                        type="number" 
                        name="harga" 
                        id="harga"
                        >
                    <span class="text-danger">
                        @error('harga')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="mt-2">
                    <label class="form-label" for="">Gambar :</label>
                    <input 
                        class="form-control" 
                        type="file" 
                        name="gambar" 
                        id="gambar"
                        >
                    <span class="text-danger">
                        @error('gambar')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection