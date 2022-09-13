<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();

        return view('menus.index',['menus'=> $menus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuRequest $request)
    {
        $data = $request->validated();

        $data['establishment_id'] = \Auth::user()->establishment_id;

        $data['is_active'] = ($data['is_active'] ??'') == 'on';

        Menu::create($data);

        if ($request->hasFile('image')){

          $imageFile = $request->file('image');


          $image_path = $imageFile->storeAs(
            "image/menus/$menu->id",
            'image.jpg',
            'public',
          );
          $data['image_path'] = $image_path;
          $menu->update(['image_path' => $image_path]);
        }

        return redirect()->route('menus.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
      $addableProducts = Product::where('establishment_id', $menu->establishment_id)
        ->whereDoesntHave('menus',function($query) use ($menu) {
          $query->where('menus.id', $menu->id);
      })
        ->get();

      return view('menus.show',['menu'=> $menu, 'addableProducts' => $addableProducts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        return view('menus.edit',['menu'=> $menu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenuRequest $request, Menu $menu)
    {

      $data = $request->validated();

      $data['is_active'] = ($data['is_active'] ??'') == 'on';

      $menu->update($data);

      return redirect()->route('menus.show', $menu->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();

        return redirect()->route('menus.index');
    }
}
