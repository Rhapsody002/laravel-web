<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'Nama'              => 'Violet',
            'gmail'             => 'violet@gmail.com',
            'password'          => 'violet2006'
            ];
            return view('home', $data);
    }

    public function login(Request $request){
        $request->validate([
            'nama'      => 'required|max:10',
		    'email'     => ['required','email'],
            'password'  => 'required|max:20'
        ],[
            'nama.required' => 'Nama tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'password.requiredd' => 'paswordnya mana?'
        ]);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
