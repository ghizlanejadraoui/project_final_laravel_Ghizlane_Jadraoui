<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $menus = Menu::paginate(4);
        return view('menu.menu', compact("menus") );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        request()->validate([
            "name"=>'required',
            "price"=>'required',
            "description"=>'required',
            "image"=> "required",
        ]);

        $image = $request->file("image");
        $filename =  $image->hashName();
        $image->storeAs("public/img/" . $filename);

        Menu::create([
            "name"=>$request -> name,
            "price"=>$request -> price,
            "description"=>$request -> description,
            "image"=>$filename ,
        ]);
        return view("admin.admin");
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        //
        request()->validate([
            "name"=>'required',
            "price"=>'required',
            "description"=>'required',
            "image" => "required",
        ]);

        $uploadedFile = $request->file("image");
        $filename = $uploadedFile->hashName();
        $uploadedFile->move("storage/img", $filename);

        $menu->update([
            "name"=>$request->name,
            "price"=>$request->price,
            "description"=>$request->description,
            "image"=>$filename, 
        ]);


        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $menu = Menu::findOrFail($id);
        $menu->delete();
    
        return redirect()->route('admin.index')->with('success', 'menu deleted successfully.');
    }
}
