<?php
namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;


class PackageController extends Controller
{
    public function pricing()
    {
        // Mengambil semua data packages dari database
        $packages = Package::all();
        
        // Mengirim data packages ke view
        return view('about', compact('packages'));
    }

    public function portpricing()
    {
        // Mengambil semua data packages dari database
        $packages = Package::all();
        
        // Mengirim data packages ke view
        return view('port', compact('packages'));
    }

    

    public function pricingprop()
    {
        // Mengambil semua data packages dari database
        $packages = Package::all();
        
        // Mengirim data packages ke view
        return view('testimoni', compact('packages'));
    }
    
    public function createOrderForm()
    {
        // Ambil semua paket dari database
        $packages = Package::all();

        // Kirimkan data paket ke view
        return view('packages.form', compact('packages'));
    }
    
    public function index()
    {
        $packages = Package::all();
        return view('packages.packages', compact('packages'));
    }

    // Menampilkan form pemesanan
    public function order($id)
    {
        $package = Package::findOrFail($id);
        return view('packages.order', compact('package'));
    }

    public function storeOrder(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'category' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'reference' => 'required|file|mimes:jpeg,png,jpg,mp4,mov,avi|max:2048', // Adjust based on your needs
        ]);

        // Handle file upload
        if ($request->hasFile('reference')) {
            $filePath = $request->file('reference')->store('references', 'public'); // Store in storage/app/public/references
        }

        // Save order to the database or process it
        // Assuming you have an Order model, create an entry
        Package::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'location' => $request->location,
            'category' => $request->category,
            'price' => $request->price,
            'description' => $request->description,
            'reference' => $filePath,
        ]);

        return redirect()->back()->with('success', 'Order submitted successfully.');
    }

    


}
