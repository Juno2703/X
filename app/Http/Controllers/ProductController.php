<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Origin;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::get();
        $origin = Origin::get();
        $category = Category::get();
        return view ('list', compact ('data','origin','category'));
    }

    public function add()
    {
        $categories = Category::get();
        $origin = Origin::get();
        return view('add',compact('categories','origin'));
    }

    public function save(Request $request)
    {
    
        //dd($request->all());
        $product = new Product();
        $product->ProductID = $request->id;
        $product->ProductName = $request->name;
        $product->ProductPrice = $request->price;
        $product->ProductImage = $request->image->getClientOriginalName();
        $request->file('image')->move(public_path('image'),$request->image->getClientOriginalName());
        $product->CategoryID = $request->categoryid;
        $product->OriginID = $request->originid;
        $product->save();
        
        return redirect()->back()->with('success' , 'Product Added Successfully! ');
    }

    public function edit($id){
        $data = Product::where('productID','=', $id)->first();
        $categories = Category::get();
        $origin = Origin::get();
        return view('edit', compact('data','categories','origin'));
    }

    public function update(Request $request){
        $id = $request->id;
        Product::where('ProductID','=', $id)->update([
            'ProductName'=>$request->name,
            'ProductPrice'=>$request->price,
            'ProductImage'=>$request->image,
            'CategoryID'=>$request->categoryid,
            'OriginID'=>$request->originid
        ]);
        return redirect()->back()->with('success', 'Product Updated Successfully!');
    }
    public function delete($id){
        Product::where('ProductID','=', $id)->delete();
        return redirect()->back()->with('success', 'Product Deleted Successfully!');
    
    }
    
    //Category
    

    //Origin
    

    //Details
    
}
