<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $title="Welcome to my life";
        $description = "Created by KodeNow";

        $data = [
            'productOne' => 'iPhone',
            'productTwo' => 'Samsung'
        ];

        print(route('products'));// print the route named "products"
        return view('products.index');
        //with method
        // return view('products.index')->with('title', $title);

        //pass an associative array
        // return view('products.index')->with(['data' => $data, 'title' => $title]); 
        
        //compact method to pass variables to view
        // return view('products.index', compact('title','description'));

        // return view('products.index',[
        //     'data' => $data
        // ]); //passing directly in the view, not preferred but works
    }

    public function about(){
        return 'About us page';
    }

    public function show($name){ //params received from routes example : http://firstproject.test/products/24
        $data = [
            'apple' => 'iPhone',
            'samsung' => 'S7'
        ];
        return view('products.index',[
            //coalescing operator ??. 
            //first ? returns the left hand side if true, second ? returns right hand side
            'products' => $data[$name] ?? 'Product ' . $name . ' does not exist!!' 
        ]);
    }
}
