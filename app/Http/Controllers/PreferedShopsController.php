<?php

namespace App\Http\Controllers;

use App\PreferedShop;
use App\Shop;
use Illuminate\Http\Request;

class PreferedShopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->guest()) {
            return redirect('/login')->with('error','Unauthorized page !!!');
        } else {
            // select the current user's prefered shops
            $preferedShops = PreferedShop::join('shops', 'shops.id', '=', 'preferedshops.shop_id')
                ->where('preferedshops.user_id',auth()->user()->id)
                ->select('shops.shopname', 'preferedshops.id')
                ->paginate(9);
            return view('pages.preferedShops')->with('preferedShops', $preferedShops);
        }        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('/preferedShops');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request  $request)
    {
        $preferedShop = new PreferedShop();
        $preferedShop->shop_id = $request->shop_id;
        $preferedShop->user_id  = auth()->user()->id;
        $preferedShop->save();
        return redirect('/shops')->with('success','Shop Liked');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PreferedShop  $preferedShop
     * @return \Illuminate\Http\Response
     */
    public function show(PreferedShop $preferedShop)
    {
        return redirect('/preferedShops');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PreferedShop  $preferedShop
     * @return \Illuminate\Http\Response
     */
    public function edit(PreferedShop $preferedShop)
    {
        return redirect('/preferedShops');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PreferedShop  $preferedShop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PreferedShop $preferedShop)
    {
        return redirect('/preferedShops');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PreferedShop  $preferedShop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $preferedShop = PreferedShop::find($id);
        
        //check for user
        if (!auth()->check()) {
            return redirect('/login')->with('error','Unauthorized page !!!');
        }

        $preferedShop->delete();         
        return redirect('/preferedShops')->with('success','Shop Removed');
    }
}
