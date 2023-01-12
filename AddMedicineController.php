<?php

namespace App\Http\Controllers\AdminController;

use App\Models\medicine;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class AddMedicineController extends Controller
{
    //
    public function addmedicine_page(){
        return view('admin_dash.addmedicine');
    }
    public function insert_medicine(Request $req){
       $productname =  $req->get('product_name');
       $productprice =  $req->get('product_price');
       $productimage = $req->file('product_image')->getClientOriginalName();
       $productcategory = $req->get('category');
       //MOVE UPLODED FILE
       $req->product_image->move(public_path('images'), $productimage);

       $medicine = new medicine();
       $medicine -> product_name = $productname;
       $medicine -> product_price = $productprice;
       $medicine -> product_image = $productimage;
       $medicine -> category = $productcategory;
       $medicine ->save();
       return redirect('addmedicine')->with('message','Medicine Added Successfully');


    }


    public function read_medicine(){
        $medicinedata = medicine::all();
        return view('medicine.medicinecategory',['data'=>$medicinedata]);
    }
}
