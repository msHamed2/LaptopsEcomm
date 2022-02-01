<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductService;
use App\Models\Accessory;
use App\Models\Background;
use App\Models\Brand;
use App\Models\Lap;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService=$productService;
    }

    public function getIndex()
    {

        $back = Background::all();
        $brands = Brand::all();
        $lap = Lap::first();
        $accessories = Accessory::all();
        $background = [];
        $title1 = [];
        $title2 = [];
        $title3 = [];
        $i = 0;
        foreach ($back as $b) {

            $res[$i] = $b->path_image;
            $title1[$i] = $b->title1;
            $title2[$i] = $b->title2;

            $title3[$i] = $b->title3;

            $i++;
        }
        return view('Homepage', compact('brands', 'back'));

//        return view('welcome',compact('background','title1','title2','title3','brands',"accessories"));
    }

    public function getIndexx()
    {
        return view('Homepage');
    }

    /*
     * @Parm  Lap $product
     * @return view
     * */

    public function getProductView(Lap $product)
    {
      $laptops=  $this->productService->getRelatedProducts($product);
        return view('product', compact('product','laptops'));
    }
}

