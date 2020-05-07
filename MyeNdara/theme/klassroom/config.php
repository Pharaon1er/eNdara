<?php
$THEME->name = 'klassroom';
$THEME->doctype = 'html5';
$THEME->parents = array('clean','bootstrapbase');
$THEME->sheets = array('custom','font-awesome','slider','owl','block_icon','menu','blue',
'red',
'lightblue',
'green',
'yellow',
'purple');
$THEME->yuicssmodules = array();
$THEME->enable_dock = false;
$THEME->editor_sheets = array();
$THEME->layouts = array(
// The site home page.
'frontpage' => array(
'file' => 'frontpage.php',
'regions' => array('side-pre','side-post'),
'defaultregion' => 'side-pre',
'options' => array('nonavbar'=>true, 'frontpage'=>true),
),
// Login page.
'login' => array(
'file' => 'login.php',
'regions' => array(),
'options' => array('langmenu'=>true),
),    
);
$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->csspostprocess = 'theme_klassroom_process_css';
$THEME->javascripts_footer = array('custom','owl.carousel','menuNav','colourswitcher');
$THEME->javascripts = array('jquery-3.2.1.min','jquery.min','superfish.custom.min');