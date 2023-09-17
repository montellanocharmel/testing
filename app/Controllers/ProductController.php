<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//use App\Models\ProductModel;

class ProductController extends BaseController
{
    private $product;
    public function __construct()
    {
        $this->product = new \App\Models\ProductModel();
    }

    public function delete($Id)
    {
        $this->product->delete($Id);
        return redirect()->to('/product');
    }
    
    public function save()
    {
        $data = [
            'code' => $this->request->getVar('code'),
            'name' => $this->request->getVar('name'),
            'quantity' => $this->request->getVar('quantity'),
        ];
        $this->product->save($data);
        return redirect()->to('/product');
    }


    public function product($product)
    {
        echo $product;
    }

    public function montellano()
    {
        $data['product'] = $this->product->findAll();
        return view('products', $data);
    }

    public function index()
    {
        //
    }

}
