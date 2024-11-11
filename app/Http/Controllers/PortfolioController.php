<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use Illuminate\Support\Facades\File;
use Exception;

class PortfolioController extends Controller
{
    public function show(Portfolio $portfolio)
    {
        return view('portfolio.show', compact('portfolio'));
    }

    public function index()
    {
        $portfolios = Portfolio::all();
        return view('portfolio.index', compact('portfolios'));
    }

    public function frontEndIndex()
    {
        $portfolios = Portfolio::all();
        return view('index', compact('portfolios'));
    }

    public function frontEndIport()
    {
        $portfolios = Portfolio::orderBy('date', 'desc')->get();
        $leftColumn = $portfolios->take(ceil($portfolios->count() / 2));
        $rightColumn = $portfolios->skip(ceil($portfolios->count() / 2));

        return view('port', compact('leftColumn', 'rightColumn'));
    }

    public function create()
    {
        return view('portfolio.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'klien' => 'required|string|max:255', // Changed to 'klien'
            'category' => 'required|string|max:255',
            'date' => 'required|date',
            'description' => 'nullable|string', // Validation for description
            'image' => 'nullable|image|max:2048',
            'video' => 'nullable|file|mimes:mp4,avi|max:20480',
            'pdf' => 'nullable|file|mimes:pdf|max:2048',
            'video_url' => 'nullable|url',
        ]);

        $imagePath = $request->hasFile('image') ? $request->file('image')->store('portfolio/images', 'public') : null;
        $videoPath = $request->hasFile('video') ? $request->file('video')->store('portfolio/videos', 'public') : null;
        $pdfPath = $request->hasFile('pdf') ? $request->file('pdf')->store('portfolio/pdfs', 'public') : null;

        Portfolio::create([
            'title' => $request->title,
            'klien' => $request->klien, // Changed to 'klien'
            'category' => $request->category,
            'date' => $request->date,
            'description' => $request->description, // Save description
            'image' => $imagePath,
            'video' => $videoPath,
            'pdf' => $pdfPath,
            'video_url' => $request->video_url,
        ]);

        return redirect()->route('portfolio.index')->with('success', 'Portfolio item added successfully.');
    }

    public function edit(Portfolio $portfolio)
    {
        return view('portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'title' => 'required',
            'klien' => 'required', // Changed to 'klien'
            'category' => 'required',
            'image' => 'image|nullable',
            'video_url' => 'nullable|url',
            'pdf' => 'nullable|mimes:pdf|max:2048',
            'date' => 'nullable|date',
            'description' => 'nullable|string', // Validation for description
        ]);

        $portfolio->update($request->only(['title', 'klien', 'category', 'date', 'video_url', 'description']));

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('portfolio/images', 'public');
            $portfolio->update(['image' => $imagePath]);
        }

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
