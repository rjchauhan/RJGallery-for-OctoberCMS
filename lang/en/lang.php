<?php

return [
    'plugin' => [
        'name' => 'RJ Gallery',
        'description' => 'Create photo gallery for your website with responsive design.'
    ],
    'permissions' => [
        'all' => 'Manage galleries'
    ],
    'misc' => [
    	'newgallery' => 'New Gallery',
    	'sure' => 'Are you sure?',
    	'remove' => 'Remove',
        'title' => 'Title',
        'description' => 'Title of the gallery',
        'defaultname' => 'Gallery'
    ],
    'form' => [
    	'create' => 'Create Galleries',
    	'update' => 'Update Galleries',
    	'preview' => 'Preview Galleries',
    	'manage' => 'Manage Galleries'
    ],
    'modeldata' => [
    	'name' => 'Name',
    	'created' => 'Created',
    	'updated' => 'Updated',
    	'images' => 'Images',
        'slug' => 'Slug',
        'description' => 'Description',
        'published' => 'Published',
        'published_at' => 'Published at',
        'categories' => 'Categories',
        'slug_placeholder' => 'Enter slug',
        'name_placeholder' => 'Enter name',
        'description_placeholder' => 'Enter Description',

    ],
    'exeption' => [
        'publish_date_validation' => "Must specify a date"
    ],
    'tabs' => [
       'info' => 'Info',
       'settings' => 'Settings'
    ],
    'create' => [
    	'galleries' => 'Galleries',
    	'creating' => 'Creating Gallery...',
    	'create' => 'Create',
    	'createclose' => 'Create and Close',
    	'cancel' => 'Cancel',
    	'or' => 'or',
    	'return' => 'Return to galleries list'
    ],
    'update' => [
    	'saving' => 'Saving Gallery...',
    	'save' => 'Save',
    	'saveclose' => 'Save and Close',
    	'deleting' => 'Deleting Gallery...',
    	'reallydelete' => 'Do you really want to delete this gallery?'
    ],
    'menu' => [
    	'name' => 'RJ Gallery',
        'description' => 'Create a photo gallery with full screen preview and slideshow',
        'new_gallery' => 'New gallery',
        'new_category' => 'New category',
        'galleries'  => 'Galleries',
        'categories' => 'Categories'
    ],
    'gallerylist' => [
        'name' => 'List of Galleries',
        'description' => 'Show all published galleries',
        'galleryPage' => 'Gallery page',
        'galleryPage_description' => 'Page where gallery will be shown',
        'categoryPage'  => 'Category page',
        'categoryPage_description' => 'Page where category will be shown',
        'noGalleriesMessage' => 'No galleries message',
        'noGalleriesMessage_description' => 'Message to shown in case of no galleries'
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
    'galleryslug' => [
        'title' => 'Gallery Slug',
        'description' => 'Show gallery depending on the slug'
    ],
    'slug' => [
        'title' => 'Gallery slug',
        'description' => 'Slug, search for gallery with it',
        'default'     => '{{ :slug }}',
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
