<?php
namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\FotoFasilitas;
use Illuminate\Http\Request;
use Storage;

class FotofasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fotofasilitas = Fotofasilitas::orderBy('id', 'desc')->get();
        return view('admin/fotofasilitas.index', compact('fotofasilitas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fasilitas = Fasilitas::all();
        return view('admin/fotofasilitas.create', compact('fasilitas'));

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
            'id_fasilitas' => 'required|',
            'image'        => 'required|mimes:jpg,png,jpeg,webp,avif|max:9999',
        ]);

        $fotofasilitas               = new Fotofasilitas;
        $fotofasilitas->id_fasilitas = $request->id_fasilitas;

        if ($request->hasFile('image')) {
            $img  = $request->file('image');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/foto_fasilitas', $name);
            $fotofasilitas->image = $name;
        }

        $fotofasilitas->save();

        session()->flash('success', 'Data berhasil ditambahkan');

        return redirect()->route('fotofasilitas.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fotofasilitas = Fotofasilitas::findOrFail($id);
        $fasilitas = Fasilitas::all();
        return view('admin/fotofasilitas.show', compact('fotofasilitas', 'fasilitas'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fotofasilitas = Fotofasilitas::findOrFail($id);
        $fasilitas     = Fasilitas::all();
        return view('admin/fotofasilitas.edit', compact('fotofasilitas', 'fasilitas'));

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
            'id_fasilitas' => 'required|',
            'image'        => 'nullable|mimes:jpg,png,jpeg,webp,avif|max:9999',
        ]);

        $fotofasilitas               = Fotofasilitas::findOrFail($id);
        $fotofasilitas->id_fasilitas = $request->id_fasilitas;

        if ($request->hasFile('image')) {
            $fotofasilitas->deleteImage();
            $img  = $request->file('image');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/foto_fasilitas', $name);
            $fotofasilitas->image = $name;
        }

        $fotofasilitas->save();

        session()->flash('success', 'Data berhasil ditambahkan');

        return redirect()->route('fotofasilitas.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fotofasilitas = Fotofasilitas::findOrFail($id);
        $fotofasilitas->delete();
        return redirect()->route('fotofasilitas.index')->with('success', 'Data berhasil Dihapus');

    }
}
