<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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

        $route = Auth::user()->role === 'user' ? 'user.dashboard' : 'admin.dashboard';

        return redirect()->route($route)
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

        $route = Auth::user()->role === 'user' ? 'user.dashboard' : 'admin.dashboard';

        return redirect()->route($route)
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
