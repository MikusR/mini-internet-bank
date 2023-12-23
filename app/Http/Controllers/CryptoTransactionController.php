<?php

namespace App\Http\Controllers;

use App\Models\CryptoTransaction;
use App\Http\Requests\StoreCryptoTransactionRequest;
use App\Http\Requests\UpdateCryptoTransactionRequest;

class CryptoTransactionController extends Controller
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
    public function store(StoreCryptoTransactionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CryptoTransaction $cryptoTransaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CryptoTransaction $cryptoTransaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCryptoTransactionRequest $request, CryptoTransaction $cryptoTransaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CryptoTransaction $cryptoTransaction)
    {
        //
    }
}
