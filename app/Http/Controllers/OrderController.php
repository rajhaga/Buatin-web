<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Package;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // Simpan order baru
    public function store(Request $request)
    {
        $order = new Order();
        $order->user_id = Auth::id();
        $order->package_id = $request->package_id;
        $order->location = $request->location;
        $order->description = $request->description;
        $order->status = 'pending'; // Order awal diset ke 'pending'
        $order->save();

        return redirect()->route('admin.accounts.profile')->with('message', 'Order berhasil dibuat dan sedang menunggu persetujuan.');
    }

    // Update status order oleh admin
    public function updateStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->status = $request->status;
        $order->save();

        return redirect()->route('admin.orders')->with('message', 'Status order berhasil diperbarui.');
    }

    // Upload bukti pembayaran
    public function uploadProof(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        if ($request->hasFile('proof')) {
            $fileName = time() . '_' . $request->file('proof')->getClientOriginalName();
            $request->file('proof')->move(public_path('uploads'), $fileName);
            $order->proof = $fileName;
            $order->status = 'payment_uploaded'; // Status berubah setelah upload bukti
            $order->save();
        }

        return redirect()->route('admin.accounts.profile')->with('message', 'Bukti pembayaran berhasil diunggah.');
    }

    public function showForm($id)
    {
        $package = Package::findOrFail($id);
        return view('packages.form', compact('package'));
    }

}
