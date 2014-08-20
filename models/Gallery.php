<?php namespace Raviraj\Rjgallery\Models;

use Model;

/**
 * Gallery Model
 */
class Gallery extends Model
{
    use \October\Rain\Database\Traits\Validation;
    /**
     * @var string The database table used by the model.
     */
    public $table = 'raviraj_rjgallery_galleries';

    public $rules = [
        'name' => 'required|between:3,64',
    ];
    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [
        'images' => ['System\Models\File', 'order' => 'sort_order'],
    ];

}