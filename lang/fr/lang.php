<?php

return [
    'plugin' => [
        'name' => 'RJ Gallery',
        'description' => 'Créez une galerie de photos pour votre site web avec un design réactif.'
    ],
    'permissions' => [
        'all' => 'Gérer les galeries'
    ],
    'misc' => [
    	'newgallery' => 'Nouvelle galerie',
    	'sure' => 'Êtes-vous sûr ?',
    	'remove' => 'Supprimer',
        'title' => 'Titre',
        'description' => 'Titre de la galerie',
        'defaultname' => 'Gallery'
    ],
    'form' => [
    	'create' => 'Créer une galerie',
    	'update' => 'Mise à jour d\'une galerie',
    	'preview' => 'Prévisualisation d\'une galerie',
    	'manage' => 'Gérer les galeries'
    ],
    'modeldata' => [
    	'name' => 'Nom',
    	'created' => 'Créé le',
    	'updated' => 'Mise à jour le',
    	'images' => 'Images',
        'slug' => 'Slug',
        'description' => 'Description',
        'published' => 'Publié',
        'published_at' => 'Publié le',
        'categories' => 'Catégories',
        'slug_placeholder' => 'Donner un slug',
        'name_placeholder' => 'Donner un nom',
        'description_placeholder' => 'Description de la galerie',

    ],
    'exeption' => [
        'publish_date_validation' => "Il faut préciser une date"
    ],
    'tabs' => [
       'info' => 'Info',
       'settings' => 'Paramètres'
    ],
    'create' => [
    	'galleries' => 'Galeries',
    	'creating' => 'Création d\'une galerie...',
    	'create' => 'Créer',
    	'createclose' => 'Créer et fermer',
    	'cancel' => 'Annuler',
    	'or' => 'ou',
    	'return' => 'Retour à la liste des galeries'
    ],
    'update' => [
    	'saving' => 'Sauvegarde de la galerie...',
    	'save' => 'Enregistrer',
    	'saveclose' => 'Enregistrer et Fermer',
    	'deleting' => 'Suppression d\'une galerie...',
    	'reallydelete' => 'Voulez-vous vraiment supprimer cette galerie ?'
    ],
    'menu' => [
    	'name' => 'RJ Gallery',
        'description' => 'Créer une galerie de photos avec aperçu plein écran et diaporama.',
        'new_gallery' => 'Nouvelle galerie',
        'new_category' => 'Nouvelle catégorie',
        'galleries'  => 'Galeries',
        'categories' => 'Catégories'
    ],
    'gallerylist' => [
        'name' => 'Liste des galeries',
        'description' => 'Afficher toutes les galeries publiées',
        'galleryPage' => 'Page de la galerie',
        'galleryPage_description' => 'Page où la galerie sera montrée',
        'categoryPage'  => 'Page de catégorie',
        'categoryPage_description' => 'Page où la catégorie sera affichée',
        'noGalleriesMessage' => 'Messages pas de galeries',
        'noGalleriesMessage_description' => 'Message à afficher en cas d\'absence de galeries'
    ],
    'groups' => [
        'options' => 'Options',
        'effects' => 'Effets',
        'thumbs' => 'Options des miniatures'
    ],
    'idgallery' => [
        'title' => 'Galerie',
        'description' => 'Choisir la galerie qui s\'affichera'
    ],
    'galleryslug' => [
        'title' => 'Galerie "Slug"',
        'description' => 'Afficher la galerie en fonction de l\'adresse'
    ],
    'slug' => [
        'title' => 'Slug',
        'description' => 'Cherche une galerie avec ce slug',
        'default'     => '{{ :slug }}',
    ],
    'jqueryinject' => [
        'title' => 'Injecter jQuery ',
        'description' => 'Injecter jQuery avec le composant',
        'optionsyes' => 'Oui',
        'optionsno' => 'Non'
    ],
    'thumbnail' => [
        'title' => 'Aperçu en miniature',
        'description' => 'Afficher ou non un bouton pour afficher les vignettes.',
        'optionstrue' => 'Oui',
        'optionsfalse' => 'Non'
    ],
    'caption' => [
        'title' => 'Légende de l\'image',
        'description' => 'Active les légendes d\'images',
        'optionstrue' => 'Oui',
        'optionsfalse' => 'Non'
    ],
    'desc' => [
        'title' => 'Description de l\'image',
        'description' => 'Permet la description des images',
        'optionstrue' => 'Oui',
        'optionsfalse' => 'Non'
    ],
    'counter' => [
        'title' => 'Compteur d\'images',
        'description' => 'Affiche le nombre total d\'images et le numéro de l\'image actuelle.',
        'optionstrue' => 'Oui',
        'optionsfalse' => 'Non'
    ],
    'controls' => [
        'title' => 'Contrôles de navigation',
        'description' => 'Afficher ou non les boutons PREC/SUIV',
        'optionstrue' => 'Oui',
        'optionsfalse' => 'Non'
    ],
    'preload' => [
        'title' => 'Précharger des images',
        'description' => 'Nombre d\'images préchargées avant et après l\'image actuelle.',
        'validationMessage' => 'Format non valide',
    ],
    'mode' => [
        'title' => 'Transition',
        'description' => 'Type de transition entre les images',
        'optionsslide' => 'Slide (glissé)',
        'optionsfade' => 'Fade (fondu)'
    ],
    'speed' => [
        'title' => 'Vitesse de transition',
        'description' => 'Durée de la transition (en ms)',
        'validationMessage' => 'Format non valide',
    ],
    'loop' => [
        'title' => 'Boucle',
        'description' => 'Permet d\'aller à l\'autre bout de la galerie à la première/dernière image.',
        'optionstrue' => 'Oui',
        'optionsfalse' => 'Non'
    ],
    'auto' => [
        'title' => 'Lecture automatique',
        'description' => 'Permet la lecture automatique du diaporama.',
        'optionstrue' => 'Oui',
        'optionsfalse' => 'Non'
    ],
    'pause' => [
        'title' => 'Temps de pause',
        'description' => 'Délai (en ms) entre les transitions en mode diaporama.',
        'validationMessage' => 'Format non valide',
    ],
    'escKey' => [
        'title' => 'ESC pour fermer',
        'description' => 'La galerie doit-elle être fermée lorsque l\'utilisateur appuie sur "Esc".',
        'optionstrue' => 'Oui',
        'optionsfalse' => 'Non'
    ],
    'height' => [
        'title' => 'Hauteur de la vignette',
        'description' => 'Hauteur de la vignette principale en pixels',
        'validationMessage' => 'Format non valide'
    ],
    'width' => [
        'title' => 'Largeur de la vignette',
        'description' => 'Largeur de la vignette principale en pixels',
        'validationMessage' => 'Format non valide'
    ],
    'resizer' => [
        'title' => 'Mode de redimensionnement',
        'description' => 'Comment redimensionner les vignettes',
        'optionsauto' => 'Auto',
        'optionsexact' => 'Exact',
        'optionsportrait' => 'Portrait',
        'optionslandscape' => 'Paysage',
        'optionscrop' => 'Recadrer'
    ],
];
