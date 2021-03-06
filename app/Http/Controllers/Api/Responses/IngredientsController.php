<?php

namespace App\Http\Controllers\Api\Responses;

use App\Ingredient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Responses\API\IngredientAPI;
use Validator;

class IngredientsController extends Controller
{
    public function index(Request $request)
    {

        $params = $request->all();

        $query = Ingredient::select();


        $validator = Validator::make($params, [
          'per_page' => 'integer|min:1',
          'lang' => 'string|max:2',
          ],

          [
          'per_page.*' => 'Per page must be integer and positive number.',
          'lang.*' => 'Lang value must me string with max 2 char',
          ]
        );

        if ($validator->fails()) {
          return response()->json(['errors'=>$validator->errors()]);
        }


        if(isset($params['lang']) || isset($params['per_page'])){

        app()->setLocale($params['lang']);

        $per_page = isset($params['per_page']) ? $params['per_page'] : 10;
        $ingredient = $query->paginate($per_page);

         return IngredientAPI::collection($ingredient);

       }else
       {
         return Ingredient::all();
       }


    }

    public function show($id)
    {
        return Ingredient::findOrFail($id);
    }

    public function destroy($id)
    {
        $ingredient = Ingredient::findOrFail($id);
        $ingredient->delete();
        return '';
    }
}
