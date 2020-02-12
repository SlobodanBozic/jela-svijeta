<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tag
 *
 * @package App
 * @property string $title
 * @property string $slug
*/
class Tag extends Model
{
    use \Dimsav\Translatable\Translatable;
    use SoftDeletes;

    protected $fillable = [];
    public $translatedAttributes = ['title', 'slug'];
    public $timestamps = false;
    protected $hidden = ['pivot','translations'];


    /**
     * Set to null if empty
     * @param $input
     */

}
