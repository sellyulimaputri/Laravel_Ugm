<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    //get buku
    public function index(){
        $data_buku = Buku::all();
        $no = 0;
        return view('buku.index',compact('data_buku','no'));
    }
    //create buku
    public function create(Request $request){
        return view('buku.create');
    }

    //store buku
    public function store(Request $request){
        $buku=new Buku();
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->save();
        return redirect()->route('buku.index');
    }

    //delete buku
    public function destroy($id){
        $buku=Buku::find($id);
        $buku->delete();
        return redirect()->route('buku.index');
    }
    //edit buku
    public function edit($id){
        $buku=Buku::find($id);
        return view('buku.edit',['buku'=>$buku]);
    }

    //update buku
    public function update(Request $request, $id){
        $buku=Buku::find($id);
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->save();
        return redirect()->route('buku.index');
    }
}
