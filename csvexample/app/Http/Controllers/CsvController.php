<?php

namespace App\Http\Controllers;

use App\Imports\ProductImport;
use Illuminate\Http\Request;
use App\Models\Product;
use Maatwebsite\Excel\Facades\Excel;

class CsvController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }

    public function import(Request $request)
    {
        $request->validate([
            'document_csv' => 'required|mimes:csv,txt|max:2048'
        ]);

        try {
            $file = $request->file('document_csv');
            Excel::import(new ProductImport, $file);
            return redirect()->route('home')->with('success', 'Products imported successfully.');
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', 'Error importing products: ' . $e->getMessage());
        }
    }

    public function export()
    {
        //return Excel::download(new PoductsExport, 'products.csv');
    }
}
