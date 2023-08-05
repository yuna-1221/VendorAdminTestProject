<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Products extends Model
{
    public function products(){
        //companiesテーブルからデータを取得
        $products = DB::table("products")->get();
        return $products;
    }

    public function productsList(){
        $products_list = DB::table("products")
        ->join('companies','companies.id', '=', 'products.company_id')
        ->select('products.id',
        'products.img_path',
        'products.product_name',
        'products.price',
        'products.stock',
        'companies.company_name')
        ->get();
        return $products_list;
    }


}
