<?php

namespace App\Http\Controllers\Api\Responses;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Unlu\Laravel\Api\QueryBuilder;


class CategoriesController extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function show($id)
    {
        return Category::findOrFail($id);
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return '';
    }
}
