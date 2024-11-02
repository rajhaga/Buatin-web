<?php

namespace App\Http\Controllers;

use App\Models\User;  // Import the User model for registration
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;


class Authentication extends Controller
{
    // Handle user login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');  // Redirect to home after login
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public Function showLoginForm(){
        return view('auth.login');  

    }
    // Show registration form
    public function showRegisterForm()
    {
        return view('auth.register');  // Make sure you have a view for the registration form
    }

    // Handle user registration
    public function register(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = $this->create($request->all());

        Auth::login($user);  // Log the user in after registration

        return redirect('/');
    }

    // Validation for registration data
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],  // 'confirmed' means password_confirmation field must match
        ]);
    }

    // Create a new user
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'user', // Set role default sebagai 'user'
        ]);
    }

    public function showAdminTable()
    {
        if (Auth::check()) {
            return view('admin.tableadmin');
        } else {
            return redirect('login');
        }
    }

    public function updateRole(Request $request, User $user)
    {
        $request->validate([
            'role' => 'required|in:user,admin', // Validasi hanya menerima user atau admin
        ]);

        $user->role = $request->role;
        $user->save();

        return redirect()->route('admin.users')->with('success', 'Role pengguna berhasil diubah.');
    }

}
