<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Package;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // Display a list of orders (Admin view)
    public function index()
{
    $orders = Order::with(['user', 'package'])->get();
    $pendingCount = $orders->where('status', 'pending')->count(); // Count pending orders

    return view('admin.accounts.admin_order', compact('orders', 'pendingCount'));
}

    // Edit a specific order (Admin view)
    public function edit($id)
    {
        $order = Order::with(['user', 'package'])->findOrFail($id);
        return view('admin.orders.edit', compact('order'));
    }

    // Update status order by admin (status update)
    public function updateStatus(Request $request, $id, $status)
    {
        $order = Order::findOrFail($id);
        $order->status = $status;
        $order->save();

        return redirect()->route('admin.orders.index')->with('message', 'Order status updated successfully.');
    }


    // Delete a specific order (Admin action)
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('admin.orders.index')->with('message', 'Order deleted successfully.');
    }

    // Bulk delete orders (Admin action)
    public function bulkDelete(Request $request)
    {
        $request->validate([
            'orders' => 'required|array',
            'orders.*' => 'exists:orders,id',
        ]);

        Order::whereIn('id', $request->orders)->delete();

        return redirect()->route('admin.orders.index')->with('message', 'Selected orders deleted successfully.');
    }

    // Show the form to place an order
    public function showForm($id)
    {
        $package = Package::findOrFail($id);
        return view('packages.form', compact('package'));
    }

    // Save a new order (User action)
    public function store(Request $request)
    {
        $order = new Order();
        $order->user_id = Auth::id();
        $order->package_id = $request->package_id;
        $order->location = $request->location;
        $order->description = $request->description;
        $order->status = 'pending';
        $order->save();

        return redirect()->route('booked.list')->with('message', 'Order created successfully and awaiting approval.');
    }

    // Display user-specific orders
    public function userOrders()
    {
        $orders = Order::where('user_id', Auth::id())->get();
        return view('packages.order', compact('orders'));
    }

    // Upload proof of payment (User action)
    public function uploadProof(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        if ($request->hasFile('proof')) {
            $fileName = time() . '_' . $request->file('proof')->getClientOriginalName();
            $request->file('proof')->move(public_path('uploads'), $fileName);
            $order->proof = $fileName;
            $order->status = 'payment_uploaded';
            $order->save();
        }

        return redirect()->route('user.orders')->with('message', 'Proof of payment uploaded successfully.');
    }

    
}
