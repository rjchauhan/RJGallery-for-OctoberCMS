<?php namespace Raviraj\Rjgallery\Controllers;

use Flash;
use BackendMenu;
use Backend\Classes\Controller;
use Raviraj\Rjgallery\Models\Gallery;

/**
 * Galleries Back-end Controller
 */
class Galleries extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Raviraj.Rjgallery', 'gallery', 'galleries');
    }

    public function index_onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $itemId) {
                if (!$slider = Gallery::find($itemId))
                    continue;

                $slider->delete();
            }

            Flash::success('Successfully deleted those selected.');
        }

        return $this->listRefresh();
    }
}
