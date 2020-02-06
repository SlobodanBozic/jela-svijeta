<?php

namespace App\Http\Controllers\Api\Responses;

use App\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Unlu\Laravel\Api\QueryBuilder;


class LanguagesController extends Controller
{
    public function index()
    {
        return Language::all();
    }

    public function show($id)
    {
        return Language::findOrFail($id);
    }

    public function destroy($id)
    {
        $language = Language::findOrFail($id);
        $language->delete();
        return '';
    }
}
