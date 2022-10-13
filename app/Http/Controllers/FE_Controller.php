<?php

namespace App\Http\Controllers;

use App\Models\product_table;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

use function PHPUnit\Framework\returnSelf;

class FE_Controller extends Controller
{
    public function store_products(Request $request){
        $this->validate($request,[
            'inputcategory'=>'required',
            'inputproductid'=>'required|max:30|min:2',
            'inputproductname'=>'required|max:100|min:2',
            'inputquantity'=>'required',
            'inputmdate'=>'required',
            'inputedate'=>'required',
            'inputmdetails'=>'required|max:400|min:2',
            'inputbrandname'=>'required|max:300|min:2',

        ]);


            $addproduct=new product_table();
            $addproduct->product_category=$request->inputcategory;
            $addproduct->product_id=$request->inputproductid;
            $addproduct->product_name=$request->inputproductname;
            $addproduct->item_price=$request->inputitemprice;
            $addproduct->quantity=$request->inputquantity;
            $addproduct->manufacture_date=$request->inputmdate;
            $addproduct->expire_date=$request->inputedate;
            $addproduct->manufacturer_details=$request->inputmdetails;
            $addproduct->brand_name=$request->inputbrandname;

            $addproduct->save();
            return redirect()->back()->with('message', 'Product Has Been Added Sucessfully !');



    }
    public function allproductdetails(){
        $allproducts=product_table::all();

            return view('dashboard_products',['products'=>$allproducts]);
    }

    public function deleteproduct($id) {
        $deleteproduct=product_table::find($id);
        $deleteproduct->delete();
        return redirect()->back();

    }


    public function editproduct_function($id)
    {

        $data= product_table::find($id);
        return view('editproduct',['data'=>$data]);
    }

    public function get_product(Request $request){
        $productid = $request->productid;

        $product = product_table::where('product_id', '=', $productid)->get();
        $request->session()->put('product', $product);
        return redirect()->view('');
    }

    public function update(Request $req){

        $data=product_table::find($req->id);
        $data->product_category=$req->product_category;
        $data->product_id=$req->product_id;
        $data->product_name=$req->product_name;
        $data->brand_name=$req->brand_name;
        $data->item_price=$req->item_price;
        $data->quantity=$req->quantity;
        $data->manufacture_date=$req->manufacture_date;
        $data->expire_date=$req->expire_date;
        $data->manufacturer_details=$req->manufacturer_details;

        $data->save();
        return redirect('/products');

    }

    public function summary(){

        $products= product_table::count();
        $quantity= product_table::sum('quantity');

        return view('dashboard_home',compact('products','quantity'));
    }







}
