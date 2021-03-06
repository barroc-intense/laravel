<?php

namespace App\Http\Controllers;

use App\Category;
use App\purchases;
use Illuminate\Http\Request;
use App\Supplies;
class PurachsesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Supplies = Supplies::All();
        return view('purchases/show', ['Supplies' => $Supplies]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(purachses $Supplies)
    {
        $purchases = purchases::all();

        return view('Purachases/show', ['Supplies' => $Supplies, 'product' => $purchases]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $products = supplies::find($id);

        return view('Purchases/edit', [
            'products' => $products
        ]);

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
        $product = supplies::find($id);


        \DB::table('supplies')
            ->where('id', $id)
            ->update([
            'name' => $request->name,
            'price' => $request->price
        ]);


        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
