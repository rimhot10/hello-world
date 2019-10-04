<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPengumuman;

use App\Pengumuman;
class PengumumanController extends Controller
{
    
    public function index(){
        $Pengumuman=Pengumuman::all();

        return view ('pengumuman.index',compact('Pengumuman'));
    }
    public function show($id){
        $Artikel=Pengumuman::find($id);
        return view ( 'pengumuman.show',compact('Pengumuman'));

    }
    public function create(){
       $Pengumuman=Pengumuman::pluck('judul','id');

       return view ( 'pengumuman.show',compact('Pengumuman'));
    }
    public function store(Request $request){
        $input=$request->all();
        Pengumuman::create($input);
        return redirect(route('pengumuman.index'));
    }
}
