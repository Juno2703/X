<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Detail;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;


class ProductController2 extends Controller
{
    public function index()
    {
       $data = Product::get();
        return view('Trees.home',compact('data'));
    }

    public function getProducts()
    {
        $data = Product::get();
        return view('Trees.products', compact('data'));
    }

    public function login()
    {
        return view('Trees.login');
    }
    
    public function details($id)
    {
        //$data = Product::Where('ProductID', '=', $id)->first();
        $data = Product::select('products.*', 'categories.CategoryName', 'origins.OriginName','details.*')
        ->join('categories', 'categories.CategoryID', '=', 'products.CategoryID')
        ->join('origins', 'origins.OriginID', '=', 'products.OriginID')
        ->join('details', 'details.ProductID', '=', 'products.ProductID')
        ->Where('products.ProductID', '=', $id)         
        ->first(); // or first()
        $usa = Detail::select('details.*', 'products.ProductName')
        ->join('products', 'products.ProductID', '=', 'details.ProductID')
       
        ->first(); // or first()  
        return view('Trees.details', compact('data'));
    }


}
