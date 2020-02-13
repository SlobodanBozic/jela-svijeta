<?php

namespace App\Http\Controllers\Api\Responses;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Http\Responses\API\TagAPI;

class TagsController extends Controller
{
    public function index(Request $request)
    {

      $params = $request->all();

      $query = Tag::select();


      $validator = Validator::make($params, [
        'per_page' => 'integer',
        'lang' => 'string|max:2',
        ],

        [
        'per_page.*' => 'Per page must be integer.',
        'lang.*' => 'Lang value must me string with max 2 char.',
        ]
      );

      if ($validator->fails()) {
        return response()->json(['errors'=>$validator->errors()]);
      }


      if(isset($params['lang']) || isset($params['per_page'])){

      app()->setLocale($params['lang']);

      $per_page = isset($params['per_page']) ? $params['per_page'] : 10;
      $tag = $query->paginate($per_page);

       return TagAPI::collection($tag);

     }else
     {
       return Tag::all();
     }
    }

    public function show($id)
    {
        return Tag::findOrFail($id);
    }


    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();
        return '';
    }
}
