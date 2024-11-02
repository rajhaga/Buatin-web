<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $user = Auth::user();

        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:20',
            'location' => 'nullable|string|max:255',
            'password' => 'nullable|min:8|confirmed',
        ]);

        // Update data user
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->location = $request->location;

        if ($request->password) {
            $user->password = Hash::make($request->password);
        }


        return redirect()->route('home')->with('success', 'Profile updated successfully.');
    }

    public function edit()
    {
        $user = Auth::user();
        return view('auth.edit', compact('user')); // Pastikan view ini ada
    }

}
