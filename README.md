Gentleface sprites
==================

The **UNOFFICIAL** sprites of the *Free Wireframe Toolbar Icons for GUI designers*
by [Gentleface](http://www.gentleface.com).

**!! - This work is unofficial and is not liable for Gentleface.**


## Overview

This package proposes some CSS sprites constructed on the
[Gentleface free web-icons set](http://www.gentleface.com/free_icon_set.html).
The original set of icons is proposed under
[Creative Commons "Attribution - Non Commercial" license](http://creativecommons.org/licenses/by-nc/3.0/),
free of use for **NON COMMERCIAL** usage as long as you mention the image credits to Gentleface.

To learn more about "CSS sprites" conception, see the
[Sprite (computer graphics) wikipedia's page](http://en.wikipedia.org/wiki/Sprite_%28computer_graphics%29#Sprites_by_CSS).

As the original icons set, the sprites proposed icons in black and white, 16x16, 24x24, 32x32
and 48x48 pixels.


## Usage

### Installation

This package is a "standalone" CSS framework. To use it, you just need to get its sources
from GitHub and include the `src/` content of the package in your project assets.

If you are a [Bower](http://bower.io/) user, the package is registered so you can write
in your `bower.json`:

    "dependencies": {
        ...
        "atelierspierrot/gentleface-sprites": "dev-master"
    }

If you are a [Composer](http://getcomposer.org/) user, the package is referenced to Packagist
so you can write in your `composer.json`:

    "require": {
        ...
        "atelierspierrot/gentleface-sprites": "dev-master"
    }

### HTML usage

Once the package is included in your project, you can start to use the sprites framework.

To do so, you first need to include the CSS definitions:

	<link rel="stylesheet" href="path/to/package/src/gentleface-sprites.min.css" />

Then you can start writing some Gentleface icons spans using the framework explained below.

### CSS Framework

The package defines some **CSS sprites** classes to render some icons easily and with least of work.

The CSS framework to use the sprites is based on three central classes:

-   the first one to choose the icons size: `gentleface-XX` with `XX` in 16, 24, 32 or 48,
-   the second one to choose the icons color: `black` or `white`,
-   the last one to choose the icon itself, which is the name of the icon.

For instance, to render a black, 24 by 24 pixels image of the "balance" icon, you will write:

    <span class="gentleface-24 black balance"></span>

As the sprites are not defined with restrictive CSS rules, you may encounter rendering
problems (such as margins or paddings defined globally in your document) that can be avoid
adding a `reset` class to your icons:

    <span class="gentleface-24 black reset balance"></span>

A simple `gentleface` class is designed as a shortcut that defaults to the black icons
in size 16x16. For instance, the followings are equivalent:

    <span class="gentleface-16 black balance"></span>
    <span class="gentleface balance"></span>

Finally, some classes can be used to define common effects on icons:

-   an "hover" effect on links containing icons using a `hover-COLOR` class on the icon,
    which means that the icon will be switched to the concerned `COLOR` (black or white)
    when the mouse is over the link (`hover` event) or when it's focused (`focus` event),
-   an "active" effect on DOM elements containing icons using a `active-COLOR` class on the
    icon, which means that when the container will have the class `active` (for a menu item
    fo instance), the icon will be switched to the concerned `COLOR`.

For instance:

    <a href="#" title="Icon with hover effect"><span class="gentleface-48 hover-white rss"></span></a>
    
    <a href="#" title="Inversed icon with hover effect"><span class="gentleface-32 white hover-black rss"></span></a>
    
    <ul>
        <li title="Classic state icon"><span class="gentleface-24 active-white shield"></span></li>
        <li class="active" title="Active state icon"><span class="gentleface-24 active-white shield"></span></li>
    </ul>


## Credits

As mentioned above, the original set of icons is made by [Gentleface](http://www.gentleface.com/)
and proposed under [Creative Commons Attribution-Non Commercial](http://creativecommons.org/licenses/by-nc/3.0/)
license. You are free to use it in personal (non-commercial) works but you must always add
a link to www.gentleface.com in a prominent place (e.g. the page footer), including the CC-BY-NC
license and the reference to www.gentleface.com on every page using the icons.

The sprites were generated with the help of [website-performance.org](http://spritegen.website-performance.org/)
and are CSS3 valid.

The minified version of the CSS file of the package was processed with the [YUI Compressor](http://refresh-sf.com/yui/).
