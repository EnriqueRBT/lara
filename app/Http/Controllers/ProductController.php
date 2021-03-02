<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
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
        return view('products.index');
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
        // Esto de abajo da error: SQLSTATE[HY093]: Invalid parameter number (SQL: insert into products (name,description,price) values (name,description,price))
        // DB::insert('insert into products (name,description,price) values (name,description,price)', [1, 'Dayle']);

        // Esto da este error: Object of type Illuminate\Http\Request is not callable

        // DB::table('products')->insert([
        //     "name" => $request()->input('name'),
        //     "description" => $request()->input('description'),
        //     "price" => $request()->input('price'),
        // ]);

        DB::table('products')->insert([
            "name" =>  $request->input('name'),
            "description" =>  $request->input('description'),
            "price" => $request->input('price'),
        ]);

        return "Producto añadido";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('products.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('products.update');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return view('products.destroy');
    }
}
