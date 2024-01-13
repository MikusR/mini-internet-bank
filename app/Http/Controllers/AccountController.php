<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Http\Requests\StoreAccountRequest;
use App\Http\Requests\UpdateAccountRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('accounts.index', [
            'accounts' => Account::all()->where('user_id', auth()->id()),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('accounts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAccountRequest $request): RedirectResponse
    {
        $account = (new Account())->fill($request->all());
        $account->user_id = auth()->id();
        $account->save();
        return redirect()->route('accounts.index')->with('success', 'Account created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Account $account)
    {
        return view('accounts.show', [
            'account' => $account,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAccountRequest $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Account $account)
    {
        //
    }
}
