<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $myClass = Kelas::all();
        $this->data["classes"] = $myClass;

        return view('kelas.list', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelas.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Cara 1
        $dataBaru = new Kelas();
        $dataBaru->class_code = $request->kode_kelas;
        $dataBaru->class_name = $request->nama_kelas;
        $dataBaru->save();

        return redirect()->route('kelas.index');

        // Cara 2
        // kelas::create([
        //     'class_code' => $request->kode_kelas,
        //     'class_name' => $request->nama_kelas,
        // ]);

        // Cara 3 : inputan dan kolom sama persis
        // kelas::create($request->except('_token'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $this->data["data"] = Kelas::find($id);

        return view('kelas.detail', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}