<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $isExist = Product::select("*")
        ->where("name", $request->name)
        ->exists();

        if ($isExist) {
        return('El producto ya existe');
        }else{
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->bbdate = $request->bbdate;
        $product->photo = $request->file('photo')->store('public');

        $product->save();

        return redirect()->route('products.index')
        ->with('success', 'El producto se ha creado.');
        }
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show (Product $product)
    {
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

// Esta funcion no puede pasar por el modelo para que no se cambie el formato de la
// fecha y así que el value del form pueda recoger la fecha almacenada

    public function edit ($id)
    {
        $product = DB::table('products')->where('id',$id)->first();
        return view('products.edit',compact('product'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // DB::table('products')->where('id',$id)->update([
        //     "name" =>  $request->input('name'),
        //     "description" =>  $request->input('description'),
        //     "price" => $request->input('price'),
        //     "updated_at" => new Carbon(),
        // ]);
        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->bbdate = $request->bbdate;
        $product->photo = $request->file('photo')->store('');
        $product->save();


        return redirect()->route('products.index')
        ->with('success', 'El producto se ha actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
  
        Product::destroy($id);
        return redirect()->route('products.index')
        ->with('success', 'El producto ha sido eliminado.');

    }
}
