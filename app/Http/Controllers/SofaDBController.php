<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SofaDBController extends Controller
{
    public function index()
    {
        $sofa = DB::table('sofa')->paginate(10); //10 data per halaman

        return view('index_sofa', ['sofa' => $sofa]); // mengirim data ke view index_sofa
    }

    public function tambah()
    {
        return view('tambah_sofa');
    }

    public function store(Request $request)
    {
        DB::table('sofa')->insert([
            'merksofa' => $request->merksofa,
            'hargasofa' => $request->hargasofa,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        return redirect('/sofa');
    }

    public function edit($id)
    {
        $sofa = DB::table('sofa')->where('sofa_id', $id)->first();
        return view('edit_sofa', ['sofa' => $sofa]);
    }

    public function update(Request $request)
    {
        DB::table('sofa')->where('sofa_id', $request->id)->update([
            'merksofa' => $request->merksofa,
            'hargasofa' => $request->hargasofa,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        return redirect('/sofa');
    }

    public function hapus($id)
    {
        DB::table('sofa')->where('sofa_id', $id)->delete();
        return redirect('/sofa');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $sofa = DB::table('sofa')
            ->where('merksofa', 'like', "%" . $cari . "%")
            ->paginate();

        return view('index_sofa', ['sofa' => $sofa]);
    }
}
