<?php namespace Raviraj\Rjgallery\Models;

use Model;
use ValidationException;
use Lang;
use Carbon\Carbon;

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
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    public $rules = [
        'name' => 'required|between:3,64',
        'slug' => ['required', 'regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i', 'unique:raviraj_rjgallery_galleries'],
    ];
    
    /**
     * @var array Attributes that support translation, if available.
     */
    public $translatable = [
        'name',
        'description'
    ];

    /**
     * The attributes that should be mutated to dates.
     * @var array
     */
    protected $dates = ['published_at'];
    
    /**
     * @var array Relations
     */
     public $belongsToMany = [
        'categories' => [
            'Raviraj\Rjgallery\Models\Category',
            'table' => 'raviraj_rjgallery_galleries_categories',
            'order' => 'name'
        ]
    ];


    public $attachMany = [
        'images' => ['System\Models\File', 'order' => 'sort_order'],
    ];

    public function afterValidate()
    {
        if ($this->published && !$this->published_at) {
            throw new ValidationException([
               'published_at' => Lang::get('raviraj.rjgallery::lang.exeption.publish_date_validation')
            ]);
        }
    }

    public function scopeIsPublished($query)
    {
        return $query
            ->whereNotNull('published')
            ->where('published', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<', Carbon::now())
        ;
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
        if (array_key_exists('categories', $this->getRelations())) {
            $params['category'] = $this->categories->count() ? $this->categories->first()->slug : null;
        }
        
        return $this->url = $controller->pageUrl($pageName, $params);
    }

}