<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\Product;

class DetailController extends Controller
{
    public function index()
    {
        $data = Detail::get();
        $product = Product::get();
        return view ('list_details', compact ('data','product'));
    }

    public function add(Request $request)
    {
        $data = Product::where('ProductID','=',$request->productid)->first();
        return view('add_details',compact('data'));
    }

    public function save(Request $request)
    {
        $data = Product::where('ProductID','=',$request->productid)->first();
        //dd($request->all());
        $dt = new Detail();

        $dt->DetailID = $request->id_details;
        $dt->DetailAge = $request->age_details;
        $dt->DetailSize = $request->size_details;
        $dt->DetailImage1 = $data['ProductImage'];
        $dt->DetailImage2 = $request->image2_details->getClientOriginalName();
        $dt->DetailImage3 = $request->image3_details->getClientOriginalName();
        $request->file('image2_details')->move(public_path('image'),$request->image2_details->getClientOriginalName());
        $request->file('image3_details')->move(public_path('image'),$request->image3_details->getClientOriginalName());
        $dt->ProductID = $request->productid;
        $dt->save();
        return redirect()->route('select_product')->with('success', 'Detail Added Successfully!');
    }

    public function edit($id_details){
        $data = Detail::where('DetailID','=', $id_details)->first();
        $product = Product::get();
        return view('edit_details', compact('data','product'));
    }
    public function select_product(Request $request)
    {
        $data = Product::get();
        return view ('select_product',compact('data'));
    }

    public function update(Request $request){
        $id_details = $request->id_details;
        Detail::where('DetailID','=', $id_details)->update([
            'DetailAge'=>$request->age_details,
            'DetailSize'=>$request->size_details,
            'DetailImage1'=>$request->image1_details,
            'DetailImage2'=>$request->image2_details,
            'DetailImage3'=>$request->image3_details,
            'ProductID'=>$request->productid

        ]);
        return redirect()->back()->with('success', 'Detail Updated Successfully!');
    }

    public function delete($id_details){
        Detail::where('DetailID','=', $id_details)->delete();
        return redirect()->back()->with('success', 'Detail Deleted Successfully!');
    
    }
}
