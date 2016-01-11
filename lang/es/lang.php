<?php

return [
    'plugin' => [
        'name' => 'RJ Gallery',
        'description' => 'Crea galerías de fotos con diseño responsive para tu web.'
    ],
    'permissions' => [
        'all' => 'Administrar galerías'
    ],
    'misc' => [
    	'newgallery' => 'Nueva galería',
    	'sure' => 'Estas segura/o?',
    	'remove' => 'Borrar',
        'title' => 'Título',
        'description' => 'Título de la galería',
        'defaultname' => 'Galería'
    ],
    'form' => [
    	'create' => 'Crear galerías',
    	'update' => 'Editar galerías',
    	'preview' => 'Vista previa',
    	'manage' => 'Administrar galerías'
    ],
    'modeldata' => [
    	'name' => 'Nombre',
    	'created' => 'Creado',
    	'updated' => 'Modificado',
    	'images' => 'Imágenes'
    ],
    'create' => [
    	'galleries' => 'Galerías',
    	'creating' => 'creando galería...',
    	'create' => 'Crear',
    	'createclose' => 'Crear y cerrar',
    	'cancel' => 'Cancelar',
    	'or' => 'o',
    	'return' => 'Volver a la lista de galerías'
    ],
    'update' => [
    	'saving' => 'Guardando Galería...',
    	'save' => 'Guardar',
    	'saveclose' => 'Guardar y cerrar',
    	'deleting' => 'Borrando galería...',
    	'reallydelete' => 'Confirmas que quieres eliminar esta galería?'
    ],
    'menu' => [
    	'name' => 'RJ Gallery',
        'description' => 'Crea galerías fotográficas con vista previa y presentación a pantalla completa.'
    ],
    'groups' => [
        'options' => 'Opciones',
        'effects' => 'Efectos',
        'thumbs' => 'Opciones de miniatura'
    ],
    'idgallery' => [
        'title' => 'Galería',
        'description' => 'Selecciona una galería para mostrar'
    ],
    'jqueryinject' => [
        'title' => 'Inyectar jQuery',
        'description' => 'Inyectar el código de jQuery (si tu tema incluye jQuery esto no es necesario)',
        'optionsyes' => 'Si',
        'optionsno' => 'No'
    ],
    'thumbnail' => [
        'title' => 'Vistas en miniatura',
        'description' => 'Mostrar un botón para ver las miniaturas.',
        'optionstrue' => 'Si',
        'optionsfalse' => 'No'
    ],
    'caption' => [
        'title' => 'Mostrar títulos',
        'description' => 'Muestra el título de cada foto',
        'optionstrue' => 'Si',
        'optionsfalse' => 'No'
    ],
    'desc' => [
        'title' => 'Mostrar descripción',
        'description' => 'Muestra la descripción de cada foto',
        'optionstrue' => 'Si',
        'optionsfalse' => 'No'
    ],
    'counter' => [
        'title' => 'Contador de imágenes',
        'description' => 'Muestra el número total de imágenes de la galería y el número de la imagen actual.',
        'optionstrue' => 'Si',
        'optionsfalse' => 'No'
    ],
    'controls' => [
        'title' => 'Mostrar controles',
        'description' => 'Muestra los botones de imagen anterior y siguiente.',
        'optionstrue' => 'Si',
        'optionsfalse' => 'No'
    ],
    'preload' => [
        'title' => 'Pre-cargar imágenes',
        'description' => 'Número de imágenes a precargar por delante y detrás de la foto actual.',
        'validationMessage' => 'Formato no válido',
    ],
    'mode' => [
        'title' => 'Transición',
        'description' => 'Tipo de transición entre imágenes',
        'optionsslide' => 'Deslizar',
        'optionsfade' => 'Fundido'
    ],
    'speed' => [
        'title' => 'Velocidad de la transición',
        'description' => 'Duración en milisegundos de la transición entre imágenes.',
        'validationMessage' => 'Formato no válido',
    ],
    'loop' => [
        'title' => 'Bucle',
        'description' => 'Muestra la galería de forma que los extremos (primera y última imagen) no interrumpen la presentación.',
        'optionstrue' => 'Si',
        'optionsfalse' => 'No'
    ],
    'auto' => [
        'title' => 'Autoplay',
        'description' => 'Inicia automáticamente la presentación.',
        'optionstrue' => 'Si',
        'optionsfalse' => 'No'
    ],
    'pause' => [
        'title' => 'Intervalo',
        'description' => 'Tiempo en milisegundos entre imágenes en modo presentación.',
        'validationMessage' => 'Formato no válido',
    ],
    'escKey' => [
        'title' => 'ESC para cerrar',
        'description' => 'Permitir cerrar la presentación mediante la tecla "Esc"',
        'optionstrue' => 'Si',
        'optionsfalse' => 'No'
    ],
    'height' => [
        'title' => 'Altura de la miniatura',
        'description' => 'Altura de la miniatura en pixels',
        'validationMessage' => 'Formato no válido'
    ],
    'width' => [
        'title' => 'Anchura de la miniatura',
        'description' => 'Anchura de la miniatura en pixels',
        'validationMessage' => 'Formato no válido'
    ],
    'resizer' => [
        'title' => 'Modo de escalado',
        'description' => 'Modo de escalado utilizado para el cambio de tamaño de las miniaturas',
        'optionsauto' => 'Automático',
        'optionsexact' => 'Exacto',
        'optionsportrait' => 'Vertical',
        'optionslandscape' => 'Horizontal',
        'optionscrop' => 'Recortar'
    ],
];
