<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;
use App\Models\Products;

class ProductListController extends Controller
{
    public function pageLoad(){
        $companies_model = new Companies();
        $products_model = new Products();
        $companies = $companies_model->companies();
        $products = $products_model->products();
        $productsList = $products_model->productsList();
        return view("product_list",["companies" => $companies,"products" => $products,"productsList" =>$productsList]);
    }
}
