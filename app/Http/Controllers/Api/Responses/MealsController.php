<?php

namespace App\Http\Controllers\Api\Responses;

use App\Meal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Transform
use App\Http\Responses\API\MealAPI;
use App\Language;

class MealsController extends Controller
{

    public function index(Request $request, Meal $meal)
    {
        $params = $request->all();

        $query = Meal::select();

        if(isset($params['lang'])){
           $lang = Language::where('lang', $params['lang'])->first();
           $language_id = $lang->id;
         }else {
           $language_id = 2; // by default is croatia 'hr' language
         }

        $meals = $query->where('language_id', $language_id);


        // Search for a meal based on their id.
        if ($request->has('id')) {

          $id = $request->input('id');
          $queryBuilder =  $meal->where('id', $id);

            return response()->json([
               'data' => $queryBuilder->first(),
            ]);
        }

        if (isset($params['with'])) {
            $withParams = explode(',', $params['with']);
            $filter = array('tag', 'ingredient', 'category');

            foreach ($withParams as $param) {

                if (in_array($param, $filter, true)) {
                    $query->with($param);
                }
            }
        }

        if (isset($params['category'])) {
            if (is_numeric($params['category'])) {
                $query->where('category_id', $params['category']);
            } elseif ($params['category'] == 'NULL') {
                $query->whereNull('category_id');
            } elseif ($params['category'] == '!NULL') {
                $query->whereNotNull('category_id');
            }
        }

        if (isset($params['tag'])) {
            $tag = explode(',', $params['tag']);
            $query->join('meal_tag', 'meals.id', '=', 'meal_tag.meal_id');
            $query->whereIn('meal_tag.tag_id', $tag);
        }

        $per_page = isset($params['per_page']) ? $params['per_page'] : 10;

        $meals = $query->paginate($per_page);



        // Get the results and return them.
        return MealAPI::collection($meals);
    }


    public function show($id)
    {
        return Meal::findOrFail($id);
    }

    public function destroy($id)
    {
        $meal = Meal::findOrFail($id);
        $meal->delete();
        return '';
    }
}
