<?php

namespace App\Http\Controllers;

use App\Models\User_training;
use App\Http\Requests\StoreUser_trainingRequest;
use App\Http\Requests\UpdateUser_trainingRequest;

class UserTrainingController extends Controller
{
    public function index()
    {
        //
    }
    
    public function create()
    {
        //
    }
    
    public function store(StoreUser_trainingRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = auth()->id();

        User_training::create($validated);

        return redirect()->route('user.dashboard')
                        ->with([
                            'success'   => 'Training information submitted successfully.',
                            'activeTab' => 'special',
                        ]);
    }
    
    public function show(User_training $user_training)
    {
        //
    }
    
    public function edit(User_training $user_training)
    {
        //
    }
    
    public function update(UpdateUser_trainingRequest $request, User_training $user_training)
    {
        $validated = $request->validated();
        $validated['user_id'] = auth()->id();

        $user_training->update($validated);

        return redirect()->route('user.dashboard')
                        ->with([
                            'success' => 'Training information updated successfully.',
                            'activeTab' => 'training',
                        ]);
    }
    
    public function destroy(User_training $user_training)
    {
        //
    }
}
