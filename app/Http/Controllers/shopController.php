<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ShopController;


class ShopController extends Controller
{
    public function showShopDetail()
    {
        return view('shopdetail');
    }

}
