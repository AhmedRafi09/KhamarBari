<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
    	$products = Product::all();
    	$honey = $products->where('category', 'Honey')->count();
    	//$honey_count = $honey->count();
    	$pickle = $products->where('category', 'Pickle & Chutney')->count();
    	$grocery = $products->where('category', 'Grocery')->count();
    	//dd($prod_cat);
        return view('pages.index')->with('honey', $honey)
        						  ->with('pickle', $pickle)
        						  ->with('grocery', $grocery);
    }
}
