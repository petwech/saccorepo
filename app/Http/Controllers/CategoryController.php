<?php

namespace App\Http\Controllers;
use App\Category;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Session;

class CategoryController extends Controller
{
    public function addcategory(Request $request){
        if($request->ismethod('post')){
            $data=$request->all();
            //echo "<pre>";
            //print_r($data);
            //die();
            if(isset($data['enable']) && $data['enable'] ==='on'){
                $status=1;
              }else {
                $status=0;
            }

            $cat= new Category;
            $cat->cat_name=$data['cat_name'];
            $cat->cat_des=$data['cat_des'];
            $cat->status=$status;
            $cat->save();
            return redirect()->back()->with('flash_message_success','Category has been added successfully');
        }
        return view('admin.categories.add_category');
    }
}
