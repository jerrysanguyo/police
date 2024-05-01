<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_info;
use App\Models\User_service;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function userIndex()
    {
        $user_id = auth()->id();
        $userInfo = User_info::where('user_id', $user_id)->first();
        $hasUserInfo = $userInfo !== null;
        $userService = User_service::where('user_id', $user_id)->first();
        $hasUserService = $userService !== null;
    
        return view('User.index', compact(
            'hasUserInfo', 
            'userInfo',
            'hasUserService',
            'userService',
        ));
    }

    // public function userIndex()
    // {
    //     return view('User.index');
    // }
}
