<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Faker\Provider\Image;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('products.products_info')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('products.add_product');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'prod_name' => 'required',
            'qty_or_wt' => 'required',
            'price' => 'required',
            'img_url' => 'required',
            'category' => 'required'

        ]);

        $product = new Product;

        if ($request->hasFile('img_url')) {
            $avatar = $request->file('img_url');
            $filename = '/images/products/' . $request->file('img_url')->getClientOriginalName();
            //$filename = '/images/products/' . '.' . $avatar->getClientOriginalExtension();
            //Image::make($avatar)->resize(300, 200)->save(public_path('images/products/' . $filename));

            $product->prod_name = $request->input('prod_name');
            $product->qty_or_wt = $request->input('qty_or_wt');
            $product->price = $request->input('price');
            $product->category = $request->input('category');
            $product->img_url      = $filename;

            
            $product->save();

            return redirect('/home')->with('status', 'Product Added Successfully!');

        }
        else{
            return redirect('/home')->with('status', 'Error!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::find($id);
        return view('products.edit_product', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'prod_name' => 'required',
            'qty_or_wt' => 'required',
            'price' => 'required',
            //'img_url' => 'required',
            'category' => 'required'

        ]);

        $product = Product::find($id);

        if ($request->hasFile('img_url')) {    
            $filename = '/images/products/' . $request->file('img_url')->getClientOriginalName();
            $product->img_url      = $filename;
        }
        else{
            $product->img_url      = $request->input('img_url');
        }

        $product->prod_name = $request->input('prod_name');
        $product->qty_or_wt = $request->input('qty_or_wt');
        $product->price = $request->input('price');
        $product->category = $request->input('category');
        

        
        $product->save();

        return redirect('/home')->with('status', 'Product Updated Successfully!');

        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('/home')->with('status', 'Product Info Deleted Successfully!');
    }
}
