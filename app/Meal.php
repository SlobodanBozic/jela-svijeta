<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Meal
 *
 * @package App
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property string $category
*/
class Meal extends Model
{
    use \Dimsav\Translatable\Translatable;
    use SoftDeletes;
    protected $fillable = ['category_id', 'slug', 'status'];
    public $translatedAttributes = ['title', 'description'];
    protected $hidden = ['translations', 'deleted_at','category_id'];

    /**
     * Set to null if empty
     * @param $input
     */


    public function category() // Inverse One To One Relationship
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function tag()
    {
        return $this->belongsToMany(Tag::class, 'meal_tag');
    }

    public function ingredient()
    {
        return $this->belongsToMany(Ingredient::class, 'meal_ingredient');
    }

}
