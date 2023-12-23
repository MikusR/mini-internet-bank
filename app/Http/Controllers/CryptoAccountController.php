<?php

namespace App\Http\Controllers;

use App\Models\CryptoAccount;
use App\Http\Requests\StoreCryptoAccountRequest;
use App\Http\Requests\UpdateCryptoAccountRequest;

class CryptoAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreCryptoAccountRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CryptoAccount $cryptoAccount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CryptoAccount $cryptoAccount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCryptoAccountRequest $request, CryptoAccount $cryptoAccount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CryptoAccount $cryptoAccount)
    {
        //
    }
}
