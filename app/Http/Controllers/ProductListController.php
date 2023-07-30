<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductListController extends Controller
{
    public function pageLoad(){
        return view("product_list");
    }
}
