<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getAll(){

        $categories = Category::paginate(5);

        return view('categories.all',compact('categories'));
    }

    public function addCategory(Request $request)
    {
        $category = new Category();

        $category->name = $request->name;

        $category->save();

        return redirect('/categories');
    }

    public function deleteCategoryGet(Category $category)
    {
        return view('categories.delete',compact('category'));
    }

    public function deleteCategoryPost(Category $category)
    {
        $category->delete();

        return redirect('/categories');
    }

    public function updateCategoryGet(Category $category)
    {
        return view('categories.update',compact('category'));
    }

    public function updateCategoryPost(Request $request , Category $category)
    {
        $category->name = $request->name;

        $category->update();

        return redirect('/categories');
    }

    public function categoriesProducts(Category $category)
    {
        $products = $category->products()->get();

        //return $category->first()->name;

        return view('categories.view',compact('products'));
    }
}
