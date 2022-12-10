<?php

namespace App\Http\Controllers\medicinecontroller;

use App\Models\medicine;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstAidController extends Controller
{
    //
    public function firstaid_page(){
        return view('medicine.firstaid');
    } 
   
    
    public function read_category_wise_f(Request $req){

        $medicinedata = medicine::paginate(8);
          
        return view('medicine.firstaid',['data'=>$medicinedata]);
        
    }
}
