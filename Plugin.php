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
            'name'        => 'raviraj.rjgallery::lang.plugin.name',
            'description' => 'raviraj.rjgallery::lang.plugin.description',
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
                'label' => 'raviraj.rjgallery::lang.menu.name',
                'url'   => Backend::url('raviraj/rjgallery/galleries'),
                'icon'        => 'icon-picture-o',
                'permissions' => ['raviraj.rjgallery.*'],
                'order'       => 500,
            ],
        ];
    }

    public function registerPermissions()
    {
        return [
            'raviraj.rjgallery.*' => ['tab' => 'raviraj.rjgallery::lang.plugin.name', 'label' => 'raviraj.rjgallery::lang.permissions.all']
        ];
    }
}
