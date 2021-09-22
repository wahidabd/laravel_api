<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function get(){
        $product = Product::All();
        if($product){
            $response = [
                "is_success" => true,
                "message" => "Get All Data",
                "data" => $product,
            ];
            return response()->json($response);
        }else{
            return response()->json("Error");
        }
    }
}
