<?php

namespace App\Http\Controllers\medicinecontroller;

use App\Models\medicine;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SyrupController extends Controller
{
    //
    public function syrup_page(){
        return view('medicine.syrup');
    } 
    
    public function read_category_wise(Request $req){

        $medicinedata = medicine::paginate(10);
        return view('medicine.syrup',['data'=>$medicinedata]);
        
    }
}

