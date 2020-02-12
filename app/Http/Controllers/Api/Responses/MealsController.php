<?php

namespace App\Http\Controllers\Api\Responses;

use App\Meal;
use App\MealTranslation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Carbon\Carbon;

use Validator;

// Transform
use App\Http\Responses\API\MealAPI;


class MealsController extends Controller
{

    public function index(Request $request, Meal $meal)
    {
        $params = $request->all();

        $validator = Validator::make($params, [
          'per_page' => 'integer',
          'lang' => 'string|max:2',
          'diff_time' => 'numeric',
          'tags'=> 'integer',
          'category'=> 'integer',
          'ingredients' => 'integer',
          'with' => 'string'
          ],

          [
          'per_page.*' => 'Per page must be integer.',
          'lang.*' => 'Lang value must me string with max 2 char',
          'diff_time.*' => 'Difftime must be integer number',
          'tags.*' => 'Difftime must be integer number',
          'category.*' => 'Difftime must be integer number',
          'ingredients.*' => 'Difftime must be integer number',
          'with.*' => 'Difftime must be string.Example: &with=category,tag,ingredient',
          ]
        );

          if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()]);
          }

        $query = Meal::select();

        if(isset($params['lang'])){

        app()->setLocale($params['lang']);

      }else{
        app()->setLocale('hr');
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

        if (isset($params['diff_time'])) {

            $query_diff_time = Meal::select()->first();
            $data = Carbon::createFromTimestamp($params['diff_time'])->toDateTimeString();

            $query_diff_time->whereDate('created_at','>=',$data)->whereDate('updated_at','>',$data)->update(['status' => 'created']);
            $query_diff_time->whereDate('updated_at','<=',$data)->update(['status' => 'modified']);
            $query_diff_time->whereDate('deleted_at','<=',$data)->update(['status' => 'deleted']);
        }

        if (isset($params['tag'])) {
            $tag = explode(',', $params['tag']);
            $query->join('meal_tag', 'meals.id', '=', 'meal_tag.meal_id');
            $query->whereIn('meal_tag.tag_id', $tag);
        }


        $per_page = isset($params['per_page']) ? $params['per_page'] : 10;
        $meals = $query->paginate($per_page);

        // Get the results and return them.
        return $meals;



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
