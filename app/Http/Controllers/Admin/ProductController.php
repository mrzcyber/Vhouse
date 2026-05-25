<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\Admin\ProductRequest;
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
    public function store(ProductRequest $request)
    {
        $validated = $request->validated();

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
    public function update(ProductRequest $request, string $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validated();

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
