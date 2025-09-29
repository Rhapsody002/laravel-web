<?php

namespace App\Http\controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //Display a listing of the resource

    public function index()
    {
        //
    }

    //Show the form for creating a new resource
    public function create()
    {
        //
    }

    //Store a newly created resource in storage
    public function Store(Request $request)
    {
        //
    }

    //Display the specified resource
    public function Show(string $param1)
    {
        // return "Data Mahasiswa: " .$param1;

        if($param1 == 'detail'){
            return view('halaman-mahasiswa-detail');
        }else if($param1 == 'profil'){
            return view("Halaman-mahasiswa-profil");
        }
    }

    //Show the form for editing the specified resource
    public function edit(string $id)
    {
        //
    }

    //Update the specified resource in storage
    public function update(request $request, string $id)
    {
        //
    }

    //Remove the specified resource from storage
    public function destroy(string $id)
    {
        //
    }
}
