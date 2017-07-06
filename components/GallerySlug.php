<?php namespace Raviraj\Rjgallery\Components;

use Cms\Classes\ComponentBase;
use Raviraj\Rjgallery\Models\Gallery as GalleryModel;
use Lang;

class GallerySlug extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'raviraj.rjgallery::lang.galleryslug.title',
            'description' => 'raviraj.rjgallery::lang.galleryslug.description',
        ];
    }

    public function defineProperties()
    {
        return [
            'slug'         => [
                'title'       => 'raviraj.rjgallery::lang.slug.title',
                'description' => 'raviraj.rjgallery::lang.slug.description',
                'default'     => '{{:slug}}',
                'type'        => 'string',
            ],
            'lang'         => [
                'title'       => 'raviraj.rjgallery::lang.misc.title',
                'description' => 'raviraj.rjgallery::lang.misc.description',
                'type'        => 'string',
                'default'     => Lang::get('raviraj.rjgallery::lang.misc.defaultname'),
            ],
            'jqueryinject' => [
                'title'       => 'raviraj.rjgallery::lang.jqueryinject.title',
                'description' => 'raviraj.rjgallery::lang.jqueryinject.description',
                'type'        => 'dropdown',
                'default'     => 'yes',
                'options'     => ['yes' => 'raviraj.rjgallery::lang.jqueryinject.optionsyes', 'no' => 'raviraj.rjgallery::lang.jqueryinject.optionsno'],
            ],
            'thumbnail'    => [
                'title'       => 'raviraj.rjgallery::lang.thumbnail.title',
                'description' => 'raviraj.rjgallery::lang.thumbnail.description',
                'type'        => 'dropdown',
                'default'     => 'true',
                'group'       => Lang::get('raviraj.rjgallery::lang.groups.options'),
                'options'     => ['true' => 'raviraj.rjgallery::lang.thumbnail.optionstrue', 'false' => 'raviraj.rjgallery::lang.thumbnail.optionsfalse'],
            ],
            'caption'      => [
                'title'       => 'raviraj.rjgallery::lang.caption.title',
                'description' => 'raviraj.rjgallery::lang.caption.description',
                'type'        => 'dropdown',
                'default'     => 'true',
                'group'       => Lang::get('raviraj.rjgallery::lang.groups.options'),
                'options'     => ['true' => 'raviraj.rjgallery::lang.caption.optionstrue', 'false' => 'raviraj.rjgallery::lang.caption.optionsfalse'],
            ],
            'desc'         => [
                'title'       => 'raviraj.rjgallery::lang.desc.title',
                'description' => 'raviraj.rjgallery::lang.desc.description',
                'type'        => 'dropdown',
                'default'     => 'true',
                'group'       => Lang::get('raviraj.rjgallery::lang.groups.options'),
                'options'     => ['true' => 'raviraj.rjgallery::lang.desc.optionstrue', 'false' => 'raviraj.rjgallery::lang.desc.optionsfalse'],
            ],
            'counter'      => [
                'title'       => 'raviraj.rjgallery::lang.counter.title',
                'description' => 'raviraj.rjgallery::lang.counter.description',
                'type'        => 'dropdown',
                'default'     => 'true',
                'group'       => Lang::get('raviraj.rjgallery::lang.groups.options'),
                'options'     => ['true' => 'raviraj.rjgallery::lang.counter.optionstrue', 'false' => 'raviraj.rjgallery::lang.counter.optionsfalse'],
            ],
            'controls'     => [
                'title'       => 'raviraj.rjgallery::lang.controls.title',
                'description' => 'raviraj.rjgallery::lang.controls.description',
                'type'        => 'dropdown',
                'default'     => 'true',
                'group'       => Lang::get('raviraj.rjgallery::lang.groups.options'),
                'options'     => ['true' => 'raviraj.rjgallery::lang.controls.optionstrue', 'false' => 'raviraj.rjgallery::lang.controls.optionsfalse'],
            ],
            'preload'      => [
                'title'             => 'raviraj.rjgallery::lang.preload.title',
                'description'       => 'raviraj.rjgallery::lang.preload.description',
                'type'              => 'string',
                'validationPattern' => '^[\d]+$',
                'validationMessage' => 'raviraj.rjgallery::lang.preload.validationMessage',
                'default'           => '1',
                'group'             => Lang::get('raviraj.rjgallery::lang.groups.options'),
            ],

            'mode'    => [
                'title'       => 'raviraj.rjgallery::lang.mode.title',
                'description' => 'raviraj.rjgallery::lang.mode.description',
                'type'        => 'dropdown',
                'default'     => 'lg-slide',
                'group'       => Lang::get('raviraj.rjgallery::lang.groups.effects'),
            ],
            'speed'   => [
                'title'             => 'raviraj.rjgallery::lang.speed.title',
                'description'       => 'raviraj.rjgallery::lang.speed.description',
                'type'              => 'string',
                'validationPattern' => '^[\d]+$',
                'validationMessage' => 'raviraj.rjgallery::lang.speed.validationMessage',
                'default'           => '600',
                'group'             => Lang::get('raviraj.rjgallery::lang.groups.effects'),
            ],
            'loop'    => [
                'title'       => 'raviraj.rjgallery::lang.loop.title',
                'description' => 'raviraj.rjgallery::lang.loop.description',
                'type'        => 'dropdown',
                'default'     => 'true',
                'group'       => Lang::get('raviraj.rjgallery::lang.groups.effects'),
                'options'     => ['true' => 'raviraj.rjgallery::lang.loop.optionstrue', 'false' => 'raviraj.rjgallery::lang.loop.optionsfalse'],
            ],
            'auto'    => [
                'title'       => 'raviraj.rjgallery::lang.auto.title',
                'description' => 'raviraj.rjgallery::lang.auto.description',
                'type'        => 'dropdown',
                'default'     => 'false',
                'group'       => Lang::get('raviraj.rjgallery::lang.groups.effects'),
                'options'     => ['true' => 'raviraj.rjgallery::lang.auto.optionstrue', 'false' => 'raviraj.rjgallery::lang.auto.optionsfalse'],
            ],
            'pause'   => [
                'title'             => 'raviraj.rjgallery::lang.pause.title',
                'description'       => 'raviraj.rjgallery::lang.pause.description',
                'type'              => 'string',
                'validationPattern' => '^[\d]+$',
                'validationMessage' => 'raviraj.rjgallery::lang.pause.validationMessage',
                'default'           => '2000',
                'group'             => Lang::get('raviraj.rjgallery::lang.groups.effects'),
            ],
            'escKey'  => [
                'title'       => 'raviraj.rjgallery::lang.escKey.title',
                'description' => 'raviraj.rjgallery::lang.escKey.description',
                'type'        => 'dropdown',
                'default'     => 'true',
                'group'       => Lang::get('raviraj.rjgallery::lang.groups.effects'),
                'options'     => ['true' => 'raviraj.rjgallery::lang.escKey.optionstrue', 'false' => 'raviraj.rjgallery::lang.escKey.optionsfalse'],
            ],
            'height'  => [
                'title'             => 'raviraj.rjgallery::lang.height.title',
                'description'       => 'raviraj.rjgallery::lang.height.description',
                'type'              => 'string',
                'validationPattern' => '^[\d]+$',
                'validationMessage' => 'raviraj.rjgallery::lang.height.validationMessage',
                'default'           => '70',
                'group'             => Lang::get('raviraj.rjgallery::lang.groups.thumbs'),
            ],
            'width'   => [
                'title'             => 'raviraj.rjgallery::lang.width.title',
                'description'       => 'raviraj.rjgallery::lang.width.description',
                'type'              => 'string',
                'validationPattern' => '^[\d]+$',
                'validationMessage' => 'raviraj.rjgallery::lang.width.validationMessage',
                'default'           => '100',
                'group'             => Lang::get('raviraj.rjgallery::lang.groups.thumbs'),
            ],
            'resizer' => [
                'title'       => 'raviraj.rjgallery::lang.resizer.title',
                'description' => 'raviraj.rjgallery::lang.resizer.description',
                'type'        => 'dropdown',
                'default'     => 'auto',
                'options'     => ['auto' => 'raviraj.rjgallery::lang.resizer.optionsauto', 'exact' => 'raviraj.rjgallery::lang.resizer.optionsexact', 'portrait' => 'raviraj.rjgallery::lang.resizer.optionsportrait', 'landscape' => 'raviraj.rjgallery::lang.resizer.optionslandscape', 'crop' => 'raviraj.rjgallery::lang.resizer.optionscrop'],
                'group'       => Lang::get('raviraj.rjgallery::lang.groups.thumbs'),
            ],
        ];
    }

    public function getModeOptions()
    {
        return $this->getTransitions();
    }

    private function getTransitions()
    {
        return [
            'lg-slide'                    => 'Slide',
            'lg-fade'                     => 'Fade',
            'lg-zoom-in'                  => 'Zoom In',
            'lg-zoom-in-big'              => 'Zoom In Big',
            'lg-zoom-out'                 => 'Zoom Out',
            'lg-zoom-out-big'             => 'Zoom Out Big',
            'lg-zoom-out-in'              => 'Zoom Out In',
            'lg-zoom-in-out'              => 'Zoom In Out',
            'lg-soft-zoom'                => 'Soft Zoom',
            'lg-scale-up'                 => 'Scale Up',
            'lg-slide-circular'           => 'Slide Circular',
            'lg-slide-circular-vertical'  => 'Slide Circular Vertical',
            'lg-slide-vertical'           => 'Slide Vertical',
            'lg-slide-vertical-growth'    => 'Slide Vertical Growth',
            'lg-slide-skew-only'          => 'Slide Skew Only',
            'lg-slide-skew-only-rev'      => 'Slide Skew Only Reverse',
            'lg-slide-skew-only-y'        => 'Slide Skew Only-Y',
            'lg-slide-skew-only-y-rev'    => 'Slide Skew Only-Y Reverse',
            'lg-slide-skew'               => 'Slide Skew',
            'lg-slide-skew-rev'           => 'Slide Skew Reverse',
            'lg-slide-skew-cross'         => 'Slide Skew Cross',
            'lg-slide-skew-cross-rev'     => 'Slide Skew Cross Reverse',
            'lg-slide-skew-ver'           => 'Slide Skew Vertical',
            'lg-slide-skew-ver-rev'       => 'Slide Skew Vertical Reverse',
            'lg-slide-skew-ver-cross'     => 'Slide Skew Vertical Cross',
            'lg-slide-skew-ver-cross-rev' => 'Slide Skew Vertical Cross Reverse',
            'lg-lollipop'                 => 'Lollipop',
            'lg-lollipop-rev'             => 'Lollipop Reverse',
            'lg-rotate'                   => 'Rotate',
            'lg-rotate-rev'               => 'Rotate Reverse',
            'lg-tube'                     => 'Tube',
            'lg-start-zoom'               => 'Start Zoom',
        ];
    }

    public function onRun()
    {
        if ($this->property('jqueryinject') == "yes") {
            $this->addJs('assets/js/jquery-1.9.1.min.js');
        }

        $this->addCss('assets/css/lightgallery.min.css');
        $this->addCss('assets/css/lg-transitions.min.css');

        $this->addJs('assets/js/lightgallery.min.js');
        $this->addJs('assets/js/jquery.mousewheel.min.js');
        $this->addJs('assets/js/lg-thumbnail.min.js');
        $this->addJs('assets/js/lg-autoplay.min.js');
        $this->addJs('assets/js/lg-pager.min.js');
        $this->addJs('assets/js/lg-zoom.min.js');
        $this->addJs('assets/js/lg-fullscreen.min.js');

        $this->gallery = $this->page['gallery'] = GalleryModel::where('slug', $this->property('slug'))->isPublished()->first();;
    }

    public function onRender()
    {
        // Inject all gallery properties to page.
        foreach ($this->getProperties() as $key => $value) {
            $this->page[$key] = $value;
        }
    }
}
