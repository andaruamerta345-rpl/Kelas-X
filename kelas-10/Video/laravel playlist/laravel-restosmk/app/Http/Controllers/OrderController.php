<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::join('pelanggans','orders.idpelanggan','=','pelanggans.idpelanggan')
        ->select(['orders.*','pelanggans.*'])
        ->orderBy('status','ASC')
        ->paginate(3);
        return view('Backend.order.select',['orders'=>$orders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($idorder)
    {
        $order = Order::where('idorder',$idorder)->first();
        return view('Backend.order.update',['order'=>$order]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($idorder)
    {
        $orders = Order::join('order_details','orders.idorder','=','order_details.idorder')
        ->join('menus','order_details.idmenu','=','menus.idmenu')
        ->join('pelanggans','orders.idpelanggan','=','pelanggans.idpelanggan')
        ->where('orders.idorder',$idorder)
        ->get(['orders.*','order_details.*','menus.*','pelanggans.*']);
        return view('Backend.order.detail',['orders'=>$orders]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $idorder)
    {
        $data = $request -> validate([
            'bayar' => 'required',
        ]);
        $kembalis = Order::where('idorder',$idorder)->first();
        $kembali = $data['bayar'] - $kembalis->total;

        Order::where('idorder',$idorder)->update([
            'kembali' => $kembali,
            'status' => 1,
        ]);

        Order::where('idorder',$idorder)->update([
            'bayar' => $data['bayar'],
            'kembali' => $kembali,
            'status' => 1,
        ]);
        return redirect('admin/order');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
