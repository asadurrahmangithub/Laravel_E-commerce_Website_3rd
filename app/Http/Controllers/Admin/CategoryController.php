<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.category');
    }
    public function saveCategory(CategoryFormRequest $request){
        $validatedDate = $request->validated();
        $category = new Category();
        $category->name = $validatedDate['name'];
        $category->slug = Str::slug($validatedDate['slug']);
        $category->description = $validatedDate['description'];

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = 'category'.time().'.'.$ext;
            $file->move('adminAssets/assets/category-image/',$fileName);
            $category->image = $fileName;
        }
        $category->meta_title = $validatedDate['meta_title'];
        $category->meta_keyword = $validatedDate['meta_keyword'];
        $category->meta_description = $validatedDate['meta_description'];
        $category->status = $request->status;
        $category->save();
        return redirect('admin/category')->with('message','Category Added Successfully');
    }
}
