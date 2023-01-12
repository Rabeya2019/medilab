<?php

namespace App\Http\Controllers\AdminController;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function registered(){
        $user = DB::table('user')->get();
        return view('admin_dash.registered')->with('user',$user);
    }

    public function Edited_Roles(Request $req,$id){
        $users = DB::table('user')->find($id);
        return view('admin_dash.register-edit')->with('users',$users);

    }

    public function update_user(Request $req,$id){

        if(DB::table('user')
        ->where('id', $id)
        ->update([
            'username'     => $req->input('username'),
            'role'         => $req->input('usertype')
        ])){

            return redirect('/roles')->with('failure','Invalid Entry');

        }
    }

    public function delete_user(Request $request,$id){
        if(DB::table('user')
        ->delete($id)){
            return  back()->with('delete_success','Data deleted successfully');
        }
    }


}
