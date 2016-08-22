<?php namespace Raviraj\Rjgallery\Models;

use Model;
use Raviraj\Rjgallery\Models\Gallery;

/**
 * Gallery Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    /**
     * @var string The database table used by the model.
     */
    public $table = 'raviraj_rjgallery_categories';

    
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    public $rules = [
        'name' => 'required|between:3,64',
        'slug' => 'required|between:3,64|unique:raviraj_rjgallery_categories',
    ];
    
    /**
     * @var array Attributes that support translation, if available.
     */
    public $translatable = [
        'name',
        'description'
    ];

    /**
     * @var array Relations
     */
   
    public $belongsToMany = [
        'galeries' => ['Raviraj\Rjgallery\Models\Gallery',
                'table'  => 'raviraj_rjgallery_galleries_categories',
                'order'  => 'published_at desc',
                'scope'  => 'isPublished'
        ]
    ];

     public function beforeValidate()
    {
        // Generate a URL slug for this model
        if (!$this->exists && !$this->slug)
            $this->slug = Str::slug($this->name);
    }

    public function afterDelete()
    {
        $this->galeries()->detach();
    }

    public function getGalleriesCountAttribute()
    {
        return $this->galeries()->count();
    }


    /**
     * Sets the "url" attribute with a URL to this object
     * @param string $pageName
     * @param Cms\Classes\Controller $controller
     */
    public function setUrl($pageName, $controller)
    {
        $params = [
            'id' => $this->id,
            'slug' => $this->slug,
        ];
        return $this->url = $controller->pageUrl($pageName, $params);
    }


}