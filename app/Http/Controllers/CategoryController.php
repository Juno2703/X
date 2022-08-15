<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::get();
        return view ('list_category', compact ('data'));
    }

    public function add()
    {
        return view('add_category');
    }

    public function save(Request $request)
    {
    
        //dd($request->all());
        $ctgr = new Category();

        $ctgr->CategoryID = $request->id_category;
        $ctgr->CategoryName = $request->name_category;
        $ctgr->save();
        
        return redirect()->back()->with('success' , 'Category Added Successfully! ');
    }

    public function edit($id_category){
        $data = Category::where('CategoryID','=', $id_category)->first();
        return view('edit_category', compact('data'));
    }

    public function update(Request $request){
        $id_category = $request->id_category;
        Category::where('CategoryID','=', $id_category)->update([
            'CategoryName'=>$request->name_category

        ]);
        return redirect()->back()->with('success', 'Category Updated Successfully!');
    }

    public function delete($id_category){
        Category::where('CategoryID','=', $id_category)->delete();
        return redirect()->back()->with('success', 'Category Deleted Successfully!');
    
    }
}
