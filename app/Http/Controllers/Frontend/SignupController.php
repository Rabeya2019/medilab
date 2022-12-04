<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Article;

class SignupController extends Controller
{
    // VIEW LOADING

    public function signup(){
        return view('frontend.signup');
    }

    // SIGNNING UP NEW USERS

    public function SignUpFunc(Request $request){
        
                                   // Password Matching 
        $SetPass = $request->input('password');  // $_POST['username'];
        $ConfirmPass = $request->input('confirmpassword');
        
        if($SetPass == $ConfirmPass){     
                                    // BCRYPTING PASSWORD            
            $ConfirmPassEncrypt = password_hash( $ConfirmPass,PASSWORD_DEFAULT);
                                    // SQL QUERY

            $query = DB::table('user')->insert([
                'username'=>$request->input('username'),
                'email'=>$request->input('email'),
                'password'=>$ConfirmPassEncrypt,
                'phone'=>$request->input('phone')
            ]);

           

            if( $query){           // KEYS     // MESSAGE
                return back()->with('success','SIGNED UP');
            }
        }
        else{
            return back()->with('failure','Not matched'); 
        }
        
    }

   
}
