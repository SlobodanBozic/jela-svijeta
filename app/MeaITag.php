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
class MeaITag extends Model
{

    protected $table = 'meal_tag';
    protected $fillable = ['meal_id', 'tag_id'];
    public $timestamps = false;


    /**
     * Set to null if empty
     * @param $input
     */


}
