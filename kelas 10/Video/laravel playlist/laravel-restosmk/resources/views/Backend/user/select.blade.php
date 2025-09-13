@extends('Backend.back')
@section('admincontent')
    <div>
        <h1>Data User</h1>
    </div>
    <div class="mt-3 mb-1">
        <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah Data</a>
        @if (session()->has('pesan'))
        <p class="alert alert-danger">{{ session()->get('pesan') }}</p>
        @endif
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Ubah</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            @php
                $no = 1;
            @endphp
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->level }}</td>
                        <td>
                            <a 
                                class="btn btn-info" 
                                style="color: white"
                                href="{{ url('admin/user/'.$user->id.'/edit') }}"
                                >Ubah Password
                            </a>
                        </td>
                        <td>
                            <a 
                                class="btn btn-danger" 
                                href="{{ url('admin/user/'.$user->id) }}"
                                >Hapus
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection