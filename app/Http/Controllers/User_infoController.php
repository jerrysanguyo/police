<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User_info;

class User_infoController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $rules = [
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'birthdate' => ['required', 'date'],
            'age' => ['required', 'integer'],
            'height' => ['required', 'integer'],
            'weight' => ['required', 'integer'],
            'hip' => ['required', 'integer'],
            'wrist' => ['required', 'integer'],
            'waist' => ['required', 'integer'],
            'bmi_result' => ['required', 'string'],
            'bmi_category' => ['required', 'string', 'in:under_weight,normal_weight,over_weight,Obese_1,Obese_2'],
        ];
    
        $validator = Validator::make($request->all(), $rules);
        // dd($validator);

        User_info::create([
            'user_id' => auth()->id(),
            'birthdate' => $request->birthdate,
            'age' => $request->age,
            'height' => $request->height,
            'weight' => $request->weight,
            'hip' => $request->hip,
            'wrist' => $request->wrist,
            'waist' => $request->waist,
            'bmi_result' => $request->bmi_result,
            'bmi_category' => $request->bmi_category,
        ]);
    
        return redirect()->route('user.dashboard')
                         ->with('success', 'User info submitted successfully.');
    }

    public function show(User_info $user_info)
    {
        //
    }

    public function edit(User_info $user_info)
    {
        //
    }

    public function update(Request $request, User_info $user_info)
    {
        $rules = [
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'birthdate' => ['required', 'date'],
            'age' => ['required', 'integer'],
            'height' => ['required', 'integer'],
            'weight' => ['required', 'integer'],
            'hip' => ['required', 'integer'],
            'wrist' => ['required', 'integer'],
            'waist' => ['required', 'integer'],
            'bmi_result' => ['required', 'string'],
            'bmi_category' => ['required', 'string', 'in:under_weight,normal_weight,over_weight,Obese_1,Obese_2'],
        ];
    
        $validator = Validator::make($request->all(), $rules);
        // dd($validator);

        $userInfo = User_info::where('user_id', auth()->id())->first();

        $userInfo->update([
            'birthdate' => $request->birthdate,
            'age' => $request->age,
            'height' => $request->height,
            'weight' => $request->weight,
            'hip' => $request->hip,
            'wrist' => $request->wrist,
            'waist' => $request->waist,
            'bmi_result' => $request->bmi_result,
            'bmi_category' => $request->bmi_category,
        ]);
    
        return redirect()->route('user.dashboard')
                         ->with('success', 'User info updated successfully.');
    }

    public function destroy(User_info $user_info)
    {
        //
    }
}
