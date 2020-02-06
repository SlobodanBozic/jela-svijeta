<?php
namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Language
 *
 * @package App
 * @property string $title
 * @property string $slug
 * @property string $iso_label
*/
class Language extends Model
{

    protected $fillable = ['title', 'slug', 'iso_label'];
    public $timestamps = false;
}
