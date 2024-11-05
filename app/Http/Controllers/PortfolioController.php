<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use Illuminate\Support\Facades\File;
use Exception;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('portfolio.index', compact('portfolios'));
    }

    public function frontEndIndex()
    {
        $portfolios = Portfolio::all();
        return view('index', compact('portfolios')); // 'index' is your front-end view (homepage)
    }

    public function frontEndIport()
    {
        $portfolios = Portfolio::all();
        return view('port', compact('portfolios')); // 'index' is your front-end view (homepage)
    }

    public function create()
    {
        return view('portfolio.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'date' => 'required|date', // Validasi untuk tanggal
            'image' => 'nullable|image|max:2048', // Gambar bersifat opsional
            'video' => 'nullable|file|mimes:mp4,avi|max:20480', // Validasi untuk video
            'pdf' => 'nullable|file|mimes:pdf|max:2048', // PDF bersifat opsional
            'video_url' => 'nullable|url', // Validasi untuk URL video
        ]);

        // Menangani upload gambar
        $imagePath = $request->hasFile('image') ? $request->file('image')->store('portfolio/images', 'public') : null;

        // Menangani upload video
        $videoPath = $request->hasFile('video') ? $request->file('video')->store('portfolio/videos', 'public') : null;

        // Menangani upload PDF
        $pdfPath = $request->hasFile('pdf') ? $request->file('pdf')->store('portfolio/pdfs', 'public') : null;

        // Membuat entri portfolio baru
        Portfolio::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'category' => $request->category,
            'date' => $request->date, // Menyimpan tanggal
            'image' => $imagePath, // Menyimpan path gambar jika ada
            'video' => $videoPath, // Menyimpan path video jika ada
            'pdf' => $pdfPath, // Menyimpan path PDF jika ada
            'video_url' => $request->video_url, // Menyimpan URL video
        ]);

        return redirect()->route('portfolio.index')->with('success', 'Portfolio item added successfully.');
    }

    public function edit(Portfolio $portfolio)
    {
        return view('portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        // Validate incoming request data
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'category' => 'required',
            'image' => 'image|nullable',
            'video_url' => 'nullable|url',
            'pdf' => 'nullable|mimes:pdf|max:2048',
            'date' => 'nullable|date',
        ]);

        // Update the title, subtitle, category, date, and video URL
        $portfolio->update($request->only(['title', 'subtitle', 'category', 'date', 'video_url']));

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('portfolio/images', 'public');
            $portfolio->update(['image' => $imagePath]);
        }

        // Handle PDF file upload
        if ($request->hasFile('pdf')) {
            $pdfPath = $request->file('pdf')->store('portfolio/pdfs', 'public');
            $portfolio->update(['pdf' => $pdfPath]);
        }

        return redirect()->route('portfolio.index')->with('success', 'Portfolio item updated successfully');
    }

    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return redirect()->route('portfolio.index')->with('success', 'Portfolio item deleted successfully');
    }
}
