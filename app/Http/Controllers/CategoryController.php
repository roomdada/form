<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController
{
    public function show($id)
    {
        $category = Category::with('events')->find($id);
        return view('categories.show', compact('category'));
    }
}