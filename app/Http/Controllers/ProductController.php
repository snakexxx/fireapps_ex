<?php
/**
 * Created by PhpStorm.
 * User: buicongdang
 * Date: 12/18/17
 * Time: 5:34 PM
 */

namespace App\Http\Controllers;


use App\Services\SpfService;

class ProductController
{
    public function index()
    {
        $accessToken = session('accessToken');
        $shopDomain = session('shopDomain');
        $spfService = new SpfService($shopDomain, $accessToken);
//        dd($spfService);
        $products = $spfService->getRequest('products.json');
        return view('product.index', compact('products'));
    }
}