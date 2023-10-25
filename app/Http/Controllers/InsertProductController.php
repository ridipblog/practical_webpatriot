<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Exception ;
class InsertProductController extends Controller
{
    public function index(){
        $categories=DB::table('category')
        ->get();
        return view('insert_product',[
            'categories'=>$categories
        ]);
    }
    public function insert(Request $request){
        $select_cate=$request->select_cate;
        $product_name=$request->product_name;
        $status=null;
        $message=null;
        if(isset($select_cate) && isset($product_name)){
            try{
                DB::table('products')
                ->insert(['product_name'=>$product_name,'category_id'=>$select_cate]);
                $status=200;
                $message="Product Inserted";
            }catch(Exception $e){
                $status=400;
                $message="Some Error Execute";
            }
        }
        else{
            $status=400;
            $message="Fill All Inputs ";
        }
        return response()->json(['status'=>$status,'message'=>$message]);
    }
    public function product_list(){
        return view('product_list');
    }
    public function list(Request $request){
        if($request->ajax()){
            $products=DB::table('products as pdts')
            ->join('category as cate','pdts.category_id','=','cate.id')
            ->select('pdts.*','cate.category_name')
            ->get();
            return response()->json(['status'=>200,'message'=>$products]);
        }
    }
}
