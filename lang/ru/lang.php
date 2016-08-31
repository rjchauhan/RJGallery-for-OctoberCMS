<?php

return [
    'plugin' => [
        'name' => 'RJ Gallery',
        'description' => '{Создание галерей с практичным дизайном}.'
    ],
    'permissions' => [
        'all' => 'Manage galleries'
    ],
    'misc' => [
    	'newgallery' => 'Новая галерея',
    	'sure' => 'Вы уверены?',
    	'remove' => 'Удалить',
        'title' => 'Название',
        'description' => 'Название галереи',
        'defaultname' => 'Галерея'
    ],
    'form' => [
    	'create' => 'Create Galleries',
    	'update' => 'Update Galleries',
    	'preview' => 'Preview Galleries',
    	'manage' => 'Manage Galleries'
    ],
    'modeldata' => [
    	'name' => 'Название',
    	'created' => 'Создана',
    	'updated' => 'Обновлена',
    	'images' => 'Изображения'
    ],
    'create' => [
    	'galleries' => 'Галереи',
    	'creating' => 'Создание галереи...',
    	'create' => 'Создать',
    	'createclose' => 'Создать и выйти',
    	'cancel' => '&nbsp;Отмена',
    	'or' => 'или',
    	'return' => 'Вернуться к списку галерей'
    ],
    'update' => [
    	'saving' => 'Сохранение галереи...',
    	'save' => 'Сохранить',
    	'saveclose' => 'Сохранить и выйти',
    	'deleting' => 'Уделаение галереи...',
    	'reallydelete' => 'Вы и в правду хотите удалить галерею?'
    ],
    'menu' => [
    	'name' => 'Фотогалерея',
        'description' => 'Create a photo gallery with full screen preview and slideshow'
    ],
    'groups' => [
        'options' => 'Options',
        'effects' => 'Effects',
        'thumbs' => 'Thumbnail Options'
    ],
    'idgallery' => [
        'title' => 'Gallery',
        'description' => 'Choose the gallery that will display'
    ],
    'jqueryinject' => [
        'title' => 'jQuery Inject',
        'description' => 'Whether to inject jQuery or not',
        'optionsyes' => 'Yes',
        'optionsno' => 'No'
    ],
    'thumbnail' => [
        'title' => 'Thumbnail Preview',
        'description' => 'Whether to display a button to show thumbnails',
        'optionstrue' => 'True',
        'optionsfalse' => 'False'
    ],
    'caption' => [
        'title' => 'Image Caption',
        'description' => 'Enables image captions',
        'optionstrue' => 'True',
        'optionsfalse' => 'False'
    ],
    'desc' => [
        'title' => 'Image Description',
        'description' => 'Enables image descriptions',
        'optionstrue' => 'True',
        'optionsfalse' => 'False'
    ],
    'counter' => [
        'title' => 'Image Counter',
        'description' => 'Shows total number of images and index number of current image',
        'optionstrue' => 'True',
        'optionsfalse' => 'False'
    ],
    'controls' => [
        'title' => 'Navigation Controls',
        'description' => 'Whether to display PREV/NEXT buttons',
        'optionstrue' => 'True',
        'optionsfalse' => 'False'
    ],
    'preload' => [
        'title' => 'Preload Images',
        'description' => 'Number of preload images before and after the current image',
        'validationMessage' => 'Invalid format',
    ],
    'mode' => [
        'title' => 'Transition',
        'description' => 'Type of transition between images',
        'optionsslide' => 'Slide',
        'optionsfade' => 'Fade'
    ],
    'speed' => [
        'title' => 'Transition Speed',
        'description' => 'Transition duration (in ms)',
        'validationMessage' => 'Invalid format',
    ],
    'loop' => [
        'title' => 'Loop',
        'description' => 'Allows to go to the other end of the gallery at first/last image',
        'optionstrue' => 'True',
        'optionsfalse' => 'False'
    ],
    'auto' => [
        'title' => 'Autoplay',
        'description' => 'Enables slideshow autoplay',
        'optionstrue' => 'True',
        'optionsfalse' => 'False'
    ],
    'pause' => [
        'title' => 'Pause Time',
        'description' => 'Delay (in ms) between transitions in slideshow mode',
        'validationMessage' => 'Invalid format',
    ],
    'escKey' => [
        'title' => 'ESC Close',
        'description' => 'Whether gallery should be closed when user presses "Esc"',
        'optionstrue' => 'True',
        'optionsfalse' => 'False'
    ],
    'height' => [
        'title' => 'Thumbnail Height',
        'description' => 'Main thumbnail height in pixels',
        'validationMessage' => 'Invalid format'
    ],
    'width' => [
        'title' => 'Thumbnail Width',
        'description' => 'Main thumbnail width in pixels',
        'validationMessage' => 'Invalid format'
    ],
    'resizer' => [
        'title' => 'Resizer Mode',
        'description' => 'How thumbnails should be resized',
        'optionsauto' => 'Auto',
        'optionsexact' => 'Exact',
        'optionsportrait' => 'Portrait',
        'optionslandscape' => 'Landscape',
        'optionscrop' => 'Crop'
    ],
];
