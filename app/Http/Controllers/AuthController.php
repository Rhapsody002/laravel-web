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
        return view('login');
    }

    public function login(Request $request){
        $request->validate([
            'nama'      => 'required',
            'password'  => 'required|min:3|regex:/[A-Z]/'
        ],[
            'nama.required' => 'Nama tidak boleh kosong',
            'password.required' => 'Paswordnya mana?',
            'password.min' => 'Passwordnya minimal 3 karakter',
            'password.regex' => 'Password harus mengandung huruf kapital -_-'
        ]);

        if ($request-> nama == 'Violet' && $request-> password === 'HIDup jokowi'){
            return redirect()->route('home')->with([
            'nama' => $request->nama,
            'last_login' => now()->format('d M Y H:i:s')
        ]);

        }else{
            return back()->withErrors(['login' => 'Username atau password salah.']);
        }

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
