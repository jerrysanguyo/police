<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected function redirectTo()
    {
        if (auth()->user()->role == 'admin') {
            return '/admin/dashboard';
        } else if (auth()->user()->role == 'user') {
            return '/user/dashboard';
        } else if (auth()->user()->role == 'superadmin') {
            return '/superadmin/dashboard';
        }
    }
    
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    protected function validator(array $data)
    {
        // dd($data);
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'mobile_number' => ['nullable', 'string', 'unique:users'],
        ]);
    }
    
    protected function create(array $data)
    {
        // dd($data);
        
        $user = User::create([
            'first_name' => $data['first_name'],
            'middle_name' => $data['middle_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'mobile_number' => $data['mobile_number'],
            'password' => Hash::make($data['password']),
            'role' => 'user',
        ]);
    
        return $user;
    }
}
