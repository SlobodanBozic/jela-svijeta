<?php

namespace App\Http\Controllers\Api\Responses;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use Unlu\Laravel\Api\QueryBuilder;


class TagsController extends Controller
{
    public function index()
    {
        return Tag::all();
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
