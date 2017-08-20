<?php

namespace App\Http\Controllers;

//--------------------------------------------------------------------------
// ProductController For CRUD Operations on Product Model
//--------------------------------------------------------------------------

use App\Category;
use App\Product;
use Validator;
use File;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Get All Products
    public function getAll()
    {

        $products = Product::orderByDesc('id')->paginate(5);

        return view('admin.products.all', compact('products'));
    }



    //Add Product View (GET)
    public function addProductGet()
    {
        //get the categories for the <select> element to choose category for the product
        $categories = Category::all();

        return view('admin.products.add', compact('categories'));
    }



    //Add Product to DB (POST)
    public function addProductPost(Request $request)
    {

        //input validation
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|integer',
            'image' => 'required|image',
            'categories' => 'integer',
            'description' => 'required'
        ]);

        //return errors if if exist
        if ($validator->fails())
            return back()->withErrors($validator->errors())->withInput();

        //new object of product
        $product = new Product();

        $product->name = $request->name;

        $product->quantity = $request->quantity;

        $product->category_id = $request->categories;

        $product->price = $request->price;

        $product->description = $request->description;

        $filename = null;

        //add an image for product
        if ($request->hasFile('image')) {
            $filename = str_random(20) . ".png";
            $request->file('image')->move(env('imagePath'), $filename);
        }

        $product->image = $filename;

        //save it
        $product->save();

        return redirect('/admin/products');
    }



    //Delete Product View (GET)
    public function deleteProductGet(Product $product)
    {

        return view('admin.products.delete', compact('product'));
    }



    //Delete Product From DB (POST)
    public function deleteProductPost(Product $product)
    {

        //delete image first
        if (File::exists(env('imagePath')))
            File::Delete(env('imagePath') . $product->image);

        //then delete the product
        $product->delete();

        return redirect('/admin/products');
    }



    //Update Product View (GET)
    public function updateProductGet(Product $product)
    {
        //like the add get all category for the <select> element
        $categories = Category::all();

        return view('admin.products.update', compact('product', 'categories'));
    }



    //Update Product (POST)
    public function updateProductPost(Request $request, Product $product)
    {
        //input validation
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|integer',
            'image' => 'image',
            'categories' => 'integer',
            'description' => 'required'
        ]);

        //return errors if exist
        if ($validator->fails())
            return back()->withErrors($validator->errors())->withInput();

        $product->name = $request->name;

        $product->quantity = $request->quantity;

        $product->category_id = $request->categories;

        $product->description = $request->description;

        $filename = null;
        //if there is image
        if ($request->hasFile('image')) {

            //delete old image
            if (File::exists(env('imagePath')))
                File::Delete(env('imagePath') . $product->image);

            //upload the new one
            $filename = str_random(20) . ".png";
            $request->file('image')->move(env('imagePath'), $filename);

            //update the product image
            $product->image = $filename;
        }

        //update object
        $product->update();

        return redirect('/admin/products');
    }




    //View Product
    public function viewProduct(Product $product)
    {
        return view('admin.products.view', compact('product'));
    }

}
