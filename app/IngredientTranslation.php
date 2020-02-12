<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model as Eloquent;


class IngredientTranslation extends Eloquent {

    public $timestamps = false;
    protected $fillable = ['title','slug'];

}
