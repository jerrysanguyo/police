<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User_service;
use App\Http\Requests\StoreUser_serviceRequest;
use App\Http\Requests\UpdateUser_serviceRequest;

class UserServiceController extends Controller
{
    public function index()
    {
        //
    }
    
    public function create()
    {
        //
    }

    public function store(StoreUser_serviceRequest $request)
    {
        $validated = $request->validated();   
        $validated['user_id'] = auth()->id();
    
        User_service::create($validated);

        $route = Auth::user()->role === 'user' ? 'user.dashboard' : 'admin.dashboard';

        return redirect()->route($route)
                         ->with([
                            'success' => 'Service information submitted successfully.',
                            'activeTab' => 'training'
                        ]);
    }
    
    public function show(User_service $user_service)
    {
        //
    }
    
    public function edit(User_service $user_service)
    {
        //
    }
    
    public function update(UpdateUser_serviceRequest $request, User_service $user_service)
    {
        $validated = $request->validated();   
        $validated['user_id'] = auth()->id();
    
        $user_service->update($validated);

        $route = Auth::user()->role === 'user' ? 'user.dashboard' : 'admin.dashboard';
    
        return redirect()->route($route)
                         ->with([
                            'success' => 'Service information updated successfully.',
                            'activeTab' => 'service'
                        ]);
    }
    
    public function destroy(User_service $user_service)
    {
        //
    }
}
