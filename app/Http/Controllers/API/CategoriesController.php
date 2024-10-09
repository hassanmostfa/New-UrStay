<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    // Get All Categories
    public function getAllCategories()
    {
        $categories = Category::all();
        return response()->json($categories);
    }
}
