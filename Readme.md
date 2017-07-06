# Light Gallery Plugin for OctoberCMS
Create a photo gallery in your website with full screen preview and slideshows. Works with **any browser** on **any device**.

#### Features
* **Responsive** layout.
* **Touch** support for mobile devices.
* **Zoom & Fullscreen**
* **CSS transitions** with jQuery fallback
* **32** Transition Effects
* **Download** images from gallery
* Chrome, Safari, Firefox, Opera, IE7+, IOS, Android, Windows Phone.
* Image **captions** and **descriptions**.
* **Multiple galleries** on the same page
* Easily customizable via CSS and Settings
* **Lightweight** (7kb) (minified)
* **Thumbnail** support
* Smart **image preloading** and **code optimization**.
* **Keyboard Navigation** for desktop

# How do this work
The plugin provides `gallery` component to build photo gallery with many customization settings, through which you can create your own style galleries.
##### Make your own style **div** wrapper for gallery.

> **Note**: Put `{% styles %}` and `{% scripts %}` in your page header, if not there. If you have already included jQuery.js in your page header, you can set `jQuery Inject` option to no.

# Gallery Component
Use the **gallery** component to display the photo gallery for your images of any size.
The component has the following properties:
* **Title** - Title of the gallery, default value is `All Photos`.
* **jQuery Inject** - Whether to inject jQuery to page header or not, default value is `Yes`.
* **Thumbnail Preview** - Whether to display a button to show thumbnails on preview, default value is `True`.
* **Image Caption** - Enables image captions on preview, default value is `True`.
* **Image Description** - Enables image descriptions on preview, default value is `True`.
* **Image Counter** - Shows total number of images and index number of current image, default value is `True`.
* **Navigation Controls** - Whether to display PREV/NEXT buttons on preview, default value is `True`.
* **Preload Images** - Number of preload images before and after the current image, default value is `1`.
* **Transition** - Type of transition between images, default value is `Slide`.
* **Transition Speed** - Transition duration (in ms), default value is `600`.
* **Loop** - Allows to go to the other end of the gallery at first/last image, default value is `True`.
* **Autoplay** - Enables slideshow autoplay, default value is `False`.
* **Pause Time** - Delay (in ms) between transitions in slideshow mode, default value is `2000`.
* **ESC Close** - Whether gallery should be closed when user presses "Esc", default value is `True`.
* **Thumbnail Height** - Main thumbnail height in pixels, default value is `70`.
* **Thumbnail Width** - Main thumbnail width in pixels, default value is `100`.
* **Resizer Mode** - How thumbnails should be resized, default value is `Auto`.

The next example shows usage of `gallery` component:
```	
title = "Demonstration"
url = "/"
layout = "default"

[gallery]
idGallery = "1"
lang = "All Photos"
jqueryinject = "yes"
thumbnail = "true"
caption = "true"
desc = "true"
counter = "true"
controls = "true"
preload = "1"
mode = "lg-slide"
speed = "600"
loop = "true"
auto = "false"
pause = "2000"
escKey = "true"
height = "70"
width = "100"
==
<!-- Gallery -->
<div class="container-fluid">
  <div class="row">
    <!-- Make your own style div wrapper for gallery -->
    <div class="col-md-6 col-md-offset-3 col-xs-12">
      {% component 'gallery' %}
    </div>
  </div>
</div>
<!-- End Gallery -->
```