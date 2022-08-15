<?php
namespace App\Http\Controllers;

use App\Models\Origin;
use App\Models\UserAccount;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function login()
    {
        return view('Trees.login');
    }

    public function loginProcess(Request $request)
    {
        $ua = UserAccount::where('AccountID', '=', $request->username)->first();
        if($ua){
            if(Hash::check($request -> password, $ua -> AccountPassword)){
                $request ->session() ->put('loginID', $ua->AccountID);
                if($ua -> UserTypeID === 1){
                    $data = Product::get();
                    return view ('Trees.home', compact ('data'));
                }
                else{
                    $data = Product::get();
                    $origin = Origin::get();
                    $category = Category::get();
                    return view ('list', compact ('data','origin','category'));
                }
            }else{
                return back() -> with('fail', 'Password do not match');
            }
        }else{
            return back() -> with('fail', 'This Email is not register');
        }
    }

    public function register()
    {
        return view('Trees.register');
    }

    public function registerProcess(Request $request)
    {
        $ua = new UserAccount();
        $ua-> AccountID = $request ->username;
        $ua-> AccountPassword = Hash::make($request->password);
        $ua-> AccountFullName = $request ->fullname;
        $ua-> AccountEmail = $request ->email;
        $ua-> AccountPhone = $request ->phone;
        $ua-> AccountAddress = $request ->address;
        $ua-> UserTypeID = $request ->usertypeid;
        $res = $ua->save();
        if($res){
            return back() -> with('success', 'You have registed Successfully');
        }else{
            return back() -> with('fail', 'Oh no! something wrong!');
        }

    }

    public function logout()
    {
        if(Session::has('loginID')) {
            Session::pull('loginID');
            return redirect('products');
        }
    }

    public function logout_list()
    {
        if(Session::has('loginID')) {
            Session::pull('loginID');
            return redirect('list');
        }
    }
}

?>