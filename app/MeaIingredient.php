<?php
namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Tag
 *
 * @package App
 * @property string $title
 * @property string $slug
 * @property string $language
*/
class MeaIingredient extends Model
{

    protected $table = 'meal_ingredient';
    protected $fillable = ['meal_id', 'ingredient_id'];
    public $timestamps = false;


    /**
     * Set to null if empty
     * @param $input
     */


}
