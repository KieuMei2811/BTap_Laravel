<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Slide;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){							
    	$slide =Slide::all();						
    	//return view('page.trangchu',['slide'=>$slide]);						
        $new_product = Product::where('new',1)->paginate(8);	
        $sanpham_khuyenmai = Product::where('promotion_price','<>',0)->paginate(8);				
        //dd($new_product);							
    	return view('home',compact('slide','new_product','sanpham_khuyenmai'));						
    }						
    }

