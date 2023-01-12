<?php

namespace App\Http\Controllers\AdminController;

use App\Models\blood;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddBloodController extends Controller
{
    //
    public function addblood_page(){
        return view('admin_dash.addblood');
    }

    public function insert_blood(Request $req){
        $hospitalname =  $req->get('hospital_name');
        $quantity =  $req->get('quantity');
        $contact =  $req->get('contact');
        $bloodimage = $req->file('blood_image')->getClientOriginalName();
        $type = $req->get('type');
        //MOVE UPLODED FILE
        $req->blood_image->move(public_path('bloodimages'), $bloodimage);
 
        $blood = new blood();
        $blood -> hospital_name = $hospitalname;
        $blood -> quantity = $quantity;
        $blood -> contact = $contact;
        $blood -> blood_image = $bloodimage;
        $blood -> type = $type;
        $blood ->save();
        return redirect('addblood')->with('message','Blood Added Successfully');
 
 
     }
     public function read_blood(){
        $blooddata = blood::all();
        return view('blood.bloodcategory',['data'=>$blooddata]);
    }
}

