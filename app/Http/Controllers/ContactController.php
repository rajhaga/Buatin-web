<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mime\Part\TextPart;
use Symfony\Component\Mime\Part\HtmlPart;

class ContactController extends Controller
{
    // Menampilkan form kontak
    public function showContactForm()
    {
        return view('contact'); // Sesuaikan nama view jika berbeda
    }

    // Menangani pengiriman form kontak
    public function submitContactForm(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'Name' => 'required|string|max:255',
            'Email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Kirim email dengan format HTML dan Text sebagai fallback
        Mail::send([], [], function ($message) use ($request) {
            $message->to('rajsee') // Ganti dengan alamat email tujuan
                    ->subject('Pesan Baru dari Kontak')
                    ->html("
                        <h1>Pesan Baru dari Kontak</h1>
                        <p><strong>Nama:</strong> {$request->Name}</p>
                        <p><strong>Email:</strong> {$request->Email}</p>
                        <p><strong>Pesan:</strong><br>{$request->message}</p>
                    ")
                    ->text("
                        Pesan Baru dari Kontak
                        Nama: {$request->Name}
                        Email: {$request->Email}
                        Pesan: {$request->message}
                    ");
        });
        
        // Redirect dengan pesan sukses
        return redirect()->route('contact.show')->with('success', 'Pesan Anda berhasil dikirim!');
    }
}
