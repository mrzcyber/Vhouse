<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display the landing page with listed properties.
     */
    public function index()
    {
        $properties = Property::latest()->get();
        return view('welcome', compact('properties'));
    }

    /**
     * Display the property detail page using its slug.
     */
    public function show(Property $property)
    {
        $property->load('images');
        return view('properties.show', compact('property'));
    }
}
