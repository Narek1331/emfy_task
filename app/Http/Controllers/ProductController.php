<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use Illuminate\Support\Facades\Auth;
use App\Services\ProductService;

class ProductController extends Controller
{
    /**
     * Create a new ProductController instance.
     *
     * @return void
     */
    public function __construct(ProductService $product_service)
    {
        $this->product_service = $product_service;
    }

    public function index(){

        $datas = [];

        if(Auth::user()->isAdmin){
            $datas = $this->product_service->all();
        }else{
            $datas = $this->product_service->getByUserId(Auth::user()->id); // or Auth::user()->products;
        }

        return response()->json([
            'status' => true,
            'data' => $datas
        ],200);
    }

    public function store(StoreRequest $data){

        $data = $this->product_service->store($data['name'],$data['description'],$data['count'],Auth::user()->id);

        return response()->json([
            'status' => true,
            'message' => 'Product created successfully',
            'data' => $data
        ],201);
    }

    public function update($product_id,UpdateRequest $data){

        $product = $this->product_service->updateByProductId($data,$product_id,Auth::user()->id);

        return response()->json([
            'status' => true,
            'message' => 'Product updated successfully',
            'data' => $product
        ],200);
    }

    public function destroy($product_id){

        $product = $this->product_service->destroyByProductId($product_id,Auth::user()->id);

        return response()->json([
            'status' => true,
            'message' => 'Product destroyed successfully',
        ],200);
    }

    public function only_names(){

        $datas = $this->product_service->getOnlyNames();

        return response()->json([
            'status' => true,
            'data' => $datas
        ],200);
    }

    public function single($product_id){

        $data = $this->product_service->getById($product_id);

        return response()->json([
            'status' => true,
            'data' => $data
        ],200);
    }
}
