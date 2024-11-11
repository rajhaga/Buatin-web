<?php
namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;


class PackageController extends Controller
{
    public function adminpackages()
    {
        $packages = Package::all();
        return view('admin.packages.index', compact('packages'));
    }
    public function create()
    {
        return view('admin.packages.create');
    }
    public function about()
    {
        // Mengambil semua data packages dari database
        $packages = Package::all();
        
        // Mengirim data packages ke view
        return view('about');
    }
    public function pricing()
    {
        // Mengambil semua data packages dari database
        $packages = Package::all();
        
        // Mengirim data packages ke view
        return view('packages.pricing', compact('packages'));
    }

    public function portpricing()
    {
        // Mengambil semua data packages dari database
        $packages = Package::all();
        
        // Mengirim data packages ke view
        return view('port', compact('packages'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        Package::create($request->all());

        return redirect()->route('admin.packages.index')->with('success', 'Package created successfully.');
    }
    public function edit($id)
    {
        $package = Package::findOrFail($id);
        return view('admin.packages.edit', compact('package'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        $package = Package::findOrFail($id);
        $package->update($request->all());

        return redirect()->route('admin.packages.index')->with('success', 'Package updated successfully.');
    }
    public function destroy($id)
    {
        $package = Package::findOrFail($id);
        $package->delete();

        return redirect()->route('admin.packages.index')->with('success', 'Package deleted successfully.');
    }
    public function pricingprop()
    {
        // Mengambil semua data packages dari database
        $packages = Package::all();
        
        // Mengirim data packages ke view
        return view('testimoni', compact('packages'));
    }
    
    public function createOrderForm(Request $request)
    {
        // Ambil semua paket dari database
        $packages = Package::all();
        $packageName = $request->query('name', ''); // Retrieve package name from query parameter

        // Kirimkan data paket ke view
        return view('packages.form', compact('packageName', 'packages'));
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
