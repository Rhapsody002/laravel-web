<?php

namespace App\Http\controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        return "Menampilkan data matakuliah";
    }

    // Show the form for creating a new resource
    public function create()
    {
        return "Menampilkan form untuk membuat matakuliah baru";
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        return "Menyimpan data matakuliah baru";
    }

    // Display the specified resource
    public function show($kode = null)
    {
        if ($kode) {
            return "Anda mengakses matakuliah " . $kode;
        } else {
            return "Masukkan kode matakuliah!";
        }
    }

    // Show the form for editing the specified resource
    public function edit(string $id)
    {
        return "Menampilkan form edit matakuliah dengan kode matakuliah:  " . $id;
    }

    // Update the specified resource in storage
    public function update(Request $request, string $id)
    {
        return "Mengupdate data matakuliah dengan kode matakuliah: " . $id;
    }

    // Remove the specified resource from storage
    public function destroy(string $id)
    {
        return "Menghapus data matakuliah dengan kode: " . $id;
    }
}