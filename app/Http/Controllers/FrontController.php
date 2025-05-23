<?php
namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Dosen;
use App\Models\Fakultas;
use App\Models\Fasilitas;
use App\Models\FotoFasilitas;
use App\Models\Prestasi;
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
        $dosen     = Dosen::take(4)->get();
        $fakultas  = Fakultas::all();
        $fasilitas = Fasilitas::orderBy('nama_fasilitas', 'asc')->take(3)->get();
        $prestasi  = Prestasi::take(3)->get();

        return view('welcome', compact('artikel', 'dosen', 'fakultas', 'fasilitas', 'prestasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Fakultas()
    {
        $fakultas = Fakultas::all();
        return view('fakultas', compact('fakultas'));
    }

    public function detailFakultas($id)
    {
        $fakultas = Fakultas::findOrFail($id);
        return view(('fakultasd'), compact('fakultas'));

    }

    public function Artikel()
    {
        $artikel = Artikel::all();
        return view('artikel', compact('artikel'));
    }

    public function detailArtikel($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view(('artikeld'), compact('artikel'));

    }

    public function Dosen()
    {
        $dosen = Dosen::all();
        return view('dosen', compact('dosen'));
    }

    public function Fasilitas()
    {
        $fasilitas = Fasilitas::orderBy('nama_fasilitas', 'asc')->get();
        return view('fasilitas', compact('fasilitas'));
    }

    public function detailFasilitas($id)
    {
        $fasilitas     = Fasilitas::findOrFail($id);
        $fotofasilitas = FotoFasilitas::where('id_fasilitas', $fasilitas->id)->get();
        return view(('fasilitasd'), compact('fasilitas', 'fotofasilitas'));

    }

    public function Ukm()
    {
        $ukm = Ukm::all();
        return view('ukm', compact('ukm'));
    }

    public function detailUkm($id)
    {
        $ukm = Ukm::findOrFail($id);
        return view(('ukmd'), compact('ukm'));

    }

    public function Prestasi()
    {
        $prestasi = Prestasi::all();
        return view('prestasi', compact('prestasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
