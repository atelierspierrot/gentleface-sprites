<?php
// show errors at least initially
ini_set('display_errors','1'); error_reporting(E_ALL ^ E_NOTICE);

// set a default timezone to avoid PHP5 warnings
$tmz = date_default_timezone_get();
date_default_timezone_set( !empty($tmz) ? $tmz : 'Europe/Paris' );

$icons_list = array(
// infos
'info',
'attention',
'cancel',
'delete',
'trash',
'zoom',
'heart_empty',
'heart',
'home',
'fire',

'2x2_grid',
'3x3_grid_2',
'3x3_grid',
'app_window',
'app_window_black',
'app_window_black_2',
'app_window_cross',
'app_window_cross_2',
'app_window_2',
'app_window_shell',
'app_window_shell_2',
'browser',

// editor
'font_bold',
'font_italic',
'font_size',
'font_strokethrough',
'font_underline',
'link',
'picture',
'text_curstor',
'text_letter_t',
'align_center',
'align_just',
'align_left',
'align_right',
'list_bullets',
'list_num',
'indent_decrease',
'indent_increase',
'image_text',
'paragraph',
'print',
'clipboard_copy',
'clipboard_cut',
'clipboard_past',
'brackets',
'brush',
'clip',
'layers',
'layers_2',
'shapes',
'page_layout',
'push_pin',
'fill',

// currencies
'cur_bp',
'cur_dollar',
'cur_euro',
'cur_yen',

// menu
'calc',
'calendar',
'calendar_2',
'case',
'notepad',
'notepad_2',
'shop_cart',
'user',
'users',
'bell',
'book',
'book_side',
'bookmark',
'bookmark_2',
'chart_bar',
'chart_line',
'chart_line_2',
'chart_pie',
'shopping_bag_dollar',
'shopping_bag',
'wallet',
'track',
'dashboard',

// functional
'wrench',
'wrench_plus',
'wrench_plus_2',
'off',
'on-off',
'on',
'pencil',
'cog',
'cogs',
'key',
'lightbulb',
'lighting',
'bug',
'cert',
'magic_wand',
'magic_wand_2',
'loading_throbber',
'padlock_closed',
'padlock_open',
'lock_open',
'eye',
'eye_inv',
'invisible_light',
'invisible_revert',
'checkbox_checked',
'checkbox_unchecked',
'checkmark',
'flag',
'flag_2',
'tag',
'target',
'sand',
'save',
'shield',
'shield_2',
'money',
'filter',

// cursor
'cursor_H_split',
'cursor_V_split',
'cursor_arrow',
'cursor_drag_arrow',
'cursor_drag_arrow_2',
'cursor_drag_hand',
'cursor_hand',

// shortcuts
'redo',
'undo',
'refresh',
'reload',
'top_right_expand',
'expand',

// import/export
'download',
'export',
'import',

// doc
'doc_delete',
'doc_edit',
'doc_empty',
'doc_export',
'doc_import',
'doc_lines',
'doc_lines_stright',
'doc_minus',
'doc_new',
'doc_plus',
'document',

// dir
'folder_arrow',
'folder_delete',
'folder',
'folder_minus',
'folder_open',
'folder_plus',

// arrows
'arrow_l',
'arrow_r',
'arrow_bottom',
'arrow_bottom_left',
'arrow_bottom_rigth',
'arrow_left',
'arrow_right',
'arrow_top',
'arrow_top_left',
'arrow_top_right',
'arrow_two_head',
'arrow_two_head_2',

// message
'chat_bubble_message_square',
'contact_card',
'contact',
'inbox',
'mail',
'mail_2',
'message_attention',
'spechbubble',
'spechbubble_2',
'spechbubble_sq',
'spechbubble_sq_line',

// device
'db',
'server',
'delete_server',
'phone_1',
'phone_2',
'battery',
'preso',
'monitor',
'comp',
'iphone',
'phone',
'phone_touch',
'photo',
'vault',
'wifi_router',
'sat_dish',

// signal
'wireless_signal',
'podcast',
'rss',
'rss_sq',
'air_signal',

// media
'cassette',
'tape',
'movie',
'music',
'music_square',
'headphones',
'mic',
'microphone',
'sound_high',
'sound_low',
'sound_mute',

// player
'playback_ff',
'playback_next',
'playback_pause',
'playback_play',
'playback_prev',
'playback_rec',
'playback_reload',
'playback_rew',
'playback_stop',
'fastforward_next',
'rewind_previous',
'eject',
'inject',

// arrow buttons
'br_down',
'br_next',
'br_prev',
'br_up',
'rnd_br_down',
'rnd_br_first',
'rnd_br_last',
'rnd_br_next',
'rnd_br_prev',
'rnd_br_up',
'round_and_up',
'round_arrow_left',
'round_arrow_right',
'round_checkmark',
'round_delete',
'round',
'round_minus',
'round_plus',
'sq_br_down',
'sq_br_first',
'sq_br_last',
'sq_br_next',
'sq_br_prev',
'sq_br_up',
'sq_down',
'sq_minus',
'sq_next',
'sq_plus',
'sq_prev',
'sq_up',
'square_shape',

// pins
'pin',
'pin_2',
'pin_map_down',
'pin_map',
'pin_map_left',
'pin_map_right',
'pin_map_top',
'pin_sq_down',
'pin_sq_left',
'pin_sq_right',
'pin_sq_top',

// stars
'burst',
'star_fav_empty',
'star_fav',
'star',
'sun',

// socials
'share',
'share_2',
'openid',
'google',
'youtube',
'facebook',
'twitter',
'twitter_2',

// connecting
'connect',
'disconnected',
'not_connected',
'net_comp',
'network',

// hand
'hand',
'hand_2',
'hand_contra',
'hand_pro',

// emoticons
'emotion_sad',
'emotion_smile',

// the rest ...
'stairs_down',
'stairs_up',
'clock',
'compass',
'stop_watch',
'box',
'cube',
'globe',
'globe_2',
'globe_3',
'balance',
'cc',
'cloud',
'cloud_rain',
'coffe_cup',
'game_pad',
'glasses',
'hanger',
'paper_airplane',

);

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> <![endif]-->
    <title>Gentleface CSS sprites</title>
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="assets/html5boilerplate/css/normalize.css" />
    <link rel="stylesheet" href="assets/html5boilerplate/css/main.css" />
    <script src="assets/html5boilerplate/js/vendor/modernizr-2.6.2.min.js"></script>
	<link rel="stylesheet" href="assets/styles.css" />
