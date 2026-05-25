<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Galery;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|integer|min:0',
            'stock' => 'required|integer|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'lt' => 'required|integer|min:0',
            'lb' => 'required|integer|min:0',
            'flors' => 'required|integer|min:0',
            'badroom' => 'required|integer|min:0',
            'bathrom' => 'required|integer|min:0',
            'garage' => 'required|integer|min:0',
            'galeries' => [
                'nullable',
                'array',
                'max:6',
                function ($attribute, $value, $fail) use ($request) {
                    $totalSize = 0;
                    if ($request->hasFile('image')) {
                        $totalSize += $request->file('image')->getSize();
                    }
                    if ($request->file('galeries')) {
                        foreach ($request->file('galeries') as $file) {
                            if ($file instanceof \Illuminate\Http\UploadedFile) {
                                $totalSize += $file->getSize();
                            }
                        }
                    }
                    if ($totalSize > 5242880) {
                        $fail('Total ukuran seluruh gambar (gambar utama & galeri) tidak boleh melebihi 5MB.');
                    }
                }
            ],
            'galeries.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
            $validated['image'] = $path;
        }

        $product = Product::create($validated);

        if ($request->file('galeries')) {
            foreach ($request->file('galeries') as $galeryImage) {
                if ($galeryImage instanceof \Illuminate\Http\UploadedFile && $galeryImage->isValid()) {
                    $galeryPath = $galeryImage->store('galeries', 'public');
                    $product->galeries()->create([
                        'image' => $galeryPath
                    ]);
                }
            }
        }

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::with('galeries')->findOrFail($id);
        return view('admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::with('galeries')->findOrFail($id);
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|integer|min:0',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'lt' => 'required|integer|min:0',
            'lb' => 'required|integer|min:0',
            'flors' => 'required|integer|min:0',
            'badroom' => 'required|integer|min:0',
            'bathrom' => 'required|integer|min:0',
            'garage' => 'required|integer|min:0',
            'galeries' => [
                'nullable',
                'array',
                'max:6',
                function ($attribute, $value, $fail) use ($request) {
                    $totalSize = 0;
                    if ($request->hasFile('image')) {
                        $totalSize += $request->file('image')->getSize();
                    }
                    if ($request->file('galeries')) {
                        foreach ($request->file('galeries') as $file) {
                            if ($file instanceof \Illuminate\Http\UploadedFile) {
                                $totalSize += $file->getSize();
                            }
                        }
                    }
                    if ($totalSize > 5242880) {
                        $fail('Total ukuran seluruh gambar (gambar utama & galeri) tidak boleh melebihi 5MB.');
                    }
                }
            ],
            'galeries.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $path = $request->file('image')->store('products', 'public');
            $validated['image'] = $path;
        } else {
            unset($validated['image']);
        }

        $product->update($validated);

        if ($request->file('galeries')) {
            foreach ($request->file('galeries') as $galeryImage) {
                if ($galeryImage instanceof \Illuminate\Http\UploadedFile && $galeryImage->isValid()) {
                    $galeryPath = $galeryImage->store('galeries', 'public');
                    $product->galeries()->create([
                        'image' => $galeryPath
                    ]);
                }
            }
        }

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::with('galeries')->findOrFail($id);

        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        foreach ($product->galeries as $galery) {
            if ($galery->image) {
                Storage::disk('public')->delete($galery->image);
            }
        }

        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil dihapus.');
    }
}
