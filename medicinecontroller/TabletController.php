<?php

namespace App\Http\Controllers\medicinecontroller;

use App\Models\medicine;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TabletController extends Controller
{
    //
    public function tablet_page(){
        return view('medicine.tablet');
    } 
   
    
    public function read_category_wise(Request $req){

        $medicinedata = medicine::paginate(8);
          
        return view('medicine.tablet',['data'=>$medicinedata]);
        
    }
}
