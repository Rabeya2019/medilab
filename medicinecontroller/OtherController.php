<?php

namespace App\Http\Controllers\medicinecontroller;

use App\Models\medicine;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OtherController extends Controller
{
    //
    public function tablet_page(){
        return view('medicine.other');
    } 
   
    
    public function read_category_wise(Request $req){

        $medicinedata = medicine::paginate(8);
          
        return view('medicine.other',['data'=>$medicinedata]);
        
    }
}
