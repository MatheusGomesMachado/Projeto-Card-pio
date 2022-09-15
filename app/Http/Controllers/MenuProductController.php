<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Menu;

use App\Models\Product;


class MenuProductController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Menu $menu)
    {
        $menu->products()->attach($request -> get('product_id'));

        return redirect()->route('menus.show', $menu->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu, Product $product)
    {
        $menu->products()->detach($product->id);

        return redirect()->route('menus.show', $menu->id);
    }
}
