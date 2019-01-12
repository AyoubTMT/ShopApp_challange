<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Shop;
use Illuminate\Http\Request;

class ShopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->guest()) {
            $shops = Shop::orderby('location','asc')->paginate(9); 
        } else {
            // if it's a user, we should get shops that are not liked yet
            // this request will return an array with key-value but just want the value
            $preferedShops = DB::table('preferedshops')->select('shop_id')->where('user_id',auth()->user()->id)->get()->toArray();
            // so we put 'shop_id' values of table 'preferedshops' in an array 
            $myArray = [];
            foreach ($preferedShops as $preferedShop) {
                array_push($myArray, $preferedShop->shop_id);
            }
            // request of shops that are not like yet
            $shops = Shop::whereNotIn('id', $myArray)->orderby('location','asc')->paginate(9);
        }

        return view('pages.shops')->with('shops',$shops);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        return redirect('/');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        return redirect('/');
    }
}
