<?php

namespace App\Http\Controllers\AdminController;

use App\Models\tests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;


class AddTestController extends Controller
{
    //
    public function addtest_page(){
        return view('admin_dash.addtest');
    }



    public function test(){
        $test = DB::table('tests')->get();
        return view('admin_dash.addtest')->with('tests',$test);
    }

    public function edited_Tests(Request $rqst,$id){
        $tests = DB::table('tests')->find($id);
        return view('admin_dash.test_edit')->with('tests',$tests);

    }

    public function update_test(Request $rqst,$id){

        if(DB::table('tests')
        ->where('id', $id)
        ->update([
            'test_name'     => $rqst->input('test_name'),
            'detail'         => $rqst->input('availabilitytype')
        ])){

            return redirect('/types')->with('failure','Invalid Entry');

        }
    }

    public function delete_test(Request $rqst,$id){
        if(DB::table('tests')
        ->delete($id)){
            return  back()->with('delete_success','Data deleted successfully');
        }
    }

    public function insert_test(Request $rqst){
        $testname =  $rqst->get('test_name');
        $testprice =  $rqst->get('test_price');
        $testcategory = $rqst->get('test_category');


        $tests = new tests();
        $tests -> test_name = $testname;
        $tests -> test_price = $testprice;
        $tests -> test_category = $testcategory;
        $tests ->save();
        return redirect('addtest')->with('message','Test Added Successfully');


     }
     public function read_test(){
        $tests = tests::all();
        return view('MedicalTest_Page.medicaltest',['tests'=>$tests]);
    }
}
