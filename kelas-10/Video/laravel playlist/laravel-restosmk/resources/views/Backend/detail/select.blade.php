@extends('Backend.back')
@section('admincontent')
    <div>
        <h1>Order Detail</h1>
    </div>
    <form action="{{ url('admin/orderdetail/create') }}" method="GET">
        <div class="row mt-3 mb-1">

            <div class="col-4 mt-2">
                <label class="form-label" for="">Tanggal Mulai :</label>
                <input 
                    class="form-control" 
                    type="date" 
                    name="tglmulai" 
                    id="tglmulai"
                    >
            </div>

            <div class=" col-4 mt-2">
                <label class="form-label" for="">Tanggal Akhir :</label>
                <input 
                    class="form-control" 
                    type="date" 
                    name="tglakhir" 
                    id="tglakhir"
                    >
            </div>

            <div class="col-4 mt-auto">
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>

        </div>
    </form>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Pelanggan</th>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                </tr>
            </thead>
            @php
                $no = 1;
            @endphp
            <tbody>
                @foreach ($details as $detail)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $detail->tglorder }}</td>
                        <td>{{ $detail->pelanggan }}</td>
                        <td>{{ $detail->menu }}</td>
                        <td>{{ $detail->harga }}</td>
                        <td>{{ $detail->jumlah }}</td>
                        <td>{{ $detail->total }}</td>
                   </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justtify-content-center mt-5">
        {{ $details->withQueryString()->links() }}
    </div>
@endsection 