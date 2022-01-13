<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use App\Models\Background;
use App\Models\Brand;
use App\Models\Lap;
use Illuminate\Http\Request;

class ProductController extends Controller
{
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
        return view('test', compact('brands','back'));

//        return view('welcome',compact('background','title1','title2','title3','brands',"accessories"));
    }

    public function getIndexx()
    {
        return view('test');
    }

    public function getProductView(Request $request, Lap $id)
    {
        return view('product');
    }
}

