<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\User_info;
use App\Models\User_service;
use App\Models\User_training;
use App\Models\User_special_training;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\DataTables\AccountDataTable;

class AccountController extends Controller
{
    public function index(AccountDataTable $dataTable)
    {
        $listOfAccount = User::getAllUser();

        return $dataTable->render('Account.index', compact(
            'listOfAccount',
            'dataTable'
        ));
    }
    
    public function create()
    {
        //
    }
    
    public function store(StoreUserRequest $request)
    {
        //
    }
    
    public function show(User $account)
    {
        $account->load([
            'userInfo', 
            'userService', 
            'userTraining', 
            'userSpecial'
        ]);
        return view('Account.details', compact(
            'account',
        ));
    }
    
    public function edit(User $account)
    {
        return view('Account.update', compact(
            'account'
        ));
    }
    
    public function update(UpdateUserRequest $request, User $account)
    {
        $validated = $request->validated();
        $account->update($validated);

        return redirect()->route('admin.accounts.edit', ['account' => $account])
                        ->with('success', 'Account updated successfully.');
    }
    
    public function destroy(User $user)
    {
        //
    }
}
