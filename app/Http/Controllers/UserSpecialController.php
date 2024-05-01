<?php

namespace App\Http\Controllers;

use App\Models\User_special_training;
use App\Http\Requests\StoreUser_special_trainingRequest;
use App\Http\Requests\UpdateUser_special_trainingRequest;

class UserSpecialController extends Controller
{
    public function index()
    {
        //
    }
    
    public function create()
    {
        //
    }
    
    public function store(StoreUser_special_trainingRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = auth()->id();

        User_special_training::create($validated);

        return redirect()->route('user.dashboard')
                        ->with([
                            'success' => 'Special training submitted successfullly.',
                            'activeTab' => 'special',
                        ]);
    }
    
    public function show(User_special_training $user_special_training)
    {
        //
    }
    
    public function edit(User_special_training $user_special_training)
    {
        //
    }
    
    public function update(UpdateUser_special_trainingRequest $request, User_special_training $user_special)
    {
        $validated = $request->validated();
        $validated['user_id'] = auth()->id();

        $user_special->update($validated);

        return redirect()->route('user.dashboard')
                        ->with([
                            'success' => 'Special training updated successfullly.',
                            'activeTab' => 'special',
                        ]);
    }
    
    public function destroy(User_special_training $user_special_training)
    {
        //
    }
}
