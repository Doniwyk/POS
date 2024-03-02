<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($category)
    {
        $categories = ['baby-kid', 'beauty-health', 'food-beverage', 'home-care'];

        if (in_array($category, $categories)) {
            return view($category);
        } else {
            abort(404);        
        }
    }
}
