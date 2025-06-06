<?php
namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use Storage;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestasi = Prestasi::orderBy('id', 'desc')->get();
        return view('admin/prestasi.index', compact('prestasi'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/prestasi.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_prestasi'  => 'required',
            'desk'           => 'required',
            'foto'           => 'required|mimes:jpg,png,jpeg,webp,avif|max:9999',
        ]);

        $prestasi                 = new Prestasi();
        $prestasi->nama_prestasi  = $request->nama_prestasi;
        $prestasi->desk           = $request->desk;

        if ($request->hasFile('foto')) {
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/prestasi', $name);
            $prestasi->foto = $name;
        }

        $prestasi->save();
        session()->flash('success', 'Data berhasil ditambahkan');
        return redirect()->route('prestasi.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('admin/restasi.show', compact('prestasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('admin/prestasi.edit', compact('prestasi'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_prestasi'  => 'required',
            'desk'           => 'required',
            'foto'           => 'nullable|mimes:jpg,png,jpeg,webp,avif|max:9999',
        ]);

        $prestasi                 = Prestasi::findOrFail($id);
        $prestasi->nama_prestasi  = $request->nama_prestasi;
        $prestasi->desk           = $request->desk;

        if ($request->hasFile('foto')) {
            $prestasi->deleteImage();
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/prestasi', $name);
            $prestasi->foto = $name;
        }

        $prestasi->save();
        session()->flash('success', 'Data berhasil ditambahkan');
        return redirect()->route('prestasi.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        $prestasi->delete();
        return redirect()->route('prestasi.index')->with('success', 'Data Berhasil Dihapus');

    }
}
