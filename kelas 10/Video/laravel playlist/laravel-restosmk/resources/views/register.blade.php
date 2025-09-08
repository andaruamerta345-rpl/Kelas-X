@extends('front')

@section('content')
    <div class="row">
        <div class="col-6">
            <form action="" method="POST">
                
                <div class="mt-2">
                    <label class="form-label" for="">Pelanggan :</label>
                    <input class="form-control" type="text" name="pelanggan" id="pelanggan">
                </div>

                <div class="mt-2">
                    <label class="form-label" for="">Alamat :</label>
                    <input class="form-control" type="text" name="alamat" id="alamat">
                </div>

                <div class="mt-2">
                    <label class="form-label" for="">Telp :</label>
                    <input class="form-control" type="tel" name="telp" id="telp">
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
                    <input class="form-control" type="email" name="email" id="email">
                </div>

                <div class="mt-2">
                    <label class="form-label" for="">Password :</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection