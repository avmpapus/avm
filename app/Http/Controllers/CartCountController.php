<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cart;

use App\User;

use Illuminate\Support\Facades\Input as input;

use DB;


class CartCountController extends Controller
{
	

public function index()    {
       

   $cartpage = DB::table('cart')->get();
     return view('welcome',['cartpage'=>$cartpage]);     

}
}


