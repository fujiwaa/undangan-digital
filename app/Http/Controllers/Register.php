<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Customer;
use Illuminate\Http\Request;

class Register extends Controller
{
    public function index()
    {
        return view('register/customer');
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
        $request->validate([
            'nama' => 'required|min:3',
            'email' => 'required|min:3',
            'password' => 'required|min:8',
            'nomorhp' => 'required|min:10|max:15',
        ]);

        $client = new Client;
        $client->nama = $request->nama;
        $client->email = $request->email;
        $client->password = $request->password;
        $client->nomorhp = $request->nomorhp;
        $client->save();

        $customer = new Customer;
        $customer->nama = $request->nama;
        $customer->email = $request->email;
        $customer->password = $request->password;
        $customer->nomorhp = $request->nomorhp;
        $customer->save();

        return redirect('login')->with('success', 'Anda berhasil mendaftar.');
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