<!--
	<link rel="stylesheet" href="../src/gentleface-sprites.css" />
//-->
	<link rel="stylesheet" href="../src/gentleface-sprites.min.css" />
    <!--[if lt IE 5.5]> <link rel="stylesheet" href="assets/styles_ie_lt5.5.css" /> <![endif]-->
    <!--[if gte IE 5.5]> <link rel="stylesheet" href="assets/styles_ie_gte5.5.css" /> <![endif]-->
<style type="text/css">
.sprite-overview-wrapper { display: block; width: auto; height: auto; text-align: center; background-color: #999;}
ul.sprite-overview { margin: 1em 3em; width: auto; display: block; list-style-type: none; }
ul.sprite-overview li { float: left; width: 20px; height: 20px; display: inline-block; padding: 2px; margin: 5px; }
ul.sprite-overview li:hover { border: 1px solid #ccc; padding: 1px; }
ul.sprite-overview li a { display: inline-block; }
table.gentlefacetable { border-collapse: collapse; margin: 1em;background: #eee; }
table.gentlefacetable th { border: 1px solid #ccc; padding: 6px; color: #aaa; }
table.gentlefacetable td { border: 1px dotted #ccc; padding: 4px; text-align: center; vertical-align: middle; font-size: .9em;; }
table.gentlefacetable td.text { border-right: 1px solid #ccc; text-align: left; font-weight: bold; }
table.gentlefacetable td.white { background-color: #000; }
table.gentlefacetable td.black { background-color: #fff; }
</style>
</head>
<body>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <header id="top" role="banner">
        <hgroup>
            <h1>Gentleface icons CSS sprites demo</h1>
            <h2 class="slogan">The <strong>UNOFFICIAL</strong> sprites - Original icons work from <a href="http://www.gentleface.com/" title="www.gentleface.com">Gentleface UI / UX design</a>.</h2>
        </hgroup>
        <div class="hat">
            <p>This page is a demonstration/presentation of the CSS sprites constructed on the <a href="http://www.gentleface.com/free_icon_set.html" title="See online">Gentleface free web-icons set</a>. The original set of icons is proposed under <a href="http://creativecommons.org/licenses/by-nc/3.0/" title="Read the license online">Creative Commons "Attribution - Non Commercial"</a> license, free of use for NON COMMERCIAL usage as long as you mention the image credits to Gentleface. You can find more license options at the <a href="http://www.gentleface.com/free_icon_set.html">creator website</a>.</p>
            <p>This work is unofficial and is not liable for Gentleface but was developed and is available for public download and use with their agreement in the conditions explained below.</p>
        </div>
    </header>

	<nav>
		<h2>Navigation</h2>
        <ul id="navigation_menu" class="menu" role="navigation">
            <li><a href="#top">Map of the demo</a><ul>
                <li><a href="#global">Global sprite overview</a></li>
                <li><a href="#usage">Sprites usage</a></li>
                <li><a href="#table">Full icons review</a></li>
            </ul></li>
            <li><a href="http://www.gentleface.com/">Gentleface online</a></li>
        </ul>

        <div class="info">
            <p><a href="http://github.com/atelierspierrot/gentleface-sprites">See online on GitHub</a></p>
            <p class="comment">The sources of this package are hosted on <a href="http://github.com">GitHub</a>. To follow sources updates, report a bug or read opened bug tickets and any other information, please see the GitHub website above.</p>
        </div>

    	<p class="credits" id="user_agent"></p>
	</nav>

    <div id="content" role="main">

        <article>

<p>To learn more about "CSS sprites" conception, see <a href="http://en.wikipedia.org/wiki/Sprite_%28computer_graphics%29#Sprites_by_CSS" title="See online on wikipedia.com" class="external">Sprite (computer graphics) [wikipedia]</a>.</p>
<p>The sprites were generated with the help of <a href="http://spritegen.website-performance.org/" title="See online" class="external">website-performance.org</a> and are <a href="http://jigsaw.w3.org/css-validator/" title="Validate it online" class="external">CSS3 valid</a>.</p>
<p>The minified version of the CSS file of the package was processed with the <a href="http://refresh-sf.com/yui/" title="See online" class="external">YUI Compressor</a>.</p>
<p>The PNG sprites are optimized with <a href="http://www.smushit.com/ysmush.it/" title="See online" class="external">Smush.it<sup>TM</sup></a>.</p>

<h2 id="global">Global sprite overview</h2>

<noscript><p class="warning">This page requires that JavaScript be enabled in your browser (<em>if you see this message, it doesn't seem to be the case</em>).</p></noscript>

<form>
    <label for="change_overview">Change sprite color:&nbsp;</label>
    <select onchange="return changeOverview();" id="change_overview">
        <option value="black" selected>black</option>
        <option value="white">white</option>
        <option value="black hover-white">black hover white</option>
        <option value="white hover-black">white hover black</option>
    </select>
    &nbsp;|&nbsp;
    <label for="change_overview_bg">Change background color:&nbsp;</label>
    <select onchange="return changeOverviewBackground();" id="change_overview_bg">
        <option value="999" selected>grey</option>
        <option value="000">black</option>
        <option value="fff">white</option>
    </select>
    &nbsp;|&nbsp;
    <span class="comment">Clic on an icon below to see the full set in both colors.</span>
</form>

<div class="sprite-overview-wrapper">
    <ul class="sprite-overview" id="sprite_overview">
<?php
foreach ($icons_list as $class) {
    echo <<<EOT

        <li><a href="#$class" title="$class"><span class="gentleface reset $class"></span></a></li>
EOT;
}
?>
    </ul>
    <br class="clear" />
</div>

<h2 id="usage">Sprites usage</h2>

<p>To use the sprites, just include the CSS definition file in your HTML document:</p>

<pre class="code">
	&lt;link rel="stylesheet" href="path/to/src/gentleface-sprites.css" /&gt;
	// or the minified version (light weight):
	&lt;link rel="stylesheet" href="path/to/src/gentleface-sprites.min.css" /&gt;
</pre>

<p>The sprites are used adding specific CSS classes to a DOM entity such as a <code>span</code>.
Each item of the sprites is accessible by using one of the global CSS classes <code>gentleface-XX</code> where "XX" is an
icon size in 16, 24, 32 or 48; each item will be an empty square of XX by XX pixels with the wanted image as background.
This background is defined adding the name of the item as a CSS class. For example, to construct an item using the "print" image,
the CSS class to use will be <code>gentleface-XX print</code>.</p>

<p>As the images are proposed in black or white, the color can be added as a class.</p>

<p>A special <code>reset</code> class can be used to reset some basic CSS definitions for an item, such as its
border (<em>none</em>), its margins and paddings (<em>0</em>).</p>

<h3>Full synopsis</h3>

<p>A complete usage synopsis of the sprites could be:</p>

<pre style="font-weight: bold; text-align: center;">
    &lt;span class="gentleface[-16 | 24 | 32 | 48] [reset] [black | white] icon_name"&gt;&lt;/span&gt;
</pre>

<h3>Defaults</h3>

<p>A default class is defined to use the "black" set of 16 by 16 pixels icons.
Using the standalone class <code>gentleface</code> will be the same as <code>gentleface-16 black</code>.</p>

<h3>Effects</h3>

<p>Some special classes are designed to add some effects on certain icons, such as a "link hover" effect.</p>
<ul>
    <li><code>hover-COLOR</code>: classes for links to switch the icon color on <code>hover</code> and <code>focus</code> link event,</li>
    <li><code>active-COLOR</code>: classes for any DOM object to switch the icon color if the object has class <code>active</code>,</li>
</ul>

<h3>Examples</h3>

<pre class="code">
    // for a black (default) version of icon 'balance' in size 16x16 (default)
    &lt;span class="gentleface balance"&gt;&lt;/span&gt;
    // or
    &lt;span class="gentleface-16 app_window_shell"&gt;&lt;/span&gt;

    // for a black (default) version of icon 'app_window_shell' in size 24x24
    &lt;span class="gentleface-24 app_window_shell"&gt;&lt;/span&gt;
    // or
    &lt;span class="gentleface-24 black app_window_shell"&gt;&lt;/span&gt;

    // for a white version of icon 'rss' in size 32x32
    &lt;span class="gentleface-32 white rss"&gt;&lt;/span&gt;

    // using the same with the 'reset' feature
    &lt;span class="gentleface-32 reset white rss"&gt;&lt;/span&gt;

    // usage of the 'hover-COLOR' feature
    &lt;a ...&gt;&lt;span class="gentleface-48 reset hover-white rss"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;a ...&gt;&lt;span class="gentleface-32 reset white hover-black rss"&gt;&lt;/span&gt;&lt;/a&gt;

    // usage of the 'active-COLOR' feature
    &lt;span&gt;&lt;span class="gentleface-24 reset active-white shield"&gt;&lt;/span&gt;&lt;/span&gt;
    &lt;span class="active"&gt;&lt;span class="gentleface-24 reset active-white shield"&gt;&lt;/span&gt;&lt;/span&gt;
</pre>

<p>Results:</p>

    <p><span class="gentleface balance"></span></p>
    <p><span class="gentleface-16 app_window_shell"></span></p>
    <p><span class="gentleface-24 app_window_shell"></span></p>
    <p><span class="gentleface-24 black app_window_shell"></span></p>
    <p><span class="gentleface-32 white rss"></span></p>
    <p><span class="gentleface-32 reset white rss"></span></p>
    <p><a href="#" title="Icon with hover effect"><span class="gentleface-48 reset hover-white rss"></span></a></p>
    <p><a href="#" title="Inversed icon with hover effect"><span class="gentleface-32 reset white hover-black rss"></span></a></p>
    <p>
        <span title="Classic state icon"><span class="gentleface-24 reset active-white shield"></span></span>
        &nbsp;|&nbsp;
        <span class="active" title="Active state icon"><span class="gentleface-24 reset active-white shield"></span></span>
    </p>

<h2 id="table">Full icons review</h2>

<p>This table presents each icon separatly. To see the CSS class used, put you mouse hover an item. Words between brackets are optional.</p>

<table class="gentlefacetable" id="tabletop">
<thead>
    <tr>
        <th rowspan="2">Name</th>
        <th colspan="4">White sprite</th>
        <th colspan="4">Black sprite</th>
        <th rowspan="2"></th>
    </tr>
    <tr>
        <th>16x16 px sprite</th>
        <th>24x24 px sprite</th>
        <th>32x32 px sprite</th>
        <th>48x48 px sprite</th>
        <th>16x16 px sprite</th>
        <th>24x24 px sprite</th>
        <th>32x32 px sprite</th>
        <th>48x48 px sprite</th>
    </tr>
</thead>
<tbody>
<?php
foreach ($icons_list as $class) {
    echo <<<EOT

    <tr>
        <td class="text" id="$class">$class</td>
        <td class="white" title="gentleface[-16] [reset] white $class"><span class="gentleface-16 reset white $class"></span></td>
        <td class="white" title="gentleface-24 [reset] white $class"><span class="gentleface-24 reset white $class"></span></td>
        <td class="white" title="gentleface-32 [reset] white $class"><span class="gentleface-32 reset white $class"></span></td>
        <td class="white" title="gentleface-48 [reset] white $class"><span class="gentleface-48 reset white $class"></span></td>
        <td class="black" title="gentleface[-16] [reset] [black] $class"><span class="gentleface-16 reset black $class"></span></td>
        <td class="black" title="gentleface-24 [reset] [black] $class"><span class="gentleface-24 reset black $class"></span></td>
        <td class="black" title="gentleface-32 [reset] [black] $class"><span class="gentleface-32 reset black $class"></span></td>
        <td class="black" title="gentleface-48 [reset] [black] $class"><span class="gentleface-48 reset black $class"></span></td>
        <td><a href="#tabletop" title="Back to top">&uarr;</a></td>
    </tr>

EOT;
}
?>
</tbody>
</table>

        </article>
    </div>

    <footer id="footer">
		<div class="credits float-left">
		    This page is <a href="" title="Check now online" id="html_validation">HTML5</a> & <a href="" title="Check now online" id="css_validation">CSS3</a> valid.
		</div>
		<div class="credits float-right">
            <a href="http://www.gentleface.com/free_icon_set.html">Gentleface custom toolbar icons</a> package by <a href="http://www.gentleface.com">Gentleface UI / UX design</a> under <a href="http://creativecommons.org/licenses/by-nc/3.0/">CC-BY-NC 3.0</a> license or <a href="http://www.gentleface.com/free_icon_set.html">Royalty Free</a> license.
            <br />
            <a href="http://github.com/atelierspierrot/gentleface-sprites">atelierspierrot/gentleface-sprites</a> package by <a href="http://github.com/atelierspierrot">Les Ateliers Pierrot</a> under <a href="http://creativecommons.org/licenses/by-nc/3.0/">CC-BY-NC 3.0</a> original license.
		</div>
    </footer>

    <div class="back_menu" id="short_navigation">
        <a href="#" title="See navigation menu" id="short_menu_handler"><span class="text">Navigation Menu</span></a>
        &nbsp;|&nbsp;
        <a href="#footer" title="Go to the bottom of the page"><span class="text">Go to bottom&nbsp;</span>&darr;</a>
        &nbsp;|&nbsp;
        <a href="#top" title="Back to the top of the page"><span class="text">Back to top&nbsp;</span>&uarr;</a>
        <ul id="short_menu" class="menu" role="navigation"></ul>
    </div>

    <div id="message_box" class="msg_box"></div>

<!-- jQuery lib -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/jquery/jquery-last.min.js"><\/script>')</script>
<script>$.uiBackCompat = false;</script>

<!-- jQuery.highlight plugin -->
<script src="assets/jquery/jquery.highlight.js"></script>

<!-- scripts for demo -->
<script src="assets/scripts.js"></script>

<script>
$(function() {
    initBacklinks();
    activateMenuItem();
    getToHash();
    buildFootNotes();
    addCSSValidatorLink('assets/styles.css');
    addHTMLValidatorLink();
    $("#user_agent").html( navigator.userAgent );
    $('pre.code').highlight({source:0, indent:'tabs', code_lang: 'data-language'});
    initHandler('source');
    $('#source_block_content').text( $('#js_code').html() );
});
function changeOverview() {
    var _class = $('#change_overview option:selected').val(),
        list = $('#sprite_overview'),
        wrapper = $('.sprite-overview-wrapper');
    list.find('.gentleface').each(function(i,e) {
        $(e)
            .removeClass('black')
            .removeClass('hover-black')
            .removeClass('white')
            .removeClass('hover-white')
            .addClass(_class);
    });
    return false;
}
function changeOverviewBackground() {
    var _color = $('#change_overview_bg option:selected').val(),
        wrapper = $('.sprite-overview-wrapper');
    wrapper.css('background-color', '#'+_color);
    return false;
}
</script>
<script id="js_code">
</script>
</body>
</html>
