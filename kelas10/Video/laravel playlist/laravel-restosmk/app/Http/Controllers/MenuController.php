<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Models\Kategori;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoris = Kategori::all();

        $menus = Menu::join(
            'kategoris','menus.idkategori','=','kategoris.idkategori')->select(['menus.*','kategoris.*']
        )->paginate(3);
        return view('Backend.menu.select',['menus'=>$menus,'kategoris'=>$kategoris]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Kategori::all();
        return view('Backend.menu.insert',['kategoris'=>$kategoris]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data  = $request -> validate([
            'gambar' => 'required|max:2048',
            'menu' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
        ]);
        $id = $request->idkategori;
        $namagambar = $request->file('gambar')->getClientOriginalName();
        $request->gambar->move(public_path('gambar'),$namagambar);

        Menu::create([
            'idkategori' => $id,
            'menu' => $data['menu'],
            'deskripsi' => $data['deskripsi'],
            'harga' => $data['harga'],
            'gambar' => $namagambar,
        ]);

        return redirect('admin/menu');
    }

    /**
     * Display the specified resource.
     */
    public function show($idmenu)
    {
       Menu::where('idmenu','=',$idmenu)->delete();
       return redirect('admin/menu');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($idmenu)
    {
        $kategoris = Kategori::all();
        $menu = Menu::where('idmenu',$idmenu)->first();
        return view('Backend.menu.update',['menu'=>$menu,'kategoris'=>$kategoris]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $idmenu)
    {
        if (isset($request->gambar)) {
            $namagambar = $request->file('gambar')->getClientOriginalName();
            $data  = $request -> validate([
                'menu' => 'required',
                'harga' => 'required',
                'deskripsi' => 'required',
                'gambar' => 'required|max:2048',
            ]);
            
            Menu::where('idmenu',$idmenu)->update([
                'menu' => $data['menu'],
                'harga' => $data['harga'],
                'deskripsi' => $data['deskripsi'],
                'gambar' => $namagambar
            ]);
            $request->gambar->move(public_path('gambar'),$namagambar);

        } else {
            $data  = $request -> validate([
                'menu' => 'required',
                'harga' => 'required',
                'deskripsi' => 'required',
            ]);

            Menu::where('idmenu',$idmenu)->update([
                'menu' => $data['menu'],
                'harga' => $data['harga'],
                'deskripsi' => $data['deskripsi'],
            ]);
        }
        return redirect('admin/menu');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
    }

    public function select(Request $request)
    {
       $id = $request -> idkategori;
       $kategoris = Kategori::all();

        $menus = Menu::join(
            'kategoris','menus.idkategori','=','kategoris.idkategori')->select(['menus.*','kategoris.*']
        )
        ->where('menus.idkategori',$id)
        ->paginate(2);
        return view('Backend.menu.select',['menus'=>$menus,'kategoris'=>$kategoris]);
    }
}
