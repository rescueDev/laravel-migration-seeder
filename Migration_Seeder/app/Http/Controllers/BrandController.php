<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('pages.brands', compact('brands'));
    }

    public function show($id)
    {
        $brand = Brand::findOrFail($id);
        return view('pages.brand', compact('brand'));
    }
    public function create()
    {
        return view('pages.create-brand');
    }
    public function store(Request $request)
    {

        //dd($request->all());
        $newBrand = new Brand;
        $newBrand->name = $request->get('name');
        $newBrand->logo = $request->get('logo');
        $newBrand->numberOfLocations = $request->get('numberOfLocations');

        $newBrand->save();

        return redirect()->route('brands');
    }
}
