<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'posted_at' => 'required|date',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk gambar
        ]);

        // Menyimpan gambar
        $imagePath = $request->file('image')->store('images', 'public');

        // Menyimpan data ke database
        DB::table('posts')->insert([
            'title' => $request->input('title'),
            'posted_at' => $request->input('posted_at'),
            'content' => $request->input('content'),
            'image_path' => $imagePath, // Simpan path gambar
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/')->with('success', 'Post created successfully!');
    }

}
