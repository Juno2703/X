<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Origin;

class OriginController extends Controller
{
    public function index()
    {
        $data = Origin::get();
        return view ('list_origin', compact ('data'));
    }

    public function add()
    {
        return view('add_origin');
    }

    public function save(Request $request)
    {
    
        //dd($request->all());
        $org = new Origin();

        $org->OriginID = $request->id_origin;
        $org->OriginName = $request->name_origin;
        $org->save();
        
        return redirect()->back()->with('success' , 'Origin Added Successfully! ');
    }

    public function edit($id_origin){
        $data = Origin::where('OriginID','=', $id_origin)->first();
        return view('edit_origin', compact('data'));
    }

    public function update(Request $request){
        $id_origin = $request->id_origin;
        Origin::where('OriginID','=', $id_origin)->update([
            'OriginName'=>$request->name_origin

        ]);
        return redirect()->back()->with('success', 'Origin Updated Successfully!');
    }

    public function delete($id_origin){
        Origin::where('OriginID','=', $id_origin)->delete();
        return redirect()->back()->with('success', 'Origin Deleted Successfully!');
    
    }
}
