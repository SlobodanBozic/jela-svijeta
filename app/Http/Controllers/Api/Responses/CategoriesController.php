<?php

namespace App\Http\Controllers\Api\Responses;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Http\Responses\API\CategoryAPI;

class CategoriesController extends Controller
{
    public function index(Request $request)
    {
      $params = $request->all();

      $query = Category::select();


      $validator = Validator::make($params, [
        'per_page' => 'integer',
        'lang' => 'string|max:2',
        'category' => 'integer'
        ],

        [
        'per_page.*' => 'Per page must be integer.',
        'lang.*' => 'Lang value must me string with max 2 char.',
        'category.*' => 'Category must be integer number.',
        ]
      );

      if ($validator->fails()) {
        return response()->json(['errors'=>$validator->errors()]);
      }

      if(isset($params['lang']) || isset($params['per_page'])){

      app()->setLocale($params['lang']);

      $per_page = isset($params['per_page']) ? $params['per_page'] : 10;
      $category = $query->paginate($per_page);

       return CategoryAPI::collection($category);

     }else
     {
       return Category::all();   
     }
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
