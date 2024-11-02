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
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('image');
        $imagePath = 'uploads/portfolio/';
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // Buat folder jika belum ada
        if (!File::exists(public_path($imagePath))) {
            File::makeDirectory(public_path($imagePath), 0755, true);
        }

        // Simpan gambar ke direktori
        $image->move(public_path($imagePath), $imageName);

        // Simpan data portfolio ke database
        Portfolio::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'category' => $request->category,
            'image' => $imagePath . $imageName,
        ]);

        return redirect()->route('portfolio.index')->with('success', 'Portfolio item successfully added.');
    }

    public function edit(Portfolio $portfolio)
    {
        return view('portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'category' => 'required',
            'image' => 'image',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = 'uploads/portfolio/';
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Buat folder jika belum ada
            if (!File::exists(public_path($imagePath))) {
                File::makeDirectory(public_path($imagePath), 0755, true);
            }

            // Simpan gambar ke direktori
            $image->move(public_path($imagePath), $imageName);

            // Update image di database
            $portfolio->update(['image' => $imagePath . $imageName]);
        }

        $portfolio->update($request->only(['title', 'subtitle', 'category']));

        return redirect()->route('portfolio.index')->with('success', 'Portfolio item updated successfully');
    }

    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return redirect()->route('portfolio.index')->with('success', 'Portfolio item deleted successfully');
    }
}
