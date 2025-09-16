@extends('front')

@section('content')
    <div class="row">
        <div class="col-6">
            <form action="{{ url('/postregister') }}" method="POST">
                @csrf
                
                <div class="mt-2">
                    <label class="form-label" for="">Pelanggan :</label>
                    <input 
                        class="form-control" 
                        value="{{ old('pelanggan') }}" 
                        type="text" 
                        name="pelanggan" 
                        id="pelanggan"
                    >
                    <span class="text-danger">
                        @error('pelanggan')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="mt-2">
                    <label class="form-label" for="">Alamat :</label>
                    <input 
                        class="form-control" 
                        value="{{ old('alamat') }}" 
                        type="text" 
                        name="alamat" 
                        id="alamat"
                        >
                    <span class="text-danger">
                        @error('alamat')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="mt-2">
                    <label class="form-label" for="">Telp :</label>
                    <input 
                        class="form-control"
                        value="{{ old('telp') }}"  
                        type="tel" 
                        name="telp" 
                        id="telp"
                        >
                    <span class="text-danger">
                        @error('telp')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="mt-2">
                    <label class="form-label" for="">Jenis Kelamin :</label>
                    <select class="form-select" name="jeniskelamin" id="">
                        <option value="l">Laki - Laki</option>
                        <option value="p" selected>Perempuan</option>
                    </select>
                </div>

                <div class="mt-2">
                    <label class="form-label" for="">Email:</label>
                    <input 
                        class="form-control" 
                        value="{{ old('email') }}" 
                        type="email" 
                        name="email" 
                        id="email"
                        >
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="mt-2">
                    <label class="form-label" for="">Password :</label>
                    <input class="form-control" type="password" name="password" id="password">
                    <span class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection