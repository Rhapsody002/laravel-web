<?php

namespace App\Http\Controllers;

use App\Http\Controllers\request;
use function PHPUnit\Framework\returnArgument;

class HomeController extends Controller
{
    public function index()
    {
        // Cara 1
        $data ['username']          = 'Heroku';
        $data ['last_login']        = date('Y-m-d H:i:s');
        $data ['list_pendidikan']   = ['SD','SMP','SMA','S1','S2','S3'];
        return view('home', $data);

        // Cara 2
    //     $data = [
    //         'username'          => 'Heroku',
    //         'last_login'        => date('Y-m-d H:i:s'),
    //         'list_pendidikan'   => ['SD','SMP','SMA','S1','S2','S3']
    //     ];
    //     return view('home', $data);

        //cara 3
        // $username           = 'Heroku';
        // $last_login         = date('Y-m-d H:i:s');
        // $list_pendidikan    = ['SD','SMP','SMA','S1','S2','S3'];
        // return view('home', compact('username', 'last_login', 'pendidikan'));
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HomeController $request)
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
    public function update(HomeController $request, string $id)
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
