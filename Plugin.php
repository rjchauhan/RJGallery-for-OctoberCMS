<?php namespace Raviraj\Rjgallery;

use App;
use Event;
use Backend;
use System\Classes\PluginBase;

/**
 * rjgallery Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'RjGallery',
            'description' => 'Create a photo gallery with full screen preview and slideshow',
            'author'      => 'Raviraj Chauhan',
            'icon'        => 'icon-picture-o'
        ];
    }

    public function registerComponents()
    {
        return [
            'Raviraj\Rjgallery\Components\Gallery' => 'gallery',
        ];
    }

    public function registerNavigation()
    {
        return [
            'gallery' => [
                'label' => 'RjGallery',
                'url'   => Backend::url('raviraj/rjgallery/galleries'),
                'icon'        => 'icon-picture-o',
                'permissions' => ['raviraj.*'],
                'order'       => 500,
            ],
        ];
    }

}
