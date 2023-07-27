<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;

class AdminController extends Controller
{
     /**
     * Create a new AdminController instance.
     *
     * @return void
     */
    public function __construct(ProductService $product_service)
    {
        $this->product_service = $product_service;
        $this->middleware('admin');
    }

    public function products(){

        $products = $this->product_service->all();

        return response()->json([
            'status' => true,
            $products
        ],200);
    }
}
