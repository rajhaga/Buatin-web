<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Show all accounts
    public function index()
    {
        $accounts = User::all();
        return view('admin.accounts.index', compact('accounts'));
    }

    // Show form to create a new account
    public function create()
    {
        return view('admin.accounts.create');
    }

    // Store a new account
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'role' => 'required|in:user,admin', // Validasi role
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('admin.accounts.index')->with('success', 'Account created successfully.');
    }

    // Show form to edit an account
    public function edit($id)
    {
        $account = User::findOrFail($id);
        return view('admin.accounts.edit', compact('account'));
    }

    // Update an account
    public function update(Request $request, $id)
    {
        $account = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $account->id,
            'password' => 'nullable|string|min:8',
            'role' => 'required|in:user,admin', // Validasi role
        ]);

        $account->name = $request->name;
        $account->email = $request->email;
        $account->role = $request->role; // Perbarui kolom role

        $account->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $account->password,
            'role' => $request->role,
        ]);

        $account->save(); // Simpan perubahan

        return redirect()->route('admin.accounts.index')->with('success', 'Account updated successfully.');
    }

    // Delete an account
    public function destroy($id)
    {
        $account = User::findOrFail($id);
        $account->delete();

        return redirect()->route('admin.accounts.index')->with('success', 'Account deleted successfully.');
    }

    public function profile()
    {
        return view('admin.accounts.profile');
    }
}
