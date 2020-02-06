<?php

namespace App\Http\Controllers\Api\Responses;

use App\Ingredient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Unlu\Laravel\Api\QueryBuilder;

use App\Http\Responses\API\IngredientAPI;
use App\Language;

class IngredientsController extends Controller
{
    public function index(Request $request)
    {

        $params = $request->all();

        $query = Ingredient::select();

        if(isset($params['lang'])){

        $lang = Language::where('lang', $params['lang'])->first();
        $language_id = $lang->id;

         $ingredients = $query->where('language_id', $language_id)->get();
         return IngredientAPI::collection($ingredients);

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
