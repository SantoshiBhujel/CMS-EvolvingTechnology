<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products= Product::all();
        return view('admin.products.listProduct',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.createProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' =>'required | string', 
            'description' =>'required | string',
            'image' => 'required | image | max:2047 | mimes:jpeg,png,jpg',
            'url' => 'nullable | string',
        ]);

        $product= new Product();
        $this->addToProduct($product, $request);

        return \redirect()->route('product.index')->with('success','Product Added');
    }

    /**
     * Store/ Update in BANNER Table
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    private function addToProduct($product, $request)
    {

        $product->title= $request->title;
        $product->description=  $request->description;
        $product->url = $request->url;

        if($request->file('image'))
        {
            $extension          =   $request->image->getClientOriginalExtension();
            $fileNameToStore    =  'product-'.time().'.'.$extension;
            //$path               =   $request->image->storeAs('public/product_images',$fileNameToStore);
            $path = public_path().'/storage/product_images';
            $upload = $request->file('image')->move($path,$fileNameToStore);
            
            $product->image     =   $fileNameToStore;
        }
        $product->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $product= Product::findOrFail($product->id);
        return view('admin.products.editProduct',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request,[
            'title' =>'required | string', 
            'description' =>'required | string',
            'image' => 'required | image | max:2047 | mimes:jpeg,png,jpg',
            'url' => 'nullable | string',
        ]);

        $product= Product::findOrFail($product->id);
        $this->addToProduct($product, $request);

        return \redirect()->route('product.index')->with('success','Product Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product= Product::findOrFail($product->id);
        $product->delete();
        return \redirect()->route('product.index')->with('success','Product Deleted');
    }
}
