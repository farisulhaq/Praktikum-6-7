<?php

namespace App\Http\Controllers;

use App\Http\Requests\MahasiswaRequest;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('mahasiswa.about', [
            'title' => 'About',
        ]);
    }

    public function index()
    {
        return view('mahasiswa.index', [
            'mahasiswa' => Mahasiswa::all(),
            'title' => 'Daftar Mahasiswa'
        ]);
    }

    public function create()
    {
        return view('mahasiswa.create', [
            'mhs' => new Mahasiswa,
            'title' => 'Tambah Mahasiswa',
            'submit' => 'Simpan Data'
        ]);
    }

    public function store(MahasiswaRequest $request)
    {
        Mahasiswa::create($request->all());

        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', [
            'mhs' => $mahasiswa,
            'title' => 'Edit Mahasiswa',
            'submit' => 'Edit Data'
        ]);
    }

    public function update(MahasiswaRequest $request, Mahasiswa $mahasiswa)
    {
        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil diubah');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil dihapus');
    }
}
