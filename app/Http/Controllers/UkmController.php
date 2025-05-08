<?php
namespace App\Http\Controllers;

use App\Models\Ukm;
use Illuminate\Http\Request;
use Storage;

class UkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ukm = Ukm::all();
        return view('ukm.index', compact('ukm'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ukm.create');
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
            'nama_ukm' => 'required|unique:ukms',
            'desk'     => 'required',
            'foto'     => 'required|mimes:jpg,png,jpeg,webp,avif|max:9999',
        ]);

        $ukm           = new Ukm();
        $ukm->nama_ukm = $request->nama_ukm;
        $ukm->desk     = $request->desk;

        if ($request->hasFile('foto')) {
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/ukm', $name);
            $ukm->foto = $name;
        }

        $ukm->save();
        session()->flash('success', 'Data berhasil ditambahkan');
        return redirect()->route('ukm.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ukm = Ukm::findOrFail($id);
        return view('ukm.show', compact('ukm'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ukm = Ukm::findOrFail($id);
        return view('ukm.edit', compact('ukm'));

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
            'nama_ukm' => 'required',
            'desk'     => 'required',
            'foto'     => 'required|mimes:jpg,png,jpeg,webp,avif|max:9999',
        ]);

        $ukm           = Ukm::findOrFail($id);
        $ukm->nama_ukm = $request->nama_ukm;
        $ukm->desk     = $request->desk;

        if ($request->hasFile('foto')) {
            $ukm->deleteImage();
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/ukm', $name);
            $ukm->foto = $name;
        }

        $ukm->save();
        session()->flash('success', 'Data berhasil ditambahkan');
        return redirect()->route('ukm.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ukm = Ukm::findOrFail($id);
        $ukm->delete();
        return redirect()->route('ukm.index')->with('success', 'Data Berhasil Dihapus');

    }
}
