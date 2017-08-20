<?php

namespace App\Http\Controllers;

//--------------------------------------------------------------------------
// CategoryController For CRUD Operations on Category Model
//--------------------------------------------------------------------------

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //View Category With Pagination = 5
    public function getAll(){

        $categories = Category::orderByDesc('id')->paginate(5);

        return view('admin.categories.all',compact('categories'));
    }

    //Add Category to Category Model
    public function addCategory(Request $request)
    {
        $category = new Category();

        $category->name = $request->name;

        $category->save();

        return redirect('admin/categories');
    }

    //Delete Category View (GET)
    public function deleteCategoryGet(Category $category)
    {
        return view('admin.categories.delete',compact('category'));
    }

    //Delete Category From DB (POST)
    public function deleteCategoryPost(Category $category)
    {
        $category->delete();

        return redirect('admin/categories');
    }

    //Update Category View (GET)
    public function updateCategoryGet(Category $category)
    {
        return view('admin.categories.update',compact('category'));
    }

    //Update Category (POST)
    public function updateCategoryPost(Request $request , Category $category)
    {
        $category->name = $request->name;

        $category->update();

        return redirect('admin/categories');
    }

    //Get Category Products
    public function categoriesProducts(Category $category)
    {
        //get all products for this category object
        $products = $category->products()->orderBy('id','DESC')->get();

        return view('admin.categories.view',compact('products'));
    }
}
