<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Http\Controllers\DB;
use Illuminate\Support\Collection;

class PagesController extends Controller
{
    //
    public function home(){

    }
    public function dashboard(){
    	if (Auth::user()->isAdmin == 0)
    		return view('products.add_product');
    	elseif (Auth::user()->isAdmin == 1)
    		return view('/home');

    }

    public function show_product(){
    	$products = Product::all();

        return view('products.show')->with('products', $products);

    }

     public function pie(){
        $products = Product::all();
        $honey = $products->where('category', 'Honey')->count();
        //$honey_count = $honey->count();
        $pickle = $products->where('category', 'Pickle & Chutney')->count();
        $grocery = $products->where('category', 'Grocery')->count();
        $dry_fish = $products->where('category', 'Dry Fish')->count();
        $price_less_500 = $products->where('price', '<', 500)->count();
        $price_500_1000 = $products->where('price', '>=', 500)->where('price', '<', 1000)->count();
        $price_1000_1500 = $products->where('price', '>=', 1000)->where('price', '<', 1500)->count();
        $price_greater_1500 = $products->where('price', '>=', 1500)->count();

        $trendline = \DB::table('daily_data')->select('report_date', 'infected_24_hrs')->get();

        //$infected_24_hrs = \DB::table('daily_data')->pluck('infected_24_hrs');
        //dd(json_decode($trendline, true));

        $labels = [];
        $count = [];
        $trd = [];
        foreach ($trendline as $t){
          array_push($labels,$t->report_date);
          //array_push($labels,$t->infected_24_hrs);
        }

        foreach ($trendline as $t) {
          array_push($count,$t->infected_24_hrs);
        }


        array_push($trd,$labels, $count);


        //dd($trd);

        return view('admin.dashboard')->with('products', $products)
                                    ->with('honey', $honey)
                                    ->with('pickle', $pickle)
                                    ->with('grocery', $grocery)
                                    ->with('dry_fish', $dry_fish)
                                    ->with('price_less_500', $price_less_500)
                                    ->with('price_500_1000', $price_500_1000)
                                    ->with('price_1000_1500', $price_1000_1500)
                                    ->with('price_greater_1500', $price_greater_1500)
                                    ->with('labels', $labels)
                                    ->with('count', $count);

    }

    /*public function donut(){
        $products = Product::all();
        $price_less_500 = $products->where('price', '<', 500)->count();
        $price_500_1000 = $products->where('price', '>=', 500)->where('price', '<', 1000)->count();
        $price_1000_1500 = $products->where('price', '>=', 1000)->where('price', '<', 1500)->count();
        $price_greater_1500 = $products->where('price', '>=', 1500)->count();

        return view('admin.donut')->with('products', $products)
                                    ->with('price_less_500', $price_less_500)
                                    ->with('price_500_1000', $price_500_1000)
                                    ->with('price_1000_1500', $price_1000_1500)
                                    ->with('price_greater_1500', $price_greater_1500);

    }
*/
    public function line(){

    }

    public function bar(){

    }
}
