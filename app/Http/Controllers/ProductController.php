<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * 製品一覧を表示する
     * 
     * @return view
     */
    public function showList() {
        return view('product.list');
    }
}
