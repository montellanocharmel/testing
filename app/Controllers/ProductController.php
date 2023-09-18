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

    public function edit($Id)
    {
        $data = [
            'product' => $this->product->findAll(),
            'pro' => $this->product->where('Id', $Id)->first(),           
        ];
        return view('products', $data);
    }
    
    public function save()
    {   
        $Id =$_POST['Id'];
        $data = [
            'code' => $this->request->getVar('code'),
            'name' => $this->request->getVar('name'),
            'quantity' => $this->request->getVar('quantity'),
        ];
        if($Id != null){
           $this->product->set($data)->where('Id', $Id)->update();
        }
        else{
             $this->product->save($data);
        }
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
