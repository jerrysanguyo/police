<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User_info;
use App\Http\Requests\StoreUser_InfoRequest;
use App\Http\Requests\UpdateUser_InfoRequest;

class UserInfoController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(StoreUser_InfoRequest $request) 
    {
        $validated = $request->validated();
        $validated['user_id'] = auth()->id();

        User_info::create($validated);

        return redirect()->route('user.dashboard')
                        ->with([
                            'success' => 'Personal information submitted successfully.',
                            'activeTab' => 'service',
                        ]);
    }

    public function show(User_info $user_info)
    {
        //
    }

    public function edit(User_info $user_info)
    {
        //
    }

    public function update(UpdateUser_InfoRequest $request, User_info $user_info)
    {
        $validated = $request->validated();
        $validated['user_id'] = auth()->id();

        $user_info->update($validated);

        return redirect()->route('user.dashboard')
                        ->with([
                            'success' => 'Personal information updated successfully',
                            'activeTab' => 'personal',
                        ]);
    }

    public function destroy(User_info $user_info)
    {
        //
    }
}
