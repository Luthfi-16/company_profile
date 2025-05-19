<?php
namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Dosen;
use App\Models\Fakultas;
use App\Models\Fasilitas;
use App\Models\Ukm;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel   = Artikel::all();
        $dosen     = Dosen::all();
        $fakultas  = Fakultas::all();
        $fasilitas = Fasilitas::all();
        $ukm       = Ukm::all();

        return view('welcome', compact('artikel', 'dosen', 'fakultas', 'fasilitas', 'ukm'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Fakultas(){
        $fakultas = Fakultas::all();
        return view('fakultas', compact('fakultas'));
    }

    public function detailFakultas($id)
    {
        $fakultas = Fakultas::findOrFail($id);
        return view(('fakultasd'), compact('fakultas'));

    }

    public function Artikel(){
        $artikel = Artikel::all();
        return view('artikel', compact('artikel'));
    }

    public function detailArtikel($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view(('artikeld'), compact('artikel'));

    }

    public function Dosen(){
        $dosen = Dosen::all();
        return view('dosen', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
