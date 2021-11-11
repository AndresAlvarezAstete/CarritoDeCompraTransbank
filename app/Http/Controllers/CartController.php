<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

use App\Models\Cart_db;

class CartController extends Controller
{
    public function shop()
    {
        $products = Product::all();
        
        return view('shop')->withTitle('CUBA STORE | SHOP')->with(['products' => $products]);
    }

    public function cart()
    {
        
        $cartCollection = \Cart::getContent();
        
        return view('cart')->withTitle('CUBA STORE | CART')->with(['cartCollection' => $cartCollection]);
    }

    public function add(Request $request)
    {
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->img,
                'slug' => $request->slug
            )
        ));

        //Save DB
        $cart = new Cart_db();
        $cart->name = $request->name;
        $cart->price = $request->price;
        $cart->quantity = $request->quantity;
        $cart->image = $request->img;
        $cart->slug = $request->slug;
        $cart->product_id = $request->id;
        $cart->save();

        return redirect()->route('cart.index')->with('success_msg', 'Item is Added to Cart!');
    }

    public function remove(Request $request)
    {
        \Cart::remove($request->id);
        $cart = Cart_db::where('product_id', $request->id)->delete();

        return redirect()->route('cart.index')->with('success_msg', 'Item is removed!');
    }

    public function update(Request $request)
    {
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));


        $cart = Cart_db::where('product_id', $request->id)->first();

        $cart->quantity = $request->quantity;
        $cart->save();

        return redirect()->route('cart.index')->with('success_msg', 'Cart is Updated!');
    }

    public function clear()
    {
        \Cart::clear();
        $cart = Cart_db::query()->delete();
        //Mymodel::query()->delete();


        return redirect()->route('cart.index')->with('success_msg', 'Cart is cleared!');
    }    
}