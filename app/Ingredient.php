<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ingredient
 *
 * @package App
 * @property string $title
 * @property string $slug
 * @property string $language
*/
class Ingredient extends Model
{

use SoftDeletes;
    protected $fillable = ['title', 'slug', 'language_id'];
    public $timestamps = false;
    protected $hidden = ['pivot'];

    /**
     * Set to null if empty
     * @param $input
     */


    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id');
    }

}
