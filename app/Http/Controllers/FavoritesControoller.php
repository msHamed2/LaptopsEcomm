<?php

namespace App\Http\Controllers;

use App\Models\Lap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class FavoritesControoller extends Controller
{

    public function addtocart(Request $request)
    {
        $lap_id = $request->input('lap_id');

//        $quantity = $request->input('quantity');

        if(Cookie::get('favorite_cart'))
        {
            $cookie_data = stripslashes(Cookie::get('favorite_cart'));
            $cart_data = json_decode($cookie_data, true);
        }
        else
        {
            $cart_data = array();
        }

        $item_id_list = array_column($cart_data, 'item_id');
        $prod_id_is_there = $lap_id;

        if(in_array($prod_id_is_there, $item_id_list))
        {
            foreach($cart_data as $keys => $values)
            {
                if($cart_data[$keys]["item_id"] == $lap_id)
                {
//                    $cart_data[$keys]["item_quantity"] = $request->input('quantity');
                    $item_data = json_encode($cart_data);
                    $minutes = 60;
                    Cookie::queue(Cookie::make('favorite_cart', $item_data, $minutes));
                    return response()->json(['status'=>'"'.$cart_data[$keys]["item_name"].'" Already Added to Cart','status2'=>'2']);
                }
            }
        }
        else
        {
            $products = Lap::find($lap_id);
            $prod_name = $products->name;
            $prod_image = $products->image1;
            $priceval = $products->price;

            if($products)
            {
                $item_array = array(
                    'item_id' => $lap_id,
                    'item_name' => $prod_name,
//                    'item_quantity' => $quantity,
                    'item_price' => $priceval,
                    'item_image' => $prod_image
                );
                $cart_data[] = $item_array;

                $item_data = json_encode($cart_data);
                $minutes = 60;
                Cookie::queue(Cookie::make('favorite_cart', $item_data, $minutes));
                return response()->json(['status'=>'"'.$prod_name.'" Added to Cart']);
            }
        }
    }
    public function cartload(Request $request)
    {
        if(Cookie::get('favorite_cart'))
        {
            $cookie_data = stripslashes(Cookie::get('favorite_cart'));
            $cart_data = json_decode($cookie_data, true);
            $totalcart = count($cart_data);

            echo json_encode(array('totalcart' => $totalcart)); die;
            return;
        }
        else
        {
            $totalcart = "0";
            echo json_encode(array('totalcart' => $totalcart)); die;
            return;
        }

    }
    public function index()
    {
        $cookie_data = stripslashes(Cookie::get('favorite_cart'));
        $cart_data = json_decode($cookie_data, true);
        return view('Favorite.Favorite')
            ->with('cart_data',$cart_data)
            ;
    }
    public function Clear(){
        Cookie::queue(Cookie::forget('favorite_cart'));
        return redirect("/");
    }
}
