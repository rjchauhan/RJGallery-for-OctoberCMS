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
            'Raviraj\Rjgallery\Components\Gallery' => 'galleryId',
            'Raviraj\Rjgallery\Components\GallerySlug' => 'gallerySlug',
            'Raviraj\Rjgallery\Components\GalleriesList' => 'galleriesList'
        ];
    }

    public function registerPageSnippets()
    {
        return [
            'Raviraj\Rjgallery\Components\Gallery' => 'galleryId',
            'Raviraj\Rjgallery\Components\GallerySlug' => 'gallerySlug',
            'Raviraj\Rjgallery\Components\GalleriesList' => 'galleriesList'
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

                'sideMenu' => [
                    'new_gallery' => [
                        'label'       => 'raviraj.rjgallery::lang.menu.new_gallery',
                        'icon'        => 'icon-plus',
                        'url'         => Backend::url('raviraj/rjgallery/galleries/create'),
                        'permissions' => ['raviraj.rjgallery.access_galleries']
                    ],
                    'galleries' => [
                        'label'       => 'raviraj.rjgallery::lang.menu.galleries',
                        'icon'        => 'icon-file-image-o',
                        'url'         => Backend::url('raviraj/rjgallery/galleries'),
                        'permissions' => ['raviraj.rjgallery.access_galleries']
                    ],
                    'new_category' => [
                        'label'       => 'raviraj.rjgallery::lang.menu.new_category',
                        'icon'        => 'icon-plus',
                        'url'         => Backend::url('raviraj/rjgallery/categories/create'),
                        'permissions' => ['raviraj.rjgallery.access_galleries']
                    ],
                    'categories' => [
                        'label'       => 'raviraj.rjgallery::lang.menu.categories',
                        'icon'        => 'icon-server',
                        'url'         => Backend::url('raviraj/rjgallery/categories'),
                        'permissions' => ['raviraj.rjgallery.access_categories']
                    ]
                ]
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
