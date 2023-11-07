<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    function __construct() {
        $this->products = new products();
    }

    public function index(){
        return view('home')->with(["products"=>Products::all()]);
    }

    public function save_products(Request $request){
        $data = [
            'p_name' => $request->p_name,
            'description' => $request->description,
            'price' => $request->price,
            'quantityinstock' => $request->quantityinstock,
        ];
        $this->products->saveProducts($data);
        return back();
    }
}
