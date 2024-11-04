<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Order;


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

        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $account->id,
            'phone' => 'nullable|string|max:20',
            'password' => 'nullable|string|min:8',
            'role' => 'required|in:user,admin', // Validasi role
        ]);

        // Format nomor telepon untuk diawali dengan +62 jika tidak ada
        $phone = $request->phone;
        if ($phone && !str_starts_with($phone, '+62')) {
            $phone = '+62' . $phone;
        }

        // Update data user
        $account->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $account->password,
            'role' => $request->role,
            'phone' => $phone, // Menggunakan $phone yang sudah diformat
            'location' => $request->location
        ]);

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
    public function booked()
    {
        return view('admin.accounts.profile');
    }

    public function bulkAction(Request $request)
    {
        $action = $request->input('action');
        $orderIds = $request->input('orders');

        if ($action && $orderIds) {
            $status = $action === 'approve' ? 'accepted' : 'rejected';
            Order::whereIn('id', $orderIds)->update(['status' => $status]);

            return redirect()->route('admin.orders')->with('message', 'Selected orders have been ' . $status . 'ed.');
        }

        return redirect()->route('admin.orders')->with('error', 'No orders selected or action specified.');
    }

    public function updateStatus($id, $status)
{
    $order = Order::findOrFail($id);
    $order->status = $status;
    $order->save();

    return redirect()->route('admin.orders')->with('message', 'Order status has been updated.');
}


}
