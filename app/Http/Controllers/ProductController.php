<?php

namespace App\Http\Controllers;
use App\Models\Admin\Product;
use App\Models\Admin\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */

    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function creat()
    {
        $categories = Category::all();
        return view('admin.products.creat' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Response $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;

        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->category_id = $request->category;
        $product->details = $request->details;
        $product->save();

        return redirect()->back();

    }

    /** Show the form for editing the specified resource
     * @param \App\Models\Admin\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $category_name = Category::where('id',$product->category_id)->first();
        return view('admin.products.edit', compact('product','categories','category_name'));

    }

    /** Update the specified resource in storage
     * @param \Illuminate\Http\Request $request
     * @param \\App\Models\Admin\Category $category
     * @return \Illuminate\Http\Response
     */

     public function update(Request $request, $id)
     {
        $product = Product::find($id);

        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->category_id = $request->category;
        $product->details = $request->details;
        $product->save();

        return redirect('products');
     }

     /**
      * Remove the specified resource from storage.
      * @param \App\Models\Admin\Product $product
      * @return \Illuminate\Http\Response
      */

      public function destroy($id)
      {
         Product::find($id)->delete();

         return redirect()->back();
      }

}
