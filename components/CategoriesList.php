<?php namespace Raviraj\Rjgallery\Components;

use Db;
use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use Raviraj\Rjgallery\Models\Category as categoryList;
class CategoriesList extends ComponentBase
{


     /**
     * @var Collection A collection of categories to display
     */
    public $categories;
    /**
     * @var string Reference to the page name for linking to categories.
     */
    public $categoryPage;
    /**
     * @var string Reference to the current category slug.
     */
    public $currentCategorySlug;


    public function componentDetails()
    {
        return [
            'name'        => 'raviraj.rjgallery::lang.categorylist.name',
            'description' => 'raviraj.rjgallery::lang.categorylist.description'
        ];
    }

    public function defineProperties()
    {
        return  [
            'slug' => [
                'title'       => 'raviraj.rjgallery::lang.categorylist.category_slug',
                'description' => 'raviraj.rjgallery::lang.categorylist.category_slug_description',
                'default'     => '{{ :slug }}',
                'type'        => 'string'
            ],
            'noCategoriesMessage' => [
                'title'         => 'raviraj.rjgallery::lang.categorylist.noCategoriesMessage',
                'description'   => 'raviraj.rjgallery::lang.categorylist.noCategoriesMessage_description',
                'type'          => 'string',
                'default'       => 'No galleries found',
                'showExternalParam' => false
            ],
             'displayEmpty' => [
                'title'       => 'raviraj.rjgallery::lang.categorylist.category_display_empty',
                'description' => 'raviraj.rjgallery::lang.categorylist.category_display_empty_description',
                'type'        => 'checkbox',
                'default'     => 0
            ],
        ];
    }


    public function getCategoryPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName','baseFileName');
    }

    public function onRun()
    {
        $this->prepareProperties();

        $this->categories = $this->page['categories'] = $this->listCategories();


    }

    protected function prepareProperties()
    {
        $this->noCategoriesMessage = $this->page['noCategoriesMessage'] = $this->property('noCategoriesMessage');
    }

    protected function listCategories()
    {
        /*
        * Fetch all categories
        */
        $categories = new categoryList();
        
        $categories = categoryList::orderBy('name');
        if (!$this->property('displayEmpty')) {
            $categories->whereExists(function($query) {
                $prefix = Db::getTablePrefix();
                $query
                    ->select(Db::raw(1))
                    ->from('raviraj_rjgallery_galleries_categories')
                    ->join('raviraj_rjgallery_galleries', 'raviraj_rjgallery_galleries.id', '=', 'raviraj_rjgallery_galleries_categories.gallery_id')
                    ->whereNotNull('raviraj_rjgallery_galleries.published')
                    ->where('raviraj_rjgallery_galleries.published', '=', 1)
                    ->whereRaw($prefix.'raviraj_rjgallery_categories.id = '.$prefix.'raviraj_rjgallery_galleries_categories.category_id')
                ;
            });
        }
        $categories = $categories->get();

        /*
        * Set url's for each gallery
        */

        $categories->each(function($category){
            $category->setUrl($this->categoryPage,$this->controller);
        });

        return $categories;
    }



}