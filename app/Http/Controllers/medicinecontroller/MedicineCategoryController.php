<?php

namespace App\Http\Controllers\medicinecontroller;

use App\Models\medicine;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class MedicineCategoryController extends Controller
{
    //
    public function medicine_category_page(){
        return view('medicine.medicinecategory');
    } 
   
    public function read_medicine(){
        $medicinedata = medicine::paginate(8);
        return view('medicine.medicinecategory',['data'=>$medicinedata]);
    }
    public function pagination(Request $request){
        $medicinedata = medicine::paginate(8);
        return view('medicine.pagination_medicinecategory',['data'=>$medicinedata])->render();
    } 
    //search
    public function searchMedicine(Request $request){
        $medicinedata = medicine::where('product_name', 'like', '%'.$request->search_string.'%')
        ->orderBy('id','desc')
        ->paginate(8);

        if($medicinedata->count() >= 1){
            return view('medicine.pagination_medicinecategory',['data'=>$medicinedata])->render();
        }else{
            return response()->json([
                'status'=>'nothing_found',
            ]);
        }
    }
    
}
