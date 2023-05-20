<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
     $categories = Category::all();
     return view('admin.categories.index', compact('categories'));
 }

 /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function creat()
 {
     return view('admin.categories.creat');
 }

 /**
  * Store a newly created resource in storage.
  *
  * @param \Illuminate\Http\Response $request
  * @return \Illuminate\Http\Response
  */
 public function store(Request $request)
 {
     $categories = new Category;

     $categories->name = $request->name;

     $categories->save();

     return redirect()->back();

 }

 /** Show the form for editing the specified resource
  * @param \App\Models\Admin\Product $product
  * @return \Illuminate\Http\Response
  */
 public function edit($id)
 {
     $category = Category::find($id);
     return view('admin.categories.edit', compact('category'));

 }

 /** Update the specified resource in storage
  * @param \Illuminate\Http\Request $request
  * @param \\App\Models\Admin\Category $category
  * @return \Illuminate\Http\Response
  */

  public function update(Request $request, $id)
  {
     $categories = Category::find($id);

     $categories->name = $request->name;
     $categories->quantity = $request->quantity;
     $categories->price = $request->price;
     $categories->category_id = $request->category;
     $categories->details = $request->details;
     $categories->save();

     return redirect('categories');
  }

  /**
   * Remove the specified resource from storage.
   * @param \App\Models\Admin\Product $product
   * @return \Illuminate\Http\Response
   */

   public function destroy($id)
   {
      Category::find($id)->delete();

      return redirect()->back();
   }

}
