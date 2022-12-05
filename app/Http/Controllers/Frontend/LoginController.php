<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
    //
    public function login(){
        return view('frontend.login');
    }

    public function LogInFunc(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

                                            // LOG IN

        if(DB::table('user')
        ->where('email',$email)
        ->exists()){
            $EncryptedPass = DB::table('user')->where('email',$email)->value('password');
            $LoggedInUser  = DB::table('user')->where('email',$email)->get();
            // $DecryptPass =decrypt($EncryptedPass);

            // ROLE ADD
             if(password_verify($password,$EncryptedPass)){
                    // return view('frontend.index');
                    $role = DB::table('user')->where('email',$email)->value('role');
                    // echo $role;
                    if($role == "admin"){
                        return view('admin_dash.dashboard');
                    }
                   elseif($role == "customer"){
                        return view('frontend.user');
                   }

             }
             else{
                return back()->with('LogInFailed','Invalid email or password');
            }
        }
        else{
            return back()->with('LogInFailed','Invalid email or password');
        }
    }
    }
