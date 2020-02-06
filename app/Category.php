<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Category
 *
 * @package App
 * @property string $title
 * @property string $slug
 * @property string $language
*/
class Category extends Model
{
    use SoftDeletes;
    // protected $table = 'categories';
    protected $fillable = ['title', 'slug', 'language_id'];
    public $timestamps = false;


    /**
     * Set to null if empty
     * @param $input
     */

    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id');
    }


}
