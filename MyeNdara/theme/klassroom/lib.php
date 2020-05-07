<?php
function theme_klassroom_process_css($css, $theme) {
global $OUTPUT;
// Set the background image for the logo.
$logo = $OUTPUT->get_logo_url(null, 75);
$css = theme_klassroom_set_logo($css, $logo);
// Set custom CSS.
if (!empty($theme->settings->customcss)) {
$customcss = $theme->settings->customcss;
} else {
$customcss = null;
}
$css = theme_klassroom_set_customcss($css, $customcss);
// Set the background image for the allcoursesbg.
$allcoursesbg = $theme->setting_file_url('allcoursesbg', 'allcoursesbg');
if(!isset($allcoursesbg)){
$allcoursesbg = $OUTPUT->image_url('all-course-bg', 'theme');
}
$css = theme_klassroom_set_allcoursesbg($css, $allcoursesbg);
// Set the background image for the enrolledcoursesbg.
$enrolledcoursesbg = $theme->setting_file_url('enrolledcoursesbg', 'enrolledcoursesbg');
if(!isset($enrolledcoursesbg)){
$enrolledcoursesbg = $OUTPUT->image_url('enrolledcourses-bg', 'theme');
}
$css = theme_klassroom_set_enrolledcoursesbg($css, $enrolledcoursesbg); 
// Set the background image for the loginbackground.
$loginbackground = $theme->setting_file_url('loginbackground', 'loginbackground');
if(!isset($loginbackground)){
$loginbackground = $OUTPUT->image_url('loginbackground', 'theme');
}
$css = theme_klassroom_set_loginbackground($css, $loginbackground); 
// Set the internalbannerimage.
$internalbannerimage = $theme->setting_file_url('internalbannerimage', 'internalbannerimage');
if(!isset($internalbannerimage)){
$internalbannerimage = $OUTPUT->image_url('internalbanner', 'theme');
}
$css = theme_klassroom_set_internalbannerimage($css, $internalbannerimage);  
// Set the sitebluecolor.
if (empty($theme->settings->sitebluecolor)) {
$sitebluecolor = '#002647'; // Default.
} else {
$sitebluecolor = $theme->settings->sitebluecolor;
}
$css = klassroom_set_sitebluecolor($css, $sitebluecolor);
// Set the siteorangecolor.
if (empty($theme->settings->siteorangecolor)) {
$siteorangecolor = '#f9a53b'; // Default.
} else {
$siteorangecolor = $theme->settings->siteorangecolor;
}
$css = klassroom_set_siteorangecolor($css, $siteorangecolor);
// Set the sitegreencolor.
if (empty($theme->settings->sitegreencolor)) {
$sitegreencolor = '#7eb34e'; // Default.
} else {
$sitegreencolor = $theme->settings->sitegreencolor;
}
$css = klassroom_set_sitegreencolor($css, $sitegreencolor);
// Set the sitelightbluecolor.
if (empty($theme->settings->sitelightbluecolor)) {
$sitelightbluecolor = '#02a0b7'; // Default.
} else {
$sitelightbluecolor = $theme->settings->sitelightbluecolor;
}
$css = klassroom_set_sitelightbluecolor($css, $sitelightbluecolor);
// Set the sitevioletcolor.
if (empty($theme->settings->sitevioletcolor)) {
$sitevioletcolor = '#3f4aa5'; // Default.
} else {
$sitevioletcolor = $theme->settings->sitevioletcolor;
}
$css = klassroom_set_sitevioletcolor($css, $sitevioletcolor);
// Set the siteredcolor.
if (empty($theme->settings->siteredcolor)) {
$siteredcolor = '#f14f4a'; // Default.
} else {
$siteredcolor = $theme->settings->siteredcolor;
}
$css = klassroom_set_siteredcolor($css, $siteredcolor);
return $css;
}
/**
* Adds the JavaScript for the colour switcher to the page.
*
* The colour switcher is a YUI moodle module that is located in
*     theme/klassroom/yui/klassroom/klassroom.js
*
* @param moodle_page $page
*/
function klassroom_initialise_colourswitcher(moodle_page $page) {
user_preference_allow_ajax_update('theme_klassroom_chosen_colour', PARAM_ALPHA);
$page->requires->yui_module('moodle-theme_klassroom-colourswitcher', 'M.theme_klassroom.initColourSwitcher', array(array('div'=>'#colourswitcher')));
}
/**
* Gets the colour the user has selected, or the default if they have never changed
*
* @param string $default The default colour to use, normally red
* @return string The colour the user has selected
*/
function klassroom_get_colour() {
if (!empty($_COOKIE['klassroom'])){
$default = $_COOKIE['klassroom'];
}else{
$default='blue';
}
$color = get_user_preferences('theme_klassroom_chosen_colour', $default);
if (!empty($_COOKIE['klassroom']) && $_COOKIE['klassroom'] != $color){
set_user_preference('theme_klassroom_chosen_colour', $_COOKIE['klassroom']);
return $_COOKIE['klassroom'];
}
return $color;
}
/**
* Checks if the user is switching colours with a refresh (JS disabled)
*
* If they are this updates the users preference in the database
*
* @return bool
*/
function klassroom_check_colourswitch() {
$changecolour = optional_param('klassroomcolour', null, PARAM_ALPHA);
if (in_array($changecolour, array('blue', 'green', 'red', 'orange', 'yellow', 'pink'))) {
setcookie("klassroom", $changecolour, time()+3600*24*365*10, "/"); // set color in cookie
return set_user_preference('theme_klassroom_chosen_colour', $changecolour);
}
return false;
}
/**
* Adds the logo to CSS.
*
* @param string $css The CSS.
* @param string $logo The URL of the logo.
* @return string The parsed CSS
*/
function theme_klassroom_set_logo($css, $logo) {
$tag = '[[setting:logo]]';
$replacement = $logo;
if (is_null($replacement)) {
$replacement = '';
}
$css = str_replace($tag, $replacement, $css);
return $css;
}
function theme_klassroom_set_allcoursesbg($css, $allcoursesbg) {
$tag = '[[setting:allcoursesbg]]';
$replacement = $allcoursesbg;
if (is_null($replacement)) {
$replacement = '';
}
$css = str_replace($tag, $replacement, $css);
return $css;
}
function theme_klassroom_set_enrolledcoursesbg($css, $enrolledcoursesbg) {
$tag = '[[setting:enrolledcoursesbg]]';
$replacement = $enrolledcoursesbg;
if (is_null($replacement)) {
$replacement = '';
}
$css = str_replace($tag, $replacement, $css);
return $css;
}
function theme_klassroom_set_loginbackground($css, $loginbackground) {
$tag = '[[setting:loginbackground]]';
$replacement = $loginbackground;
if (is_null($replacement)) {
$replacement = '';
}
$css = str_replace($tag, $replacement, $css);
return $css;
}
function theme_klassroom_set_internalbannerimage($css, $internalbannerimage) {
$tag = '[[setting:internalbannerimage]]';
$replacement = $internalbannerimage;
if (is_null($replacement)) {
$replacement = '';
}
$css = str_replace($tag, $replacement, $css);
return $css;
}
function klassroom_set_sitebluecolor($css, $sitebluecolor) {
$tag = '[[setting:sitebluecolor]]';
$css = str_replace($tag, $sitebluecolor, $css);
return $css;
}
function klassroom_set_siteorangecolor($css, $siteorangecolor) {
$tag = '[[setting:siteorangecolor]]';
$css = str_replace($tag, $siteorangecolor, $css);
return $css;
}
function klassroom_set_sitegreencolor($css, $sitegreencolor) {
$tag = '[[setting:sitegreencolor]]';
$css = str_replace($tag, $sitegreencolor, $css);
return $css;
}
function klassroom_set_sitelightbluecolor($css, $sitelightbluecolor) {
$tag = '[[setting:sitelightbluecolor]]';
$css = str_replace($tag, $sitelightbluecolor, $css);
return $css;
}
function klassroom_set_sitevioletcolor($css, $sitevioletcolor) {
$tag = '[[setting:sitevioletcolor]]';
$css = str_replace($tag, $sitevioletcolor, $css);
return $css;
}
function klassroom_set_siteredcolor($css, $siteredcolor) {
$tag = '[[setting:siteredcolor]]';
$css = str_replace($tag, $siteredcolor, $css);
return $css;
}
/**
* Serves any files associated with the theme settings.
*
* @param stdClass $course
* @param stdClass $cm
* @param context $context
* @param string $filearea
* @param array $args
* @param bool $forcedownload
* @param array $options
* @return bool
*/
require_once($CFG->libdir.'/coursecatlib.php');
function theme_klassroom_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
$coursecats = coursecat::make_categories_list();
foreach ($coursecats as $key => $value) {
if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'categoryimage'.$key) {
$theme = theme_config::load('klassroom');
return $theme->setting_file_serve('categoryimage'.$key, $args, $forcedownload, $options);
}
}
if ($context->contextlevel == CONTEXT_SYSTEM and ($filearea === 'logo' || $filearea === 'smalllogo'|| $filearea === 'defaultcategoryimage' || $filearea === 'allcoursesbg' || $filearea === 'enrolledcoursesbg' || $filearea === 'loginbackground' || $filearea === 'footerlogo' || $filearea === 'internalbannerimage' || $filearea === 'favicon' || $filearea === 'clientlogo1' || $filearea === 'clientlogo2' || $filearea === 'clientlogo3' || $filearea === 'clientlogo4' || $filearea === 'clientlogo5' || $filearea === 'clientlogo6' || $filearea === 'slider1image' || $filearea === 'slider2image' || $filearea === 'slider3image' || $filearea === 'slider4image' || $filearea === 'featuredpostimage' || $filearea === 'event1image' || $filearea === 'event2image' || $filearea === 'event3image' || $filearea === 'event4image' || $filearea === 'projectaddbanner' || $filearea === 'classroomimage1' || $filearea === 'classroomimage2' || $filearea === 'classroomimage3' || $filearea === 'classroomimage4' || $filearea === 'classroomimage5' || $filearea === 'classroomimage6' || $filearea === 'classroomimage7' || $filearea === 'classroomimage8' || $filearea === 'classroomimage9' || $filearea === 'eventimage1' || $filearea === 'eventimage2' || $filearea === 'eventimage3' || $filearea === 'eventimage4' || $filearea === 'eventimage5' || $filearea === 'eventimage6' || $filearea === 'seminarimage1' || $filearea === 'seminarimage2' || $filearea === 'seminarimage3' || $filearea === 'seminarimage4' || $filearea === 'seminarimage5' || $filearea === 'seminarimage6' || $filearea === 'loginbackground' || $filearea === 'tutor1image' || $filearea === 'tutor2image' || $filearea === 'tutor3image' || $filearea === 'tutor4image' || $filearea === 'tutor5image' || $filearea === 'tutor6image' || $filearea === 'tutor7image' || $filearea === 'tutor8image' || $filearea === 'tutor9image')){
$theme = theme_config::load('klassroom');
// By default, theme files must be cache-able by both browsers and proxies.
if (!array_key_exists('cacheability', $options)) {
$options['cacheability'] = 'public';
}
return $theme->setting_file_serve($filearea, $args, $forcedownload, $options);
} else {
send_file_not_found();
}
}
/**
* Adds any custom CSS to the CSS before it is cached.
*
* @param string $css The original CSS.
* @param string $customcss The custom CSS to add.
* @return string The CSS which now contains our custom CSS.
*/
function theme_klassroom_set_customcss($css, $customcss) {
$tag = '[[setting:customcss]]';
$replacement = $customcss;
if (is_null($replacement)) {
$replacement = '';
}
$css = str_replace($tag, $replacement, $css);
return $css;
}
/**
* Returns an object containing HTML for the areas affected by settings.
*
* Do not add klassroom specific logic in here, child themes should be able to
* rely on that function just by declaring settings with similar names.
*
* @param renderer_base $output Pass in $OUTPUT.
* @param moodle_page $page Pass in $PAGE.
* @return stdClass An object with the following properties:
*      - navbarclass A CSS class to use on the navbar. By default ''.
*      - heading HTML to use for the heading. A logo if one is selected or the default heading.
*      - footnote HTML to use as a footnote. By default ''.
*/
function theme_klassroom_get_html_for_settings(renderer_base $output, moodle_page $page) {
global $CFG;
$return = new stdClass;
$return->navbarclass = '';
if (!empty($page->theme->settings->invert)) {
$return->navbarclass .= ' navbar-inverse';
}
// Only display the logo on the front page and login page, if one is defined.
if (!empty($page->theme->settings->logo) &&
($page->pagelayout == 'frontpage' || $page->pagelayout == 'login')) {
$return->heading = html_writer::tag('div', '', array('class' => 'logo'));
} else {
$return->heading = $output->page_heading();
}
$return->footnote = '';
if (!empty($page->theme->settings->footnote)) {
$return->footnote = '
<div class="footnote text-center">'.format_text($page->theme->settings->footnote).'</div>
';
}
return $return;
}
/**
* All theme functions should start with theme_klassroom_
* @deprecated since 2.5.1
*/
function klassroom_process_css() {
throw new coding_exception('Please call theme_'.__FUNCTION__.' instead of '.__FUNCTION__);
}
/**
* All theme functions should start with theme_klassroom_
* @deprecated since 2.5.1
*/
function klassroom_set_logo() {
throw new coding_exception('Please call theme_'.__FUNCTION__.' instead of '.__FUNCTION__);
}
/**
* All theme functions should start with theme_klassroom_
* @deprecated since 2.5.1
*/
function klassroom_set_customcss() {
throw new coding_exception('Please call theme_'.__FUNCTION__.' instead of '.__FUNCTION__);
}
/* Multilanguage
--------------------- */
function theme_klassroom_get_setting($setting, $format = false) {
global $CFG;
require_once($CFG->dirroot . '/lib/weblib.php');
static $theme;
if (empty($theme)) {
$theme = theme_config::load('klassroom');
}
if (empty($theme->settings->$setting)) {
return false;
} else if (!$format) {
return $theme->settings->$setting;
} else if ($format === 'format_text') {
return format_text($theme->settings->$setting, FORMAT_PLAIN);
} else if ($format === 'format_html') {
return format_text($theme->settings->$setting, FORMAT_HTML, array('trusted' => true, 'noclean' => true));
} else {
return format_string($theme->settings->$setting);
}
}