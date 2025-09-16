@extends('Backend.back')
@section('admincontent')
    <div class="row">
        <div class="col-6">
            <form action="{{ url('admin/user') }}" method="POST">
                @csrf
                <div class="mt-2">
                    <label class="form-label" for="">Level :</label>
                    <option value="==== Pilih Level ==="></option>
                    <select class="form-select" name="level" id="level">
                        <option value="manager">Manager</option>
                        <option value="kasir">Kasir</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                
                <div class="mt-2">
                    <label class="form-label" for="">Nama :</label>
                    <input 
                        class="form-control" 
                        value="{{ old('name') }}" 
                        type="text" 
                        name="name" 
                        id="name"
                        >
                    <span class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                
                <div class="mt-2">
                    <label class="form-label" for="">Email :</label>
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
                    <input 
                        class="form-control" 
                        value="{{ old('password') }}" 
                        type="password" 
                        name="password" 
                        id="password"
                        >
                    <span class="text-danger">
                        @error('password')
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