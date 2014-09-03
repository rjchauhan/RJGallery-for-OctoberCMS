<?php namespace Raviraj\Rjgallery\Components;

use Cms\Classes\ComponentBase;
use Raviraj\Rjgallery\Models\Gallery as Galleries;

class Gallery extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Gallery',
            'description' => 'Create a photo gallery with full screen preview and slideshow'
        ];
    }

    public function defineProperties()
    {
        return [
            'idGallery' => [
                'title'        => 'Gallery',
                'description'  => 'Choose the gallery that will display',
                'type'         => 'dropdown',
            ],
            'lang' => [
                'title'             => 'Title',
                'description'       => 'Title of the gallery',
                'type'              => 'string',
                'default'           => 'All Photos',
            ],
            'jqueryinject' => [
                'title'             => 'jQuery Inject',
                'description'       => 'Whether to inject jQuery or not',
                'type'              => 'dropdown',
                'default'           => 'yes',
                'options'           => ['yes'=>'Yes','no'=>'No'],
            ],
            'thumbnail' => [
                'title'             => 'Thumbnail Preview',
                'description'       => 'Whether to display a button to show thumbnails',
                'type'              => 'dropdown',
                'default'           => 'true',
                'group'             => 'Options',
                'options'           => ['true'=>'True','false'=>'False'],
            ],
            'caption' => [
                'title'             => 'Image Caption',
                'description'       => 'Enables image captions',
                'type'              => 'dropdown',
                'default'           => 'true',
                'group'             => 'Options',
                'options'           => ['true'=>'True','false'=>'False'],
            ],
            'desc' => [
                'title'             => 'Image Description',
                'description'       => 'Enables image descriptions',
                'type'              => 'dropdown',
                'default'           => 'true',
                'group'             => 'Options',
                'options'           => ['true'=>'True','false'=>'False'],
            ],
            'counter' => [
                'title'             => 'Image Counter',
                'description'       => 'Shows total number of images and index number of current image',
                'type'              => 'dropdown',
                'default'           => 'true',
                'group'             => 'Options',
                'options'           => ['true'=>'True','false'=>'False'],
            ],
            'controls' => [
                'title'             => 'Navigation Controls',
                'description'       => 'Whether to display PREV/NEXT buttons',
                'type'              => 'dropdown',
                'default'           => 'true',
                'group'             => 'Options',
                'options'           => ['true'=>'True','false'=>'False'],
            ],
            'preload' => [
                'title'             => 'Preload Images',
                'description'       => 'Number of preload images before and after the current image',
                'type'              => 'string',
                'validationPattern' => '^[\d]+$',
                'validationMessage' => 'Invalid format',
                'default'           => '1',
                'group'             => 'Options',
            ],

            'mode' => [
                'title'             => 'Transition',
                'description'       => 'Type of transition between images',
                'type'              => 'dropdown',
                'default'           => 'slide',
                'group'             => 'Effects',
                'options'           => ['slide'=>'Slide','fade'=>'Fade'],
            ],
            'speed' => [
                'title'             => 'Transition Speed',
                'description'       => 'Transition duration (in ms)',
                'type'              => 'string',
                'validationPattern' => '^[\d]+$',
                'validationMessage' => 'Invalid format',
                'default'           => '500',
                'group'             => 'Effects',
            ],
            'loop' => [
                'title'             => 'Loop',
                'description'       => 'Allows to go to the other end of the gallery at first/last image',
                'type'              => 'dropdown',
                'default'           => 'true',
                'group'             => 'Effects',
                'options'           => ['true'=>'True','false'=>'False'],
            ],
            'auto' => [
                'title'             => 'Autoplay',
                'description'       => 'Enables slideshow autoplay',
                'type'              => 'dropdown',
                'default'           => 'false',
                'group'             => 'Effects',
                'options'           => ['true'=>'True','false'=>'False'],
            ],
            'pause' => [
                'title'             => 'Pause Time',
                'description'       => 'Delay (in ms) between transitions in slideshow mode',
                'type'              => 'string',
                'validationPattern' => '^[\d]+$',
                'validationMessage' => 'Invalid format',
                'default'           => '2000',
                'group'             => 'Effects',
            ],
            'escKey' => [
                'title'             => 'ESC Close',
                'description'       => 'Whether gallery should be closed when user presses "Esc"',
                'type'              => 'dropdown',
                'default'           => 'true',
                'group'             => 'Effects',
                'options'           => ['true'=>'True','false'=>'False'],
            ],

            'height' => [
                'title'             => 'Thumbnail Height',
                'description'       => 'Main thumbnail height in pixels',
                'type'              => 'string',
                'validationPattern' => '^[\d]+$',
                'validationMessage' => 'Invalid format',
                'default'           => '70',
                'group'             => 'Thumbnail Options',
            ],
            'width' => [
                'title'             => 'Thumbnail Width',
                'description'       => 'Main thumbnail width in pixels',
                'type'              => 'string',
                'validationPattern' => '^[\d]+$',
                'validationMessage' => 'Invalid format',
                'default'           => '100',
                'group'             => 'Thumbnail Options',
            ],
            'resizer' => [
                'title'             => 'Resizer Mode',
                'description'       => 'How thumbnails should be resized',
                'type'              => 'dropdown',
                'default'           => 'auto',
                'options'           => ['auto' => 'Auto', 'exact' => 'Exact', 'portrait' => 'Portrait', 'landscape' => 'Landscape', 'crop' => 'Crop'],
                'group'             => 'Thumbnail Options',
            ],
        ];
    }


    public function getidGalleryOptions()
    {
        return Galleries::select('id', 'name')->orderBy('name')->get()->lists('name', 'id');
    }

    public function onRun()
    {
        if($this->propertyOrParam('jqueryinject')=="yes")
        {
            $this->addJs('assets/js/jquery-1.9.1.min.js');
        }
        $this->addJs('assets/js/lightGallery.min.js');
        $this->addCss('assets/style/lightGallery.css');
    }

    public function onRender()
    {
        $gallery = new Galleries;
        $this->gallery = $this->page['gallery'] = $gallery->where('id', '=', $this->propertyOrParam('idGallery'))->first();

        foreach ($this->getProperties() as $key => $value) {
            $this->page[$key] = $value;
        }
    }

}
