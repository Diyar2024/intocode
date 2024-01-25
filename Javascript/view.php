<!DOCTYPE html>

<html  dir="ltr" lang="en" xml:lang="en">
<head>
    <title>intoCODE, 2023, Schult: Overview.js</title>
    <link rel="shortcut icon" href="https://moodle.hs-hannover.de/pluginfile.php/1/theme_boost_campus/favicon/1686672301/favicon.ico" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="moodle, intoCODE, 2023, Schult: Overview.js" />
<link rel="stylesheet" type="text/css" href="https://moodle.hs-hannover.de/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css" /><script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="https://moodle.hs-hannover.de/theme/styles.php/boost_campus/1686672301_1686672368/all" />
<link rel="stylesheet" type="text/css" href="https://moodle.hs-hannover.de/filter/syntaxhighlighter/styles/atom-one-light.min.css" />
<script>
//<![CDATA[
var M = {}; M.yui = {};
M.pageloadstarttime = new Date();
M.cfg = {"wwwroot":"https:\/\/moodle.hs-hannover.de","sesskey":"hzHo8pxk4d","sessiontimeout":"28800","sessiontimeoutwarning":1200,"themerev":"1686672301","slasharguments":1,"theme":"boost_campus","iconsystemmodule":"core\/icon_system_fontawesome","jsrev":"1686672301","admin":"admin","svgicons":true,"usertimezone":"Europe\/Berlin","contextid":925912,"langrev":1687831686,"templaterev":"1686672301"};var yui1ConfigFn = function(me) {if(/-skin|reset|fonts|grids|base/.test(me.name)){me.type='css';me.path=me.path.replace(/\.js/,'.css');me.path=me.path.replace(/\/yui2-skin/,'/assets/skins/sam/yui2-skin')}};
var yui2ConfigFn = function(me) {var parts=me.name.replace(/^moodle-/,'').split('-'),component=parts.shift(),module=parts[0],min='-min';if(/-(skin|core)$/.test(me.name)){parts.pop();me.type='css';min=''}
if(module){var filename=parts.join('-');me.path=component+'/'+module+'/'+filename+min+'.'+me.type}else{me.path=component+'/'+component+'.'+me.type}};
YUI_config = {"debug":false,"base":"https:\/\/moodle.hs-hannover.de\/lib\/yuilib\/3.17.2\/","comboBase":"https:\/\/moodle.hs-hannover.de\/theme\/yui_combo.php?","combine":true,"filter":null,"insertBefore":"firstthemesheet","groups":{"yui2":{"base":"https:\/\/moodle.hs-hannover.de\/lib\/yuilib\/2in3\/2.9.0\/build\/","comboBase":"https:\/\/moodle.hs-hannover.de\/theme\/yui_combo.php?","combine":true,"ext":false,"root":"2in3\/2.9.0\/build\/","patterns":{"yui2-":{"group":"yui2","configFn":yui1ConfigFn}}},"moodle":{"name":"moodle","base":"https:\/\/moodle.hs-hannover.de\/theme\/yui_combo.php?m\/1686672301\/","combine":true,"comboBase":"https:\/\/moodle.hs-hannover.de\/theme\/yui_combo.php?","ext":false,"root":"m\/1686672301\/","patterns":{"moodle-":{"group":"moodle","configFn":yui2ConfigFn}},"filter":null,"modules":{"moodle-core-actionmenu":{"requires":["base","event","node-event-simulate"]},"moodle-core-blocks":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification"]},"moodle-core-chooserdialogue":{"requires":["base","panel","moodle-core-notification"]},"moodle-core-dragdrop":{"requires":["base","node","io","dom","dd","event-key","event-focus","moodle-core-notification"]},"moodle-core-event":{"requires":["event-custom"]},"moodle-core-formchangechecker":{"requires":["base","event-focus","moodle-core-event"]},"moodle-core-handlebars":{"condition":{"trigger":"handlebars","when":"after"}},"moodle-core-languninstallconfirm":{"requires":["base","node","moodle-core-notification-confirm","moodle-core-notification-alert"]},"moodle-core-lockscroll":{"requires":["plugin","base-build"]},"moodle-core-maintenancemodetimer":{"requires":["base","node"]},"moodle-core-notification":{"requires":["moodle-core-notification-dialogue","moodle-core-notification-alert","moodle-core-notification-confirm","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-core-notification-dialogue":{"requires":["base","node","panel","escape","event-key","dd-plugin","moodle-core-widget-focusafterclose","moodle-core-lockscroll"]},"moodle-core-notification-alert":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-confirm":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-exception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-ajaxexception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-popuphelp":{"requires":["moodle-core-tooltip"]},"moodle-core-tooltip":{"requires":["base","node","io-base","moodle-core-notification-dialogue","json-parse","widget-position","widget-position-align","event-outside","cache-base"]},"moodle-core_availability-form":{"requires":["base","node","event","event-delegate","panel","moodle-core-notification-dialogue","json"]},"moodle-backup-backupselectall":{"requires":["node","event","node-event-simulate","anim"]},"moodle-backup-confirmcancel":{"requires":["node","node-event-simulate","moodle-core-notification-confirm"]},"moodle-course-categoryexpander":{"requires":["node","event-key"]},"moodle-course-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-course-coursebase","moodle-course-util"]},"moodle-course-formatchooser":{"requires":["base","node","node-event-simulate"]},"moodle-course-management":{"requires":["base","node","io-base","moodle-core-notification-exception","json-parse","dd-constrain","dd-proxy","dd-drop","dd-delegate","node-event-delegate"]},"moodle-course-util":{"requires":["node"],"use":["moodle-course-util-base"],"submodules":{"moodle-course-util-base":{},"moodle-course-util-section":{"requires":["node","moodle-course-util-base"]},"moodle-course-util-cm":{"requires":["node","moodle-course-util-base"]}}},"moodle-form-dateselector":{"requires":["base","node","overlay","calendar"]},"moodle-form-passwordunmask":{"requires":[]},"moodle-form-shortforms":{"requires":["node","base","selector-css3","moodle-core-event"]},"moodle-question-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-question-preview":{"requires":["base","dom","event-delegate","event-key","core_question_engine"]},"moodle-question-searchform":{"requires":["base","node"]},"moodle-availability_completion-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_date-form":{"requires":["base","node","event","io","moodle-core_availability-form"]},"moodle-availability_grade-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_group-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_grouping-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_profile-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-mod_assign-history":{"requires":["node","transition"]},"moodle-mod_bigbluebuttonbn-broker":{"requires":["base","node","datasource-get","datasource-jsonschema","datasource-polling","moodle-core-notification"]},"moodle-mod_bigbluebuttonbn-imports":{"requires":["base","node"]},"moodle-mod_bigbluebuttonbn-modform":{"requires":["base","node"]},"moodle-mod_bigbluebuttonbn-recordings":{"requires":["base","node","datasource-get","datasource-jsonschema","datasource-polling","moodle-core-notification"]},"moodle-mod_bigbluebuttonbn-rooms":{"requires":["base","node","datasource-get","datasource-jsonschema","datasource-polling","moodle-core-notification"]},"moodle-mod_quiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form"]},"moodle-mod_quiz-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-base","moodle-mod_quiz-util-page","moodle-mod_quiz-util-slot","moodle-course-util"]},"moodle-mod_quiz-modform":{"requires":["base","node","event"]},"moodle-mod_quiz-questionchooser":{"requires":["moodle-core-chooserdialogue","moodle-mod_quiz-util","querystring-parse"]},"moodle-mod_quiz-quizbase":{"requires":["base","node"]},"moodle-mod_quiz-toolboxes":{"requires":["base","node","event","event-key","io","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-slot","moodle-core-notification-ajaxexception"]},"moodle-mod_quiz-util":{"requires":["node","moodle-core-actionmenu"],"use":["moodle-mod_quiz-util-base"],"submodules":{"moodle-mod_quiz-util-base":{},"moodle-mod_quiz-util-slot":{"requires":["node","moodle-mod_quiz-util-base"]},"moodle-mod_quiz-util-page":{"requires":["node","moodle-mod_quiz-util-base"]}}},"moodle-message_airnotifier-toolboxes":{"requires":["base","node","io"]},"moodle-filter_glossary-autolinker":{"requires":["base","node","io-base","json-parse","event-delegate","overlay","moodle-core-event","moodle-core-notification-alert","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-filter_mathjaxloader-loader":{"requires":["moodle-core-event"]},"moodle-editor_atto-editor":{"requires":["node","transition","io","overlay","escape","event","event-simulate","event-custom","node-event-html5","node-event-simulate","yui-throttle","moodle-core-notification-dialogue","moodle-core-notification-confirm","moodle-editor_atto-rangy","handlebars","timers","querystring-stringify"]},"moodle-editor_atto-plugin":{"requires":["node","base","escape","event","event-outside","handlebars","event-custom","timers","moodle-editor_atto-menu"]},"moodle-editor_atto-menu":{"requires":["moodle-core-notification-dialogue","node","event","event-custom"]},"moodle-editor_atto-rangy":{"requires":[]},"moodle-format_grid-gridkeys":{"requires":["event-nav-keys"]},"moodle-report_eventlist-eventfilter":{"requires":["base","event","node","node-event-delegate","datatable","autocomplete","autocomplete-filters"]},"moodle-report_loglive-fetchlogs":{"requires":["base","event","node","io","node-event-delegate"]},"moodle-gradereport_grader-gradereporttable":{"requires":["base","node","event","handlebars","overlay","event-hover"]},"moodle-gradereport_history-userselector":{"requires":["escape","event-delegate","event-key","handlebars","io-base","json-parse","moodle-core-notification-dialogue"]},"moodle-tool_capability-search":{"requires":["base","node"]},"moodle-tool_lp-dragdrop-reorder":{"requires":["moodle-core-dragdrop"]},"moodle-tool_monitor-dropdown":{"requires":["base","event","node"]},"moodle-local_wikiexport-printlinks":{"requires":["base","node"]},"moodle-local_wikiexport-sortpages":{"requires":["base","node","io-base","dd-constrain","dd-proxy","dd-drop","json-parse"]},"moodle-assignfeedback_editpdf-editor":{"requires":["base","event","node","io","graphics","json","event-move","event-resize","transition","querystring-stringify-simple","moodle-core-notification-dialog","moodle-core-notification-alert","moodle-core-notification-warning","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-atto_accessibilitychecker-button":{"requires":["color-base","moodle-editor_atto-plugin"]},"moodle-atto_accessibilityhelper-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_align-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_bold-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_charmap-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_clear-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_collapse-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_embedquestion-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emojipicker-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emoticon-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_equation-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_fullscreen-button":{"requires":["event-resize","moodle-editor_atto-plugin"]},"moodle-atto_h5p-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_html-beautify":{},"moodle-atto_html-button":{"requires":["promise","moodle-editor_atto-plugin","moodle-atto_html-beautify","moodle-atto_html-codemirror","event-valuechange"]},"moodle-atto_html-codemirror":{"requires":["moodle-atto_html-codemirror-skin"]},"moodle-atto_htmlplus-beautify":{},"moodle-atto_htmlplus-button":{"requires":["moodle-editor_atto-plugin","moodle-atto_htmlplus-beautify","moodle-atto_htmlplus-codemirror","event-valuechange"]},"moodle-atto_htmlplus-codemirror":{"requires":["moodle-atto_htmlplus-codemirror-skin"]},"moodle-atto_image-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_indent-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_italic-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_link-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-usedfiles":{"requires":["node","escape"]},"moodle-atto_media-button":{"requires":["moodle-editor_atto-plugin","moodle-form-shortforms"]},"moodle-atto_noautolink-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_orderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_preview-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_recordrtc-button":{"requires":["moodle-editor_atto-plugin","moodle-atto_recordrtc-recording"]},"moodle-atto_recordrtc-recording":{"requires":["moodle-atto_recordrtc-button"]},"moodle-atto_rtl-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_strike-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_subscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_superscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_table-button":{"requires":["moodle-editor_atto-plugin","moodle-editor_atto-menu","event","event-valuechange"]},"moodle-atto_title-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_underline-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_undo-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_unorderedlist-button":{"requires":["moodle-editor_atto-plugin"]}}},"gallery":{"name":"gallery","base":"https:\/\/moodle.hs-hannover.de\/lib\/yuilib\/gallery\/","combine":true,"comboBase":"https:\/\/moodle.hs-hannover.de\/theme\/yui_combo.php?","ext":false,"root":"gallery\/1686672301\/","patterns":{"gallery-":{"group":"gallery"}}}},"modules":{"core_filepicker":{"name":"core_filepicker","fullpath":"https:\/\/moodle.hs-hannover.de\/lib\/javascript.php\/1686672301\/repository\/filepicker.js","requires":["base","node","node-event-simulate","json","async-queue","io-base","io-upload-iframe","io-form","yui2-treeview","panel","cookie","datatable","datatable-sort","resize-plugin","dd-plugin","escape","moodle-core_filepicker","moodle-core-notification-dialogue"]},"core_comment":{"name":"core_comment","fullpath":"https:\/\/moodle.hs-hannover.de\/lib\/javascript.php\/1686672301\/comment\/comment.js","requires":["base","io-base","node","json","yui2-animation","overlay","escape"]},"mathjax":{"name":"mathjax","fullpath":"https:\/\/moodle.hs-hannover.de\/mathjax\/MathJax.js?delayStartupUntil=configured"}}};
M.yui.loader = {modules: {}};

//]]>
</script>

<meta name="moodle-validation" content="e259da386193239c2145ef6e76877ac9">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body  id="page-mod-resource-view" class="format-topics  path-mod path-mod-resource safari dir-ltr lang-en yui-skin-sam yui3-skin-sam moodle-hs-hannover-de pagelayout-incourse course-23421 context-925912 cmid-793453 category-112 drawer-open-left">
<div class="toast-wrapper mx-auto py-0 fixed-top" role="status" aria-live="polite"></div>

<div id="page-wrapper" class="d-print-block">

    <div>
    <a class="sr-only sr-only-focusable" href="#maincontent">Skip to main content</a>
</div><script src="https://moodle.hs-hannover.de/lib/javascript.php/1686672301/lib/babel-polyfill/polyfill.min.js"></script>
<script src="https://moodle.hs-hannover.de/lib/javascript.php/1686672301/lib/polyfills/polyfill.js"></script>
<script src="https://moodle.hs-hannover.de/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.js"></script><script src="https://moodle.hs-hannover.de/lib/javascript.php/1686672301/lib/javascript-static.js"></script>
<script>
//<![CDATA[
document.body.className += ' jsenabled';
//]]>
</script>



    
    <nav class="fixed-top navbar navbar-light  bg-white navbar-expand moodle-has-zindex" aria-label="Site navigation">
    
            <div data-region="drawer-toggle" class="d-inline-block mr-3">
                <button aria-expanded="true" aria-controls="nav-drawer" type="button" class="btn nav-link float-sm-left mr-1 btn-light bg-gray" data-action="toggle-drawer" data-side="left" data-preference="drawer-open-nav"><i class="icon fa fa-bars fa-fw " aria-hidden="true"  ></i><span class="sr-only">Side panel</span></button>
            </div>
    
            <a href="https://moodle.hs-hannover.de" class="navbar-brand aabtn has-logo
                    ">
                    <span class="logo d-none d-sm-inline">
                        <img src="https://moodle.hs-hannover.de/pluginfile.php/1/core_admin/logocompact/300x300/1686672301/H_weiss%20%281%29.png" alt="HsH-Moodle">
                    </span>
                <span class="site-name d-none d-md-inline">HsH-Moodle</span>
            </a>
    
            <ul class="navbar-nav d-none d-md-flex">
                <!-- custom_menu -->
                <li class="dropdown nav-item">
    <a class="dropdown-toggle nav-link" id="drop-down-649a90fe55d3a649a90fe51e564" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" title="Language" aria-controls="drop-down-menu-649a90fe55d3a649a90fe51e564">
        English ‎(en)‎
    </a>
    <div class="dropdown-menu" role="menu" id="drop-down-menu-649a90fe55d3a649a90fe51e564" aria-labelledby="drop-down-649a90fe55d3a649a90fe51e564">
                <a class="dropdown-item" role="menuitem" href="https://moodle.hs-hannover.de/mod/resource/view.php?id=793453&amp;lang=de"  lang="de" >Deutsch ‎(de)‎</a>
                <a class="dropdown-item" role="menuitem" href="https://moodle.hs-hannover.de/mod/resource/view.php?id=793453&amp;lang=en"  >English ‎(en)‎</a>
                <a class="dropdown-item" role="menuitem" href="https://moodle.hs-hannover.de/mod/resource/view.php?id=793453&amp;lang=es"  lang="es" >Español - Internacional ‎(es)‎</a>
                <a class="dropdown-item" role="menuitem" href="https://moodle.hs-hannover.de/mod/resource/view.php?id=793453&amp;lang=fr"  lang="fr" >Français ‎(fr)‎</a>
                <a class="dropdown-item" role="menuitem" href="https://moodle.hs-hannover.de/mod/resource/view.php?id=793453&amp;lang=it"  lang="it" >Italiano ‎(it)‎</a>
                <a class="dropdown-item" role="menuitem" href="https://moodle.hs-hannover.de/mod/resource/view.php?id=793453&amp;lang=zh_cn"  lang="zh-cn" >简体中文 ‎(zh_cn)‎</a>
    </div>
</li>
                <!-- page_heading_menu -->
                
            </ul>
            <div class="ml-auto">
                
            </div>
            <ul class="nav navbar-nav usernav">
                <!-- navbar_plugin_output -->
                <li class="nav-item">
                    <div class="popover-region collapsed popover-region-notifications"
    id="nav-notification-popover-container" data-userid="36918"
    data-region="popover-region">
    <div class="popover-region-toggle nav-link icon-no-margin"
        data-region="popover-region-toggle"
        role="button"
        aria-controls="popover-region-container-649a90fe56d36649a90fe51e565"
        aria-haspopup="true"
        aria-label="Show notification window with no new notifications"
        tabindex="0">
                <i class="icon fa fa-bell fa-fw "  title="Toggle notifications menu" role="img" aria-label="Toggle notifications menu"></i>
        <div class="count-container hidden" data-region="count-container"
        aria-label="There are 0 unread notifications">0</div>

    </div>
    <div 
        id="popover-region-container-649a90fe56d36649a90fe51e565"
        class="popover-region-container"
        data-region="popover-region-container"
        aria-expanded="false"
        aria-hidden="true"
        aria-label="Notification window"
        role="region">
        <div class="popover-region-header-container">
            <h3 class="popover-region-header-text" data-region="popover-region-header-text">Notifications</h3>
            <div class="popover-region-header-actions" data-region="popover-region-header-actions">        <a class="mark-all-read-button"
           href="#"
           title="Mark all as read"
           data-action="mark-all-read"
           role="button"
           aria-label="Mark all as read">
            <span class="normal-icon"><i class="icon fa fa-check fa-fw " aria-hidden="true"  ></i></span>
            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
        </a>
            <a href="https://moodle.hs-hannover.de/message/notificationpreferences.php"
               title="Notification preferences"
               aria-label="Notification preferences">
                <i class="icon fa fa-cog fa-fw " aria-hidden="true"  ></i></a>
</div>
        </div>
        <div class="popover-region-content-container" data-region="popover-region-content-container">
            <div class="popover-region-content" data-region="popover-region-content">
                        <div class="all-notifications"
            data-region="all-notifications"
            role="log"
            aria-busy="false"
            aria-atomic="false"
            aria-relevant="additions"></div>
        <div class="empty-message" tabindex="0" data-region="empty-message">You have no notifications</div>

            </div>
            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
        </div>
                <a class="see-all-link"
                    href="https://moodle.hs-hannover.de/message/output/popup/notifications.php">
                    <div class="popover-region-footer-container">
                        <div class="popover-region-seeall-text">See all</div>
                    </div>
                </a>
    </div>
</div><div class="popover-region collapsed" data-region="popover-region-messages">
    <a id="message-drawer-toggle-649a90fe58235649a90fe51e566" class="nav-link d-inline-block popover-region-toggle position-relative icon-no-margin" href="#"
            role="button">
        <i class="icon fa fa-comment fa-fw "  title="Toggle messaging drawer" role="img" aria-label="Toggle messaging drawer"></i>
        <div class="count-container hidden" data-region="count-container"
        aria-label="There are 0 unread conversations">0</div>
    </a>
    <span class="sr-only sr-only-focusable" data-region="jumpto" tabindex="-1"></span></div><div class="localnavbarplus nav-link" id="localnavbarplus-resetusertour"><a alt="Reset user tour on this page" title="Reset user tour on this page (Could take a short time)" data-action="tool_usertours/resetpagetour" href="#"><i class="icon fa fa-map fa-fw"></i></a></div>
                </li>
                <!-- user_menu -->
                <li class="nav-item align-items-center pl-2">
                    <div class="usermenu"><div class="action-menu moodle-actionmenu nowrap-items d-inline" id="action-menu-1" data-enhance="moodle-core-actionmenu">

        <div class="menubar d-flex " id="action-menu-1-menubar">

            


                <div class="action-menu-trigger">
                    <div class="dropdown">
                        <a href="#" tabindex="0" class="d-inline-block  dropdown-toggle icon-no-margin" id="action-menu-toggle-1" aria-label="User menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" aria-controls="action-menu-1-menu">
                            
                            <span class="userbutton"><span class="usertext mr-1">Panthulu, Praveen</span><span class="avatars"><span class="avatar current"><img src="https://moodle.hs-hannover.de/theme/image.php/boost_campus/core/1686672301/u/f2" class="userpicture defaultuserpic" width="35" height="35" alt="" /></span></span></span>
                                
                            <b class="caret"></b>
                        </a>
                            <div class="dropdown-menu dropdown-menu-right menu  align-tr-br" id="action-menu-1-menu" data-rel="menu-content" aria-labelledby="action-menu-toggle-1" role="menu" data-align="tr-br">
                                                                <a href="https://moodle.hs-hannover.de/my/" class="dropdown-item menu-action" role="menuitem" data-title="mymoodle,admin" tabindex="-1" aria-labelledby="actionmenuaction-1">
                                <i class="icon fa fa-tachometer fa-fw " aria-hidden="true"  ></i>
                                <span class="menu-action-text" id="actionmenuaction-1">Dashboard</span>
                        </a>
                    <div class="dropdown-divider" role="presentation"><span class="filler">&nbsp;</span></div>
                                                                <a href="https://moodle.hs-hannover.de/user/profile.php?id=36918" class="dropdown-item menu-action" role="menuitem" data-title="profile,moodle" tabindex="-1" aria-labelledby="actionmenuaction-2">
                                <i class="icon fa fa-user fa-fw " aria-hidden="true"  ></i>
                                <span class="menu-action-text" id="actionmenuaction-2">Profile</span>
                        </a>
                                                                <a href="https://moodle.hs-hannover.de/grade/report/overview/index.php" class="dropdown-item menu-action" role="menuitem" data-title="grades,grades" tabindex="-1" aria-labelledby="actionmenuaction-3">
                                <i class="icon fa fa-table fa-fw " aria-hidden="true"  ></i>
                                <span class="menu-action-text" id="actionmenuaction-3">Grades</span>
                        </a>
                                                                <a href="https://moodle.hs-hannover.de/message/index.php" class="dropdown-item menu-action" role="menuitem" data-title="messages,message" tabindex="-1" aria-labelledby="actionmenuaction-4">
                                <i class="icon fa fa-comment fa-fw " aria-hidden="true"  ></i>
                                <span class="menu-action-text" id="actionmenuaction-4">Messages</span>
                        </a>
                                                                <a href="https://moodle.hs-hannover.de/user/preferences.php" class="dropdown-item menu-action" role="menuitem" data-title="preferences,moodle" tabindex="-1" aria-labelledby="actionmenuaction-5">
                                <i class="icon fa fa-wrench fa-fw " aria-hidden="true"  ></i>
                                <span class="menu-action-text" id="actionmenuaction-5">Preferences</span>
                        </a>
                    <div class="dropdown-divider" role="presentation"><span class="filler">&nbsp;</span></div>
                                                                <a href="https://moodle.hs-hannover.de/login/logout.php?sesskey=hzHo8pxk4d" class="dropdown-item menu-action" role="menuitem" data-title="logout,moodle" tabindex="-1" aria-labelledby="actionmenuaction-6">
                                <i class="icon fa fa-sign-out fa-fw " aria-hidden="true"  ></i>
                                <span class="menu-action-text" id="actionmenuaction-6">Log out</span>
                        </a>
                            </div>
                    </div>
                </div>

        </div>

</div></div>
                </li>
            </ul>
            <!-- search_box -->
    </nav>
    <div id="nav-drawer" data-region="drawer" class="d-print-none moodle-has-zindex " aria-hidden="false" tabindex="-1">
        <nav class="list-group" aria-label="Dashboard">
            <ul>
                    <li>
                        <a class="list-group-item list-group-item-action  " href="https://moodle.hs-hannover.de/my/" data-key="myhome" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="1" data-nodetype="1" data-collapse="0" data-forceopen="1" data-isactive="0" data-hidden="0" data-preceedwithhr="0" >
                            <div class="ml-0">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-tachometer fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body ">Dashboard</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    </ul>
                    </nav>
                    <nav class="list-group mt-1" aria-label="intoCODE, 2023, Schult">
                    <ul>
                    <li>
                        <a class="list-group-item list-group-item-action  " href="https://moodle.hs-hannover.de/course/view.php?id=23421" data-key="coursehome" data-isexpandable="0" data-indent="0" data-showdivider="1" data-type="60" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" >
                            <div class="ml-0">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body ">intoCODE, 2023, Schult</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action  " href="https://moodle.hs-hannover.de/user/index.php?id=23421" data-key="participants" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="90" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="23421">
                            <div class="ml-0">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-users fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body ">Participants</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action  " href="https://moodle.hs-hannover.de/grade/report/index.php?id=23421" data-key="grades" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="70" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="23421">
                            <div class="ml-0">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-table fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body ">Grades</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action  localboostnavigationcollapsibleparent localboostnavigationcollapsibleparentforcenoindent " href="https://moodle.hs-hannover.de/course/view.php?id=23421" data-key="localboostnavigationcoursesections" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="23421">
                            <div class="ml-0">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-fw fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body ">Sections</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action  localboostnavigationcollapsiblechild " href="https://moodle.hs-hannover.de/course/view.php?id=23421#section-0" data-key="290240" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="30" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="localboostnavigationcoursesections">
                            <div class="ml-0">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-folder-o fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body ">General</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action  localboostnavigationcollapsiblechild " href="https://moodle.hs-hannover.de/course/view.php?id=23421#section-1" data-key="290241" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="30" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="localboostnavigationcoursesections">
                            <div class="ml-0">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-folder-o fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body ">Modul 1: Statische Websites (HTML, CSS)</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action  localboostnavigationcollapsiblechild " href="https://moodle.hs-hannover.de/course/view.php?id=23421#section-2" data-key="291101" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="30" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="localboostnavigationcoursesections">
                            <div class="ml-0">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-folder-o fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body ">Datenstrukturierung/Datenbanken</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action  localboostnavigationcollapsiblechild " href="https://moodle.hs-hannover.de/course/view.php?id=23421#section-3" data-key="291557" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="30" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="localboostnavigationcoursesections">
                            <div class="ml-0">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-folder-o fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body ">Dynamische Websites mit PHP</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action active localboostnavigationcollapsiblechild " href="https://moodle.hs-hannover.de/course/view.php?id=23421#section-4" data-key="293118" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="30" data-nodetype="1" data-collapse="0" data-forceopen="1" data-isactive="1" data-hidden="0" data-preceedwithhr="0" data-parent-key="localboostnavigationcoursesections">
                            <div class="ml-0">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-folder-o fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body font-weight-bold">Frontend-Entwicklung (JavaScript)</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action  localboostnavigationcollapsibleparent localboostnavigationcollapsibleparentforcenoindent " href="https://moodle.hs-hannover.de/course/view.php?id=23421" data-key="localboostnavigationactivities" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="23421">
                            <div class="ml-0">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-fw fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body ">Activities</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action  localboostnavigationcollapsiblechild " href="https://moodle.hs-hannover.de/mod/forum/index.php?id=23421" data-key="localboostnavigationactivityforum" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="40" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="localboostnavigationactivities">
                            <div class="ml-0">
                                <div class="media">
                                        <span class="media-left">
                                            <img class="icon " alt="" aria-hidden="true" src="https://moodle.hs-hannover.de/theme/image.php/boost_campus/forum/1686672301/icon" />
                                        </span>
                                    <span class="media-body ">Forums</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action  localboostnavigationcollapsiblechild " href="https://moodle.hs-hannover.de/course/resources.php?id=23421" data-key="localboostnavigationactivityresources" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="40" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="localboostnavigationactivities">
                            <div class="ml-0">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-archive fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body ">Resources</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action  " href="https://moodle.hs-hannover.de/calendar/view.php?view=month&amp;course=23421" data-key="calendar" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="1">
                            <div class="ml-0">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-calendar fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body ">Calendar</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="list-group-item localboostnavigationcollapsibleparent localboostnavigationcollapsedparent localboostnavigationcollapsibleparentforcenoindent " data-key="mycourses" data-isexpandable="1" data-indent="0" data-showdivider="0" data-type="0" data-nodetype="1" data-collapse="0" data-forceopen="1" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="myhome">
                            <div class="ml-0">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-fw fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body">My courses</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action  localboostnavigationcollapsibleparent localboostnavigationcollapsedchild " href="https://moodle.hs-hannover.de/course/view.php" data-key="node-ST-2023" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="1" data-nodetype="1" data-collapse="0" data-forceopen="1" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                            <div class="ml-0">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-fw fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body ">ST 2023</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action  localboostnavigationcollapsiblechild p-l-3 " href="https://moodle.hs-hannover.de/course/view.php?id=23421" data-key="23421" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="1" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="node-ST-2023">
                            <div class="ml-1">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body ">intoCODE, 2023, Schult</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action  localboostnavigationfirstcustombuttomusers " href="https://moodle.hs-hannover.de/local/hsh/request.php" data-key="localboostnavigationcustombottomusers1" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="myhome">
                            <div class="ml-0">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-square local-boostnavigation-fa-xs fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body ">Kurs beantragen (nicht für Studis!)</span>
                                </div>
                            </div>
                        </a>
                    </li>
            </ul>
        </nav>
    </div>

    <div id="page" class="container-fluid d-print-block">



        <header id="page-header" class="row">
    <div class="col-12 pt-3 pb-3">
        <div class="card ">
            <div class="card-body ">
                <div class="d-sm-flex align-items-center">
                    <div class="mr-auto">
                        <div class="page-context-header"><div class="page-header-headings"><h1>intoCODE, SoSe 2023, Schult</h1></div></div>
                    </div>

                    <div class="context-header-settings-menu">
                        <div class="action-menu moodle-actionmenu d-inline" id="action-menu-2" data-enhance="moodle-core-actionmenu">

        <div class="menubar d-flex " id="action-menu-2-menubar">

            


                <div class="action-menu-trigger">
                    <div class="dropdown">
                        <a href="#" tabindex="0" class="d-inline-block  dropdown-toggle icon-no-margin" id="action-menu-toggle-2" aria-label="Actions menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" aria-controls="action-menu-2-menu">
                            
                            
<i class="icon fa fa-cog fa-fw "  title="Actions menu" role="img" aria-label="Actions menu"></i>                                
                        </a>
                            <div class="dropdown-menu dropdown-menu-right menu align-tr-br" id="action-menu-2-menu" data-rel="menu-content" aria-labelledby="action-menu-toggle-2" role="menu" data-align="tr-br">
                                            <div class="dropdown-item">

    <a href="https://moodle.hs-hannover.de/enrol/self/unenrolself.php?enrolid=48433" id="action_link649a90fe51e5615" class=""  role="menuitem"  tabindex="-1" ><i class="icon fa fa-user fa-fw " aria-hidden="true"  ></i>Unenrol me from intoCODE, 2023, Schult</a>



</div>
                            </div>
                    </div>
                </div>

        </div>

</div>
                    </div>
                    <div class="header-actions-container flex-shrink-0" data-region="header-actions-container">
                    </div>
                </div>
                <div class="d-flex flex-wrap">
                    <div id="page-navbar">
                        <nav aria-label="Navigation bar">
    <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="https://moodle.hs-hannover.de/my/"  >Dashboard</a>
                </li>
        
                <li class="breadcrumb-item">My courses</li>
        
                <li class="breadcrumb-item">
                    <a href="https://moodle.hs-hannover.de/course/view.php"  >ST 2023</a>
                </li>
        
                <li class="breadcrumb-item">
                    <a href="https://moodle.hs-hannover.de/course/view.php?id=23421"  title="intoCODE, SoSe 2023, Schult">intoCODE, 2023, Schult</a>
                </li>
        
                <li class="breadcrumb-item">
                    <a href="https://moodle.hs-hannover.de/course/view.php?id=23421"  >Sections</a>
                </li>
        
                <li class="breadcrumb-item">
                    <a href="https://moodle.hs-hannover.de/course/view.php?id=23421#section-4"  >Frontend-Entwicklung (JavaScript)</a>
                </li>
        
                <li class="breadcrumb-item">
                    <a href="https://moodle.hs-hannover.de/mod/resource/view.php?id=793453" aria-current="page" title="File">Overview.js</a>
                </li>
        </ol>
</nav>
                    </div>
                    <div class="ml-auto d-flex">
                        
                    </div>
                    <div id="course-header">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

        <div id="page-content" class="row pb-3 d-print-block">
            <div id="region-main-box" class="col-12">
                        
                        <div id="boost-campus-course-settings" class="card">
                            <div class="mx-2 pt-2">
                                <ul class="nav nav-tabs" role="tablist">
                                <!-- First the top most node and immediate children -->
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#course-settings-courseadmin" data-toggle="tab" role="tab" aria-selected="true">Course administration</a>
                                    </li>
                                <!-- Now the first level children with sub nodes -->
                                </ul>
                        
                                <div class="tab-content">
                                    <div class="tab-pane active" id="course-settings-courseadmin" role="tabpanel">
                                        <div class="card">
                                            <div class="card-body pb-0">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        
                                                        <h4>Course administration</h4>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <ul class="list-unstyled">
                                                                        <li><a href="https://moodle.hs-hannover.de/enrol/self/unenrolself.php?enrolid=48433">Unenrol me from intoCODE, 2023, Schult</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                <section id="region-main"  aria-label="Content">

                    <span class="notifications" id="user-notifications"></span>
                    <div role="main"><span id="maincontent"></span><h2>Overview.js</h2><div id="resourceintro" class="box py-3 mod_introbox"><p class="resourcedetails">7.3KB</p></div><div class="resourceworkaround">Click <a href="https://moodle.hs-hannover.de/pluginfile.php/925912/mod_resource/content/1/overview.js" onclick="this.target='_blank'">overview.js</a> link to view the file.</div></div>
                    <div class="mt-5 mb-1 activity-navigation container-fluid">
<div class="row">
    <div class="col-md-4">        <div class="float-left">
                <a href="https://moodle.hs-hannover.de/mod/resource/view.php?id=793452&forceview=1" id="prev-activity-link" class="btn btn-link" >&#x25C0;&#xFE0E; Übungsaufgaben</a>

        </div>
</div>
    <div class="col-md-4">        <div class="mdl-align">
            <div class="urlselect">
    <form method="post" action="https://moodle.hs-hannover.de/course/jumpto.php" class="form-inline" id="url_select_f649a90fe51e5616">
        <input type="hidden" name="sesskey" value="hzHo8pxk4d">
            <label for="jump-to-activity" class="sr-only">
                Jump to...
            </label>
        <select  id="jump-to-activity" class="custom-select urlselect" name="jump"
                 >
                    <option value="" selected>Jump to...</option>
                    <option value="/mod/forum/view.php?id=775076&amp;forceview=1" >Ankündigungen</option>
                    <option value="/mod/resource/view.php?id=778133&amp;forceview=1" >Folien intoCODE-Kickoff 17.4.23</option>
                    <option value="/mod/url/view.php?id=779123&amp;forceview=1" >Zoom-Link für 21.4.</option>
                    <option value="/mod/folder/view.php?id=784178&amp;forceview=1" >Flyer intoCODE</option>
                    <option value="/mod/folder/view.php?id=778124&amp;forceview=1" >Folien Web Design deutsch</option>
                    <option value="/mod/folder/view.php?id=778125&amp;forceview=1" >Folien Web Design englisch</option>
                    <option value="/mod/url/view.php?id=778126&amp;forceview=1" >Web Design Playground online</option>
                    <option value="/mod/resource/view.php?id=778129&amp;forceview=1" >webdesignplayground</option>
                    <option value="/mod/resource/view.php?id=780182&amp;forceview=1" >boxmodel-aufgabe</option>
                    <option value="/mod/resource/view.php?id=780183&amp;forceview=1" >boxmodel1</option>
                    <option value="/mod/resource/view.php?id=780184&amp;forceview=1" >Aufgabe-boxmodel</option>
                    <option value="/mod/resource/view.php?id=780375&amp;forceview=1" >Klausurthemen</option>
                    <option value="/mod/url/view.php?id=781356&amp;forceview=1" >ERM zu Tabellen</option>
                    <option value="/mod/url/view.php?id=781403&amp;forceview=1" >SQL-Tutorial</option>
                    <option value="/mod/url/view.php?id=781664&amp;forceview=1" >SQL-Tutorial 2</option>
                    <option value="/mod/url/view.php?id=786284&amp;forceview=1" >Klausur</option>
                    <option value="/mod/resource/view.php?id=793452&amp;forceview=1" >Übungsaufgaben</option>
        </select>
            <noscript>
                <input type="submit" class="btn btn-secondary ml-1" value="Go">
            </noscript>
    </form>
</div>

        </div>
</div>
    <div class="col-md-4">        <div class="float-right">
            
        </div>
</div>
</div>
</div>
                    

                </section>
            </div>
        </div>
    </div>
    <div
    id="drawer-649a90fe5dbe3649a90fe51e5617"
    class=" drawer bg-white hidden"
    aria-expanded="false"
    aria-hidden="true"
    data-region="right-hand-drawer"
    role="region"
    tabindex="0"
>
            <div id="message-drawer-649a90fe5dbe3649a90fe51e5617" class="message-app" data-region="message-drawer" role="region">
            <div class="closewidget text-right pr-2">
                <a class="text-dark btn-link" data-action="closedrawer" href="#"
                   title="Close" aria-label="Close"
                >
                    <i class="icon fa fa-window-close fa-fw " aria-hidden="true"  ></i>
                </a>
            </div>
            <div class="header-container position-relative" data-region="header-container">
                <div class="hidden border-bottom p-1 px-sm-2" aria-hidden="true" data-region="view-contacts">
                    <div class="d-flex align-items-center">
                        <div class="align-self-stretch">
                            <a class="h-100 d-flex align-items-center mr-2" href="#" data-route-back role="button">
                                <div class="icon-back-in-drawer">
                                    <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"  ></i></span>
                                    <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"  ></i></span>
                                </div>
                                <div class="icon-back-in-app">
                                    <span class="dir-rtl-hide"><i class="icon fa fa-times fa-fw " aria-hidden="true"  ></i></span>
                                </div>                            </a>
                        </div>
                        <div>
                            Contacts
                        </div>
                        <div class="ml-auto">
                            <a href="#" data-route="view-search" role="button" aria-label="Search">
                                <i class="icon fa fa-search fa-fw " aria-hidden="true"  ></i>
                            </a>
                        </div>
                    </div>
                </div>                
                <div
                    class="hidden bg-white position-relative border-bottom p-1 px-sm-2"
                    aria-hidden="true"
                    data-region="view-conversation"
                >
                    <div class="hidden" data-region="header-content"></div>
                    <div class="hidden" data-region="header-edit-mode">
                        
                        <div class="d-flex p-2 align-items-center">
                            Messages selected:
                            <span class="ml-1" data-region="message-selected-court">1</span>
                            <button type="button" class="ml-auto close" aria-label="Cancel message selection"
                                data-action="cancel-edit-mode">
                                    <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div data-region="header-placeholder">
                        <div class="d-flex">
                            <div
                                class="ml-2 rounded-circle bg-pulse-grey align-self-center"
                                style="height: 38px; width: 38px"
                            >
                            </div>
                            <div class="ml-2 " style="flex: 1">
                                <div
                                    class="mt-1 bg-pulse-grey w-75"
                                    style="height: 16px;"
                                >
                                </div>
                            </div>
                            <div
                                class="ml-2 bg-pulse-grey align-self-center"
                                style="height: 16px; width: 20px"
                            >
                            </div>
                        </div>
                    </div>
                    <div
                        class="hidden position-absolute z-index-1"
                        data-region="confirm-dialogue-container"
                        style="top: 0; bottom: -1px; right: 0; left: 0; background: rgba(0,0,0,0.3);"
                    ></div>
                </div>                <div class="border-bottom p-1 px-sm-2" aria-hidden="false"  data-region="view-overview">
                    <div class="d-flex align-items-center">
                        <div class="input-group simplesearchform">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Search"
                                aria-label="Search"
                                data-region="view-overview-search-input"
                            >
                            <div class="input-group-append">
                                <span class="icon-no-margin btn btn-submit">
                                    <i class="icon fa fa-search fa-fw " aria-hidden="true"  ></i>
                                </span>
                            </div>
                        </div>
                        <div class="ml-2">
                            <a
                                href="#"
                                data-route="view-settings"
                                data-route-param="36918"
                                aria-label="Settings"
                                role="button"
                            >
                                <i class="icon fa fa-cog fa-fw " aria-hidden="true"  ></i>
                            </a>
                        </div>
                    </div>
                    <div class="text-right mt-sm-3">
                        <a href="#" data-route="view-contacts" role="button">
                            <i class="icon fa fa-user fa-fw " aria-hidden="true"  ></i>
                            Contacts
                            <span class="badge badge-primary bg-primary ml-2 hidden"
                            data-region="contact-request-count"
                            aria-label="There are 0 pending contact requests">
                                0
                            </span>
                        </a>
                    </div>
                </div>
                
                <div class="hidden border-bottom p-1 px-sm-2 view-search"  aria-hidden="true" data-region="view-search">
                    <div class="d-flex align-items-center">
                        <a
                            class="mr-2 align-self-stretch d-flex align-items-center"
                            href="#"
                            data-route-back
                            data-action="cancel-search"
                            role="button"
                        >
                            <div class="icon-back-in-drawer">
                                <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"  ></i></span>
                                <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"  ></i></span>
                            </div>
                            <div class="icon-back-in-app">
                                <span class="dir-rtl-hide"><i class="icon fa fa-times fa-fw " aria-hidden="true"  ></i></span>
                            </div>                        </a>
                        <div class="input-group simplesearchform">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Search"
                                aria-label="Search"
                                data-region="search-input"
                            >
                            <div class="input-group-append">
                                <button
                                    class="btn btn-submit icon-no-margin"
                                    type="button"
                                    data-action="search"
                                    aria-label="Search"
                                >
                                    <span data-region="search-icon-container">
                                        <i class="icon fa fa-search fa-fw " aria-hidden="true"  ></i>
                                    </span>
                                    <span class="hidden" data-region="loading-icon-container">
                                        <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>                
                <div class="hidden border-bottom p-1 px-sm-2 pb-sm-3" aria-hidden="true" data-region="view-settings">
                    <div class="d-flex align-items-center">
                        <div class="align-self-stretch" >
                            <a class="h-100 d-flex mr-2 align-items-center" href="#" data-route-back role="button">
                                <div class="icon-back-in-drawer">
                                    <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"  ></i></span>
                                    <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"  ></i></span>
                                </div>
                                <div class="icon-back-in-app">
                                    <span class="dir-rtl-hide"><i class="icon fa fa-times fa-fw " aria-hidden="true"  ></i></span>
                                </div>                            </a>
                        </div>
                        <div>
                            Settings
                        </div>
                    </div>
                </div>
            </div>
            <div class="body-container position-relative" data-region="body-container">
                
                <div
                    class="hidden"
                    data-region="view-contact"
                    aria-hidden="true"
                >
                    <div class="p-2 pt-3" data-region="content-container"></div>
                </div>                <div class="hidden h-100" data-region="view-contacts" aria-hidden="true" data-user-id="36918">
                    <div class="d-flex flex-column h-100">
                        <div class="p-3 border-bottom">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a
                                        id="contacts-tab-649a90fe5dbe3649a90fe51e5617"
                                        class="nav-link active"
                                        href="#contacts-tab-panel-649a90fe5dbe3649a90fe51e5617"
                                        data-toggle="tab"
                                        data-action="show-contacts-section"
                                        role="tab"
                                        aria-controls="contacts-tab-panel-649a90fe5dbe3649a90fe51e5617"
                                        aria-selected="true"
                                    >
                                        Contacts
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a
                                        id="requests-tab-649a90fe5dbe3649a90fe51e5617"
                                        class="nav-link"
                                        href="#requests-tab-panel-649a90fe5dbe3649a90fe51e5617"
                                        data-toggle="tab"
                                        data-action="show-requests-section"
                                        role="tab"
                                        aria-controls="requests-tab-panel-649a90fe5dbe3649a90fe51e5617"
                                        aria-selected="false"
                                    >
                                        Requests
                                        <span class="badge badge-primary bg-primary ml-2 hidden"
                                        data-region="contact-request-count"
                                        aria-label="There are 0 pending contact requests">
                                            0
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content d-flex flex-column h-100">
                                            <div
                    class="tab-pane fade show active h-100 lazy-load-list"
                    aria-live="polite"
                    data-region="lazy-load-list"
                    data-user-id="36918"
                                        id="contacts-tab-panel-649a90fe5dbe3649a90fe51e5617"
                    data-section="contacts"
                    role="tabpanel"
                    aria-labelledby="contacts-tab-649a90fe5dbe3649a90fe51e5617"

                >
                    
                    <div class="hidden text-center p-2" data-region="empty-message-container">
                        No contacts
                    </div>
                    <div class="hidden list-group" data-region="content-container">
                        
                    </div>
                    <div class="list-group" data-region="placeholder-container">
                                            <div class="p-2 d-flex list-group-item border-0" data-region="placeholder">
                        <div
                            class="rounded-circle bg-pulse-grey"
                            style="height: 38px; width: 38px"
                        >
                        </div>
                        <div
                            class="ml-2 bg-pulse-grey w-50"
                            style="height: 20px;"
                        >
                        </div>
                    </div>
                    </div>
                    <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                        <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
                    </div>
                </div>
                
                                            <div
                    class="tab-pane fade h-100 lazy-load-list"
                    aria-live="polite"
                    data-region="lazy-load-list"
                    data-user-id="36918"
                                        id="requests-tab-panel-649a90fe5dbe3649a90fe51e5617"
                    data-section="requests"
                    role="tabpanel"
                    aria-labelledby="requests-tab-649a90fe5dbe3649a90fe51e5617"

                >
                    
                    <div class="hidden text-center p-2" data-region="empty-message-container">
                        No contact requests
                    </div>
                    <div class="hidden list-group" data-region="content-container">
                        
                    </div>
                    <div class="list-group" data-region="placeholder-container">
                        
                    </div>
                    <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                        <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
                    </div>
                </div>
                        </div>
                    </div>
                </div>                
                <div
                    class="view-conversation hidden h-100"
                    aria-hidden="true"
                    data-region="view-conversation"
                    data-user-id="36918"
                    data-midnight="1687816800"
                    data-message-poll-min="10"
                    data-message-poll-max="120"
                    data-message-poll-after-max="300"
                    style="overflow-y: auto; overflow-x: hidden"
                >
                    <div class="position-relative h-100" data-region="content-container" style="overflow-y: auto; overflow-x: hidden">
                        <div class="content-message-container hidden h-100 px-2 pt-0" data-region="content-message-container" role="log" style="overflow-y: auto; overflow-x: hidden">
                            <div class="py-3 sticky-top z-index-1 border-bottom text-center hidden" data-region="contact-request-sent-message-container">
                                <p class="m-0">Contact request sent</p>
                                <p class="font-italic font-weight-light" data-region="text"></p>
                            </div>
                            <div class="p-3 text-center hidden" data-region="self-conversation-message-container">
                                <p class="m-0">Personal space</p>
                                <p class="font-italic font-weight-light" data-region="text">Save draft messages, links, notes etc. to access later.</p>
                           </div>
                            <div class="hidden text-center p-3" data-region="more-messages-loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
</div>
                        </div>
                        <div class="p-4 w-100 h-100 hidden position-absolute z-index-1" data-region="confirm-dialogue-container" style="top: 0; background: rgba(0,0,0,0.3);">
                            
                            <div class="p-3 bg-white" data-region="confirm-dialogue" role="alert">
                                <p class="text-muted" data-region="dialogue-text"></p>
                                <div class="mb-2 custom-control custom-checkbox hidden" data-region="delete-messages-for-all-users-toggle-container">
                                    <input type="checkbox" class="custom-control-input" id="delete-messages-for-all-users" data-region="delete-messages-for-all-users-toggle">
                                    <label class="custom-control-label text-muted" for="delete-messages-for-all-users">
                                        Delete for me and for everyone else
                                    </label>
                                </div>
                                <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-block">
                                    <span data-region="dialogue-button-text">Block</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-unblock">
                                    <span data-region="dialogue-button-text">Unblock</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-remove-contact">
                                    <span data-region="dialogue-button-text">Remove</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-add-contact">
                                    <span data-region="dialogue-button-text">Add</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-delete-selected-messages">
                                    <span data-region="dialogue-button-text">Delete</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-delete-conversation">
                                    <span data-region="dialogue-button-text">Delete</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-block hidden" data-action="request-add-contact">
                                    <span data-region="dialogue-button-text">Send contact request</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-block hidden" data-action="accept-contact-request">
                                    <span data-region="dialogue-button-text">Accept and add to contacts</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-secondary btn-block hidden" data-action="decline-contact-request">
                                    <span data-region="dialogue-button-text">Decline</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-block" data-action="okay-confirm">OK</button>
                                <button type="button" class="btn btn-secondary btn-block" data-action="cancel-confirm">Cancel</button>
                            </div>
                        </div>
                        <div class="px-2 pb-2 pt-0" data-region="content-placeholder">
                            <div class="h-100 d-flex flex-column">
                                <div
                                    class="px-2 pb-2 pt-0 bg-light h-100"
                                    style="overflow-y: auto"
                                >
                                    <div class="mt-4">
                                        <div class="mb-4">
                                            <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                    </div>                                    <div class="mt-4">
                                        <div class="mb-4">
                                            <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                    </div>                                    <div class="mt-4">
                                        <div class="mb-4">
                                            <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                    </div>                                    <div class="mt-4">
                                        <div class="mb-4">
                                            <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                    </div>                                    <div class="mt-4">
                                        <div class="mb-4">
                                            <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                    </div>                                </div>
                            </div>                        </div>
                    </div>
                </div>
                
                <div
                    class="hidden"
                    aria-hidden="true"
                    data-region="view-group-info"
                >
                    <div
                        class="pt-3 h-100 d-flex flex-column"
                        data-region="group-info-content-container"
                        style="overflow-y: auto"
                    ></div>
                </div>                <div class="h-100 view-overview-body" aria-hidden="false" data-region="view-overview"  data-user-id="36918">
                    <div id="message-drawer-view-overview-container-649a90fe5dbe3649a90fe51e5617" class="d-flex flex-column h-100" style="overflow-y: auto">
                            
                            
                            <div
                                class="section border-0 card"
                                data-region="view-overview-favourites"
                            >
                                <div id="view-overview-favourites-toggle" class="card-header" data-region="toggle">
                                    <button
                                        class="btn btn-link w-100 text-left p-1 p-sm-2 d-flex align-items-center overview-section-toggle collapsed"
                                        data-toggle="collapse"
                                        data-target="#view-overview-favourites-target-649a90fe5dbe3649a90fe51e5617"
                                        aria-expanded="false"
                                        aria-controls="view-overview-favourites-target-649a90fe5dbe3649a90fe51e5617"
                                    >
                                        <span class="collapsed-icon-container">
                                            <i class="icon fa fa-caret-right fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                        <span class="expanded-icon-container">
                                            <i class="icon fa fa-caret-down fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                        <span class="font-weight-bold">Starred</span>
                                        <small class="hidden ml-1" data-region="section-total-count-container"
                                        aria-label=" total conversations">
                                            (<span data-region="section-total-count"></span>)
                                        </small>
                                        <span class="hidden ml-2" data-region="loading-icon-container">
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
                                        </span>
                                        <span class="hidden badge badge-pill badge-primary ml-auto bg-primary"
                                        data-region="section-unread-count"
                                        >
                                            
                                        </span>
                                    </button>
                                </div>
                                                            <div
                                class="collapse border-bottom  lazy-load-list"
                                aria-live="polite"
                                data-region="lazy-load-list"
                                data-user-id="36918"
                                            id="view-overview-favourites-target-649a90fe5dbe3649a90fe51e5617"
            aria-labelledby="view-overview-favourites-toggle"
            data-parent="#message-drawer-view-overview-container-649a90fe5dbe3649a90fe51e5617"

                            >
                                
                                <div class="hidden text-center p-2" data-region="empty-message-container">
                                            <p class="text-muted mt-2">No starred conversations</p>

                                </div>
                                <div class="hidden list-group" data-region="content-container">
                                    
                                </div>
                                <div class="list-group" data-region="placeholder-container">
                                            <div class="text-center py-2"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
</div>

                                </div>
                                <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                                    <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
                                </div>
                            </div>
                            </div>
                            
                            
                            <div
                                class="section border-0 card"
                                data-region="view-overview-group-messages"
                            >
                                <div id="view-overview-group-messages-toggle" class="card-header" data-region="toggle">
                                    <button
                                        class="btn btn-link w-100 text-left p-1 p-sm-2 d-flex align-items-center overview-section-toggle collapsed"
                                        data-toggle="collapse"
                                        data-target="#view-overview-group-messages-target-649a90fe5dbe3649a90fe51e5617"
                                        aria-expanded="false"
                                        aria-controls="view-overview-group-messages-target-649a90fe5dbe3649a90fe51e5617"
                                    >
                                        <span class="collapsed-icon-container">
                                            <i class="icon fa fa-caret-right fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                        <span class="expanded-icon-container">
                                            <i class="icon fa fa-caret-down fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                        <span class="font-weight-bold">Group</span>
                                        <small class="hidden ml-1" data-region="section-total-count-container"
                                        aria-label=" total conversations">
                                            (<span data-region="section-total-count"></span>)
                                        </small>
                                        <span class="hidden ml-2" data-region="loading-icon-container">
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
                                        </span>
                                        <span class="hidden badge badge-pill badge-primary ml-auto bg-primary"
                                        data-region="section-unread-count"
                                        >
                                            
                                        </span>
                                    </button>
                                </div>
                                                            <div
                                class="collapse border-bottom  lazy-load-list"
                                aria-live="polite"
                                data-region="lazy-load-list"
                                data-user-id="36918"
                                            id="view-overview-group-messages-target-649a90fe5dbe3649a90fe51e5617"
            aria-labelledby="view-overview-group-messages-toggle"
            data-parent="#message-drawer-view-overview-container-649a90fe5dbe3649a90fe51e5617"

                            >
                                
                                <div class="hidden text-center p-2" data-region="empty-message-container">
                                            <p class="text-muted mt-2">No group conversations</p>

                                </div>
                                <div class="hidden list-group" data-region="content-container">
                                    
                                </div>
                                <div class="list-group" data-region="placeholder-container">
                                            <div class="text-center py-2"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
</div>

                                </div>
                                <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                                    <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
                                </div>
                            </div>
                            </div>
                            
                            
                            <div
                                class="section border-0 card"
                                data-region="view-overview-messages"
                            >
                                <div id="view-overview-messages-toggle" class="card-header" data-region="toggle">
                                    <button
                                        class="btn btn-link w-100 text-left p-1 p-sm-2 d-flex align-items-center overview-section-toggle collapsed"
                                        data-toggle="collapse"
                                        data-target="#view-overview-messages-target-649a90fe5dbe3649a90fe51e5617"
                                        aria-expanded="false"
                                        aria-controls="view-overview-messages-target-649a90fe5dbe3649a90fe51e5617"
                                    >
                                        <span class="collapsed-icon-container">
                                            <i class="icon fa fa-caret-right fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                        <span class="expanded-icon-container">
                                            <i class="icon fa fa-caret-down fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                        <span class="font-weight-bold">Private</span>
                                        <small class="hidden ml-1" data-region="section-total-count-container"
                                        aria-label=" total conversations">
                                            (<span data-region="section-total-count"></span>)
                                        </small>
                                        <span class="hidden ml-2" data-region="loading-icon-container">
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
                                        </span>
                                        <span class="hidden badge badge-pill badge-primary ml-auto bg-primary"
                                        data-region="section-unread-count"
                                        >
                                            
                                        </span>
                                    </button>
                                </div>
                                                            <div
                                class="collapse border-bottom  lazy-load-list"
                                aria-live="polite"
                                data-region="lazy-load-list"
                                data-user-id="36918"
                                            id="view-overview-messages-target-649a90fe5dbe3649a90fe51e5617"
            aria-labelledby="view-overview-messages-toggle"
            data-parent="#message-drawer-view-overview-container-649a90fe5dbe3649a90fe51e5617"

                            >
                                
                                <div class="hidden text-center p-2" data-region="empty-message-container">
                                            <p class="text-muted mt-2">No private conversations</p>

                                </div>
                                <div class="hidden list-group" data-region="content-container">
                                    
                                </div>
                                <div class="list-group" data-region="placeholder-container">
                                            <div class="text-center py-2"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
</div>

                                </div>
                                <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                                    <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
                                </div>
                            </div>
                            </div>
                    </div>
                </div>
                
                <div
                    data-region="view-search"
                    aria-hidden="true"
                    class="h-100 hidden"
                    data-user-id="36918"
                    data-users-offset="0"
                    data-messages-offset="0"
                    style="overflow-y: auto"
                    
                >
                    <div class="hidden" data-region="search-results-container" style="overflow-y: auto">
                        
                        <div class="d-flex flex-column">
                            <div class="mb-3 bg-white" data-region="all-contacts-container">
                                <div data-region="contacts-container"  class="pt-2">
                                    <h4 class="h6 px-2">Contacts</h4>
                                    <div class="list-group" data-region="list"></div>
                                </div>
                                <div data-region="non-contacts-container" class="pt-2 border-top">
                                    <h4 class="h6 px-2">Non-contacts</h4>
                                    <div class="list-group" data-region="list"></div>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-link text-primary" data-action="load-more-users">
                                        <span data-region="button-text">Load more</span>
                                        <span data-region="loading-icon-container" class="hidden"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
</span>
                                    </button>
                                </div>
                            </div>
                            <div class="bg-white" data-region="messages-container">
                                <h4 class="h6 px-2 pt-2">Messages</h4>
                                <div class="list-group" data-region="list"></div>
                                <div class="text-right">
                                    <button class="btn btn-link text-primary" data-action="load-more-messages">
                                        <span data-region="button-text">Load more</span>
                                        <span data-region="loading-icon-container" class="hidden"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
</span>
                                    </button>
                                </div>
                            </div>
                            <p class="hidden p-3 text-center" data-region="no-results-container">No results</p>
                        </div>                    </div>
                    <div class="hidden" data-region="loading-placeholder">
                        <div class="text-center pt-3 icon-size-4"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
</div>
                    </div>
                    <div class="p-3 text-center" data-region="empty-message-container">
                        <p>Search people and messages</p>
                    </div>
                </div>                
                <div class="h-100 hidden bg-white" aria-hidden="true" data-region="view-settings">
                    <div class="hidden" data-region="content-container">
                        
                        <div data-region="settings" class="p-3">
                            <h3 class="h6 font-weight-bold">Privacy</h3>
                            <p>You can restrict who can message you</p>
                            <div data-preference="blocknoncontacts" class="mb-3">
                                <fieldset>
                                    <legend class="sr-only">Accept messages from:</legend>
                                        <div class="custom-control custom-radio mb-2">
                                            <input
                                                type="radio"
                                                name="message_blocknoncontacts"
                                                class="custom-control-input"
                                                id="block-noncontacts-649a90fe5dbe3649a90fe51e5617-1"
                                                value="1"
                                            >
                                            <label class="custom-control-label ml-2" for="block-noncontacts-649a90fe5dbe3649a90fe51e5617-1">
                                                My contacts only
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio mb-2">
                                            <input
                                                type="radio"
                                                name="message_blocknoncontacts"
                                                class="custom-control-input"
                                                id="block-noncontacts-649a90fe5dbe3649a90fe51e5617-0"
                                                value="0"
                                            >
                                            <label class="custom-control-label ml-2" for="block-noncontacts-649a90fe5dbe3649a90fe51e5617-0">
                                                My contacts and anyone in my courses
                                            </label>
                                        </div>
                                </fieldset>
                            </div>
                        
                            <div class="hidden" data-region="notification-preference-container">
                                <h3 class="mb-2 mt-4 h6 font-weight-bold">Notification preferences</h3>
                            </div>
                        
                            <h3 class="mb-2 mt-4 h6 font-weight-bold">General</h3>
                            <div data-preference="entertosend">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="enter-to-send-649a90fe5dbe3649a90fe51e5617" >
                                    <label class="custom-control-label" for="enter-to-send-649a90fe5dbe3649a90fe51e5617">
                                        Use enter to send
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-region="placeholder-container">
                        
                        <div class="d-flex flex-column p-3">
                            <div class="w-25 bg-pulse-grey h6" style="height: 18px"></div>
                            <div class="w-75 bg-pulse-grey mb-4" style="height: 18px"></div>
                            <div class="mb-3">
                                <div class="w-100 d-flex mb-3">
                                    <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                                    <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                                </div>
                                <div class="w-100 d-flex mb-3">
                                    <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                                    <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                                </div>
                                <div class="w-100 d-flex mb-3">
                                    <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                                    <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                                </div>
                            </div>
                            <div class="w-50 bg-pulse-grey h6 mb-3 mt-2" style="height: 18px"></div>
                            <div class="mb-4">
                                <div class="w-100 d-flex mb-2 align-items-center">
                                    <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                                    <div class="bg-pulse-grey w-25 ml-2" style="height: 18px"></div>
                                </div>
                                <div class="w-100 d-flex mb-2 align-items-center">
                                    <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                                    <div class="bg-pulse-grey w-25 ml-2" style="height: 18px"></div>
                                </div>
                            </div>
                            <div class="w-25 bg-pulse-grey h6 mb-3 mt-2" style="height: 18px"></div>
                            <div class="mb-3">
                                <div class="w-100 d-flex mb-2 align-items-center">
                                    <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                                    <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                                </div>
                            </div>
                        </div>                    </div>
                </div>            </div>
            <div class="footer-container position-relative" data-region="footer-container">
                
                <div
                    class="hidden border-top bg-white position-relative"
                    aria-hidden="true"
                    data-region="view-conversation"
                    data-enter-to-send="0"
                >
                    <div class="hidden p-sm-2" data-region="content-messages-footer-container">
                        
                            <div
                                class="emoji-auto-complete-container w-100 hidden"
                                data-region="emoji-auto-complete-container"
                                aria-live="polite"
                                aria-hidden="true"
                            >
                            </div>
                        <div class="d-flex mt-sm-1">
                            <textarea
                                dir="auto"
                                data-region="send-message-txt"
                                class="form-control bg-light"
                                rows="3"
                                data-auto-rows
                                data-min-rows="3"
                                data-max-rows="5"
                                aria-label="Write a message..."
                                placeholder="Write a message..."
                                style="resize: none"
                                maxlength="4096"
                            ></textarea>
                        
                            <div class="position-relative d-flex flex-column">
                                    <div
                                        data-region="emoji-picker-container"
                                        class="emoji-picker-container hidden"
                                        aria-hidden="true"
                                    >
                                        
                                        <div
                                            data-region="emoji-picker"
                                            class="card shadow emoji-picker"
                                        >
                                            <div class="card-header px-1 pt-1 pb-0 d-flex justify-content-between flex-shrink-0">
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button selected"
                                                    data-action="show-category"
                                                    data-category="Recent"
                                                    title="Recent"
                                                >
                                                    <i class="icon fa fa-clock-o fa-fw " aria-hidden="true"  ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button"
                                                    data-action="show-category"
                                                    data-category="Smileys & Emotion"
                                                    title="Smileys & emotion"
                                                >
                                                    <i class="icon fa fa-smile-o fa-fw " aria-hidden="true"  ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button"
                                                    data-action="show-category"
                                                    data-category="People & Body"
                                                    title="People & body"
                                                >
                                                    <i class="icon fa fa-male fa-fw " aria-hidden="true"  ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button"
                                                    data-action="show-category"
                                                    data-category="Animals & Nature"
                                                    title="Animals & nature"
                                                >
                                                    <i class="icon fa fa-leaf fa-fw " aria-hidden="true"  ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button"
                                                    data-action="show-category"
                                                    data-category="Food & Drink"
                                                    title="Food & drink"
                                                >
                                                    <i class="icon fa fa-cutlery fa-fw " aria-hidden="true"  ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button"
                                                    data-action="show-category"
                                                    data-category="Travel & Places"
                                                    title="Travel & places"
                                                >
                                                    <i class="icon fa fa-plane fa-fw " aria-hidden="true"  ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button"
                                                    data-action="show-category"
                                                    data-category="Activities"
                                                    title="Activities"
                                                >
                                                    <i class="icon fa fa-futbol-o fa-fw " aria-hidden="true"  ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button"
                                                    data-action="show-category"
                                                    data-category="Objects"
                                                    title="Objects"
                                                >
                                                    <i class="icon fa fa-lightbulb-o fa-fw " aria-hidden="true"  ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button"
                                                    data-action="show-category"
                                                    data-category="Symbols"
                                                    title="Symbols"
                                                >
                                                    <i class="icon fa fa-heart fa-fw " aria-hidden="true"  ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button"
                                                    data-action="show-category"
                                                    data-category="Flags"
                                                    title="Flags"
                                                >
                                                    <i class="icon fa fa-flag fa-fw " aria-hidden="true"  ></i>
                                                </button>
                                            </div>
                                            <div class="card-body p-2 d-flex flex-column overflow-hidden">
                                                <div class="input-group mb-1 flex-shrink-0">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text pr-0 bg-white text-muted">
                                                            <i class="icon fa fa-search fa-fw " aria-hidden="true"  ></i>
                                                        </span>
                                                    </div>
                                                    <input
                                                        type="text"
                                                        class="form-control border-left-0"
                                                        placeholder="Search"
                                                        aria-label="Search"
                                                        data-region="search-input"
                                                    >
                                                </div>
                                                <div class="flex-grow-1 overflow-auto emojis-container h-100" data-region="emojis-container">
                                                    <div class="position-relative" data-region="row-container"></div>
                                                </div>
                                                <div class="flex-grow-1 overflow-auto search-results-container h-100 hidden" data-region="search-results-container">
                                                    <div class="position-relative" data-region="row-container"></div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer d-flex flex-shrink-0"
                                                data-region="footer"
                                            >
                                                <div class="emoji-preview" data-region="emoji-preview"></div>
                                                <div data-region="emoji-short-name" class="emoji-short-name text-muted text-wrap ml-2"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <button
                                        class="btn btn-link btn-icon icon-size-3 ml-1"
                                        aria-label="Toggle emoji picker"
                                        data-action="toggle-emoji-picker"
                                    >
                                        <i class="icon fa fa-smile-o fa-fw " aria-hidden="true"  ></i>
                                    </button>
                                <button
                                    class="btn btn-link btn-icon icon-size-3 ml-1 mt-auto"
                                    aria-label="Send message"
                                    data-action="send-message"
                                >
                                    <span data-region="send-icon-container"><i class="icon fa fa-paper-plane fa-fw " aria-hidden="true"  ></i></span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="hidden p-sm-2" data-region="content-messages-footer-edit-mode-container">
                        
                        <div class="d-flex p-3 justify-content-end">
                            <button
                                class="btn btn-link btn-icon my-1 icon-size-4"
                                data-action="delete-selected-messages"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Delete selected messages"
                            >
                                <span data-region="icon-container"><i class="icon fa fa-trash fa-fw " aria-hidden="true"  ></i></span>
                                <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
</span>
                                <span class="sr-only">Delete selected messages</span>
                            </button>
                        </div>                    </div>
                    <div class="hidden bg-secondary p-sm-3" data-region="content-messages-footer-require-contact-container">
                        
                        <div class="p-3 bg-white">
                            <p data-region="title"></p>
                            <p class="text-muted" data-region="text"></p>
                            <button type="button" class="btn btn-primary btn-block" data-action="request-add-contact">
                                <span data-region="dialogue-button-text">Send contact request</span>
                                <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
</span>
                            </button>
                        </div>
                    </div>
                    <div class="hidden bg-secondary p-sm-3" data-region="content-messages-footer-require-unblock-container">
                        
                        <div class="p-3 bg-white">
                            <p class="text-muted" data-region="text">You have blocked this user.</p>
                            <button type="button" class="btn btn-primary btn-block" data-action="request-unblock">
                                <span data-region="dialogue-button-text">Unblock user</span>
                                <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
</span>
                            </button>
                        </div>
                    </div>
                    <div class="hidden bg-secondary p-sm-3" data-region="content-messages-footer-unable-to-message">
                        
                        <div class="p-3 bg-white">
                            <p class="text-muted" data-region="text">You are unable to message this user</p>
                        </div>
                    </div>
                    <div class="p-sm-2" data-region="placeholder-container">
                        <div class="d-flex">
                            <div class="bg-pulse-grey w-100" style="height: 80px"></div>
                            <div class="mx-2 mb-2 align-self-end bg-pulse-grey" style="height: 20px; width: 20px"></div>
                        </div>                    </div>
                    <div
                        class="hidden position-absolute z-index-1"
                        data-region="confirm-dialogue-container"
                        style="top: -1px; bottom: 0; right: 0; left: 0; background: rgba(0,0,0,0.3);"
                    ></div>
                </div>                    <div data-region="view-overview" class="text-center">
                        <a href="https://moodle.hs-hannover.de/message/index.php">
                            See all
                        </a>
                    </div>
            </div>
        </div>

</div>
    <div id="goto-top-link">
        <a class="btn btn-light" role="button" href="#" aria-label="Go to top">
            <i class="icon fa fa-arrow-up fa-fw " aria-hidden="true"  ></i>
        </a>
    </div>
    <footer id="page-footer" class="py-3 bg-dark text-light">
        <div class="container-fluid">
            <div class="row">
                <div id="course-footer" class="col-12">
                    
                </div>
    
    
    
                    <section data-region="footer-left" class="d-print-none col-12 col-lg-4">
                        <aside id="block-region-footer-left" class="block-region" data-blockregion="footer-left" data-droptarget="1"><a href="#sb-1" class="sr-only sr-only-focusable">Skip Mediendidaktik</a>

<section id="inst53511"
     class=" block_html block  card mb-3"
     role="complementary"
     data-block="html"
          aria-labelledby="instance-53511-header"
     >

    <div class="card-body p-3">

            <h5 id="instance-53511-header" class="card-title d-inline">Mediendidaktik</h5>


        <div class="card-text content mt-3">
            <div class="no-overflow"><p><a href="https://moodle.hs-hannover.de/course/view.php?id=20448">Termine Austauschforum Lehrpraxis &amp; Workshops<br></a></p><p><a href="https://www.hs-hannover.de/ueber-uns/organisation/servicezentrum-lehre/digital-lehren-und-lernen/digital-lehren-und-lernen" target="_blank">Digital Lehren und Lernen</a></p><p><a href="https://www.hs-hannover.de/ueber-uns/organisation/servicezentrum-lehre/digital-lehren-und-lernen/e-assessment-und-pruefungen" target="_blank">E-Assessment und Prüfungen</a><br></p><p><a href="https://www.hs-hannover.de/ueber-uns/organisation/servicezentrum-lehre/digital-lehren-und-lernen/videobasierte-lehre" target="_blank">Lernvideos und Vorlesungsaufzeichnungen</a></p><p><a href="https://www.hs-hannover.de/ueber-uns/organisation/servicezentrum-lehre/digital-lehren-und-lernen/team" target="_blank">Das Team&nbsp;im Z2</a><br></p></div>
            <div class="footer"></div>
            
        </div>

    </div>

</section>

  <span id="sb-1"></span></aside>
                    </section>
    
                    <section data-region="footer-middle" class="d-print-none col-12 col-lg-4">
                        <aside id="block-region-footer-middle" class="block-region" data-blockregion="footer-middle" data-droptarget="1"><a href="#sb-2" class="sr-only sr-only-focusable">Skip Moodle-Hilfe</a>

<section id="inst53512"
     class=" block_html block  card mb-3"
     role="complementary"
     data-block="html"
          aria-labelledby="instance-53512-header"
     >

    <div class="card-body p-3">

            <h5 id="instance-53512-header" class="card-title d-inline">Moodle-Hilfe</h5>


        <div class="card-text content mt-3">
            <div class="no-overflow"><p><a href="https://moodle.hs-hannover.de/course/view.php?id=3303" target="_blank">Demokurs für Lehrende</a></p><p><a href="https://moodle.hs-hannover.de/course/view.php?id=6011" target="_blank">Demokurs für Studierende</a></p><p><a href="https://moodle.hs-hannover.de/local/hsh/contact.php" target="_blank">Kontaktformular</a></p><p><a href="tel:+49-511-9296-4646">Hotline +49-511-9296-4646</a></p><p><a href="mailto:elc@hs-hannover.de" target="_blank">ELC@hs-hannover.de</a><br></p></div>
            <div class="footer"></div>
            
        </div>

    </div>

</section>

  <span id="sb-2"></span></aside>
                    </section>
    
                    <section data-region="footer-right" class="d-print-none col-12 col-lg-4">
                        <aside id="block-region-footer-right" class="block-region" data-blockregion="footer-right" data-droptarget="1"><a href="#sb-3" class="sr-only sr-only-focusable">Skip E-Learning News</a>

<section id="inst53509"
     class=" block_rss_client block  card mb-3"
     role="complementary"
     data-block="rss_client"
          aria-labelledby="instance-53509-header"
     >

    <div class="card-body p-3">

            <h5 id="instance-53509-header" class="card-title d-inline">E-Learning News</h5>


        <div class="card-text content mt-3">
            <ul class="list no-overflow">
                <li class="py-3">
                        <div class="link">
                            <a href="https://elc.wp.hs-hannover.de/archiv/2023/06/moodle-4-terminuebersicht-online-rundgaenge-und-downtimes/" onclick='this.target="_blank"'>Update auf Moodle 4: Terminübersicht Online-Rundgänge und Downtimes</a>
                        </div>
                
                </li>
                <li class="py-3">
                        <div class="link">
                            <a href="https://elc.wp.hs-hannover.de/archiv/2023/04/nachlese-austauschforum-lehrpraxis-spezial-90-minuten-zu-chatgpt-in-der-hochschullehre/" onclick='this.target="_blank"'>Nachlese: Austauschforum Lehrpraxis “Spezial” – 90 Minuten zu ChatGPT in der Hochschullehre</a>
                        </div>
                
                </li>
                <li class="py-3">
                        <div class="link">
                            <a href="https://elc.wp.hs-hannover.de/archiv/2023/04/barrierearmes-lehren-und-lernen-in-der-hsh/" onclick='this.target="_blank"'>Barrierearmes Lehren und Lernen in der HsH?</a>
                        </div>
                
                </li>
                <li class="py-3">
                        <div class="link">
                            <a href="https://elc.wp.hs-hannover.de/archiv/2023/02/textgenerierende-ki-sparringspartner-und-schreibassistent-oder-betrugskomplize-und-bullshit-generator/" onclick='this.target="_blank"'>Textgenerierende KI – Sparringspartner und Schreibassistent oder Betrugskomplize und Bullshit-Generator?</a>
                        </div>
                
                </li>
        </ul>
            <div class="footer"></div>
            
        </div>

    </div>

</section>

  <span id="sb-3"></span></aside>
                    </section>
    
            </div>
        </div>
    
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
    
                    <div class="logininfo">You are logged in as <a href="https://moodle.hs-hannover.de/user/profile.php?id=36918" title="View profile">Panthulu, Praveen</a> (<a href="https://moodle.hs-hannover.de/login/logout.php?sesskey=hzHo8pxk4d">Log out</a>)</div>
                    <div class="tool_usertours-resettourcontainer"></div>
                    <div class="homelink"><a href="https://moodle.hs-hannover.de/course/view.php?id=23421">intoCODE, 2023, Schult</a></div>
                    <nav class="nav navbar-nav d-md-none" aria-label="Custom menu">
                            <ul class="list-unstyled pt-3">
                                                <li><a href="#" title="Language">English ‎(en)‎</a></li>
                                            <li>
                                                <ul class="list-unstyled ml-3">
                                                                    <li><a href="https://moodle.hs-hannover.de/mod/resource/view.php?id=793453&amp;lang=de" title="Language">Deutsch ‎(de)‎</a></li>
                                                                    <li><a href="https://moodle.hs-hannover.de/mod/resource/view.php?id=793453&amp;lang=en" title="Language">English ‎(en)‎</a></li>
                                                                    <li><a href="https://moodle.hs-hannover.de/mod/resource/view.php?id=793453&amp;lang=es" title="Language">Español - Internacional ‎(es)‎</a></li>
                                                                    <li><a href="https://moodle.hs-hannover.de/mod/resource/view.php?id=793453&amp;lang=fr" title="Language">Français ‎(fr)‎</a></li>
                                                                    <li><a href="https://moodle.hs-hannover.de/mod/resource/view.php?id=793453&amp;lang=it" title="Language">Italiano ‎(it)‎</a></li>
                                                                    <li><a href="https://moodle.hs-hannover.de/mod/resource/view.php?id=793453&amp;lang=zh_cn" title="Language">简体中文 ‎(zh_cn)‎</a></li>
                                                </ul>
                                            </li>
                            </ul>
                    </nav>
                    <div class="policiesfooter"><a href="https://moodle.hs-hannover.de/admin/tool/policy/viewall.php?returnurl=https%3A%2F%2Fmoodle.hs-hannover.de%2Fmod%2Fresource%2Fview.php%3Fid%3D793453">Policies</a><div style="display: inline;">  |  </div><a target="_blank" href="https://www.hs-hannover.de/impressum/">Impressum</a></div>
                    <script>
//<![CDATA[
var require = {
    baseUrl : 'https://moodle.hs-hannover.de/lib/requirejs.php/1686672301/',
    // We only support AMD modules with an explicit define() statement.
    enforceDefine: true,
    skipDataMain: true,
    waitSeconds : 0,

    paths: {
        jquery: 'https://moodle.hs-hannover.de/lib/javascript.php/1686672301/lib/jquery/jquery-3.5.1.min',
        jqueryui: 'https://moodle.hs-hannover.de/lib/javascript.php/1686672301/lib/jquery/ui-1.12.1/jquery-ui.min',
        jqueryprivate: 'https://moodle.hs-hannover.de/lib/javascript.php/1686672301/lib/requirejs/jquery-private'
    },

    // Custom jquery config map.
    map: {
      // '*' means all modules will get 'jqueryprivate'
      // for their 'jquery' dependency.
      '*': { jquery: 'jqueryprivate' },
      // Stub module for 'process'. This is a workaround for a bug in MathJax (see MDL-60458).
      '*': { process: 'core/first' },

      // 'jquery-private' wants the real jQuery module
      // though. If this line was not here, there would
      // be an unresolvable cyclic dependency.
      jqueryprivate: { jquery: 'jquery' }
    }
};

//]]>
</script>
<script src="https://moodle.hs-hannover.de/lib/javascript.php/1686672301/lib/requirejs/require.min.js"></script>
<script>
//<![CDATA[
M.util.js_pending("core/first");
require(['core/first'], function() {
require(['core/prefetch'])
;
require(["media_videojs/loader"], function(loader) {
    loader.setUp('en');
});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
function legacy_activity_onclick_handler_1(e) { e.halt(); window.open('https://moodle.hs-hannover.de/mod/resource/view.php?id=793452&redirect=1'); return false; };
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
function legacy_activity_onclick_handler_2(e) { e.halt(); window.open('https://moodle.hs-hannover.de/mod/resource/view.php?id=793453&redirect=1'); return false; };
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('local_boostnavigation/collapsenavdrawernodes'); require(['local_boostnavigation/collapsenavdrawernodes'], function(amd) {amd.init(["mycourses","localboostnavigationcoursesections","localboostnavigationactivities"], []); M.util.js_complete('local_boostnavigation/collapsenavdrawernodes');});;
M.util.js_pending('local_sembasednav/sembasednav'); require(['local_sembasednav/sembasednav'], function(amd) {amd.closeAllChildNodes("mycourses"); M.util.js_complete('local_sembasednav/sembasednav');});;
M.util.js_pending('local_boostnavigation/collapsenavdrawernodes'); require(['local_boostnavigation/collapsenavdrawernodes'], function(amd) {amd.init(["node-ST-2023"], []); M.util.js_complete('local_boostnavigation/collapsenavdrawernodes');});;
M.util.js_pending('tool_usertours/usertours'); require(['tool_usertours/usertours'], function(amd) {amd.init([{"tourId":"12","startTour":true,"filtervalues":{"cssselector":{"0":"[data-region=activity-information]"}}}], ["cssselector"]); M.util.js_complete('tool_usertours/usertours');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;

require(['jquery', 'core/custom_interaction_events'], function($, CustomEvents) {
    CustomEvents.define('#single_select649a90fe51e563', [CustomEvents.events.accessibleChange]);
    $('#single_select649a90fe51e563').on(CustomEvents.events.accessibleChange, function() {
        var ignore = $(this).find(':selected').attr('data-ignore');
        if (typeof ignore === typeof undefined) {
            $('#single_select_f649a90fe51e562').submit();
        }
    });
});
;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;

require(['jquery', 'message_popup/notification_popover_controller'], function($, controller) {
    var container = $('#nav-notification-popover-container');
    var controller = new controller(container);
    controller.registerEventListeners();
    controller.registerListNavigationEventListeners();
});
;

require(
[
    'jquery',
    'core_message/message_popover'
],
function(
    $,
    Popover
) {
    var toggle = $('#message-drawer-toggle-649a90fe58235649a90fe51e566');
    Popover.init(toggle);
});
;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;

        require(['jquery', 'core/custom_interaction_events'], function($, CustomEvents) {
            CustomEvents.define('#jump-to-activity', [CustomEvents.events.accessibleChange]);
            $('#jump-to-activity').on(CustomEvents.events.accessibleChange, function() {
                if (!$(this).val()) {
                    return false;
                }
                $('#url_select_f649a90fe51e5616').submit();
            });
        });
    ;

require(['jquery', 'core_message/message_drawer'], function($, MessageDrawer) {
    var root = $('#message-drawer-649a90fe5dbe3649a90fe51e5617');
    MessageDrawer.init(root, '649a90fe5dbe3649a90fe51e5617', false);
});
;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;

require(['jquery', 'core/custom_interaction_events'], function($, CustomEvents) {
    CustomEvents.define('#single_select649a90fe51e5619', [CustomEvents.events.accessibleChange]);
    $('#single_select649a90fe51e5619').on(CustomEvents.events.accessibleChange, function() {
        var ignore = $(this).find(':selected').attr('data-ignore');
        if (typeof ignore === typeof undefined) {
            $('#single_select_f649a90fe51e5618').submit();
        }
    });
});
;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;

M.util.js_pending('theme_boost/loader');
require(['theme_boost/loader'], function() {
    M.util.js_complete('theme_boost/loader');
});

M.util.js_pending('theme_boost/drawer');
require(['theme_boost/drawer'], function(drawer) {
    drawer.init();
    M.util.js_complete('theme_boost/drawer');
});
require(['theme_boost_campus/catchshortcuts'], function(mod) {
    mod.init(["end","cmdarrowdown","ctrlarrowdown"]);
});
    require(['theme_boost_campus/incoursesettings'], function(mod) {
    mod.init();
    });
require(['theme_boost_campus/editcoursefab'], function(mod) {
    mod.init();
});
;
M.util.js_pending('core/notification'); require(['core/notification'], function(amd) {amd.init(925912, []); M.util.js_complete('core/notification');});;
M.util.js_pending('core/log'); require(['core/log'], function(amd) {amd.setConfig({"level":"warn"}); M.util.js_complete('core/log');});;
M.util.js_pending('core/page_global'); require(['core/page_global'], function(amd) {amd.init(); M.util.js_complete('core/page_global');});
    M.util.js_complete("core/first");
});
//]]>
</script>
<script>
//<![CDATA[
M.str = {"moodle":{"lastmodified":"Last modified","name":"Name","error":"Error","info":"Information","yes":"Yes","no":"No","ok":"OK","cancel":"Cancel","confirm":"Confirm","areyousure":"Are you sure?","closebuttontitle":"Close","unknownerror":"Unknown error","file":"File","url":"URL","collapseall":"Collapse all","expandall":"Expand all"},"repository":{"type":"Type","size":"Size","invalidjson":"Invalid JSON string","nofilesattached":"No files attached","filepicker":"File picker","logout":"Logout","nofilesavailable":"No files available","norepositoriesavailable":"Sorry, none of your current repositories can return files in the required format.","fileexistsdialogheader":"File exists","fileexistsdialog_editor":"A file with that name has already been attached to the text you are editing.","fileexistsdialog_filemanager":"A file with that name has already been attached","renameto":"Rename to \"{$a}\"","referencesexist":"There are {$a} links to this file","select":"Select"},"admin":{"confirmdeletecomments":"You are about to delete comments, are you sure?","confirmation":"Confirmation"},"debug":{"debuginfo":"Debug info","line":"Line","stacktrace":"Stack trace"},"langconfig":{"labelsep":": "}};
//]]>
</script>
<script>
//<![CDATA[
(function() {Y.use("moodle-filter_mathjaxloader-loader",function() {M.filter_mathjaxloader.configure({"mathjaxconfig":"MathJax.Hub.Config({\r\n    config: [\"Accessible.js\", \"Safe.js\"],\r\n    errorSettings: { message: [\"!\"] },\r\n    skipStartupTypeset: true,\r\n    messageStyle: \"none\"\r\n});","lang":"en"});
});
Y.use("moodle-filter_glossary-autolinker",function() {M.filter_glossary.init_filter_autolinking({"courseid":0});
});
M.util.help_popups.setup(Y);
 M.util.js_pending('random649a90fe51e5620'); Y.on('domready', function() { M.util.js_complete("init");  M.util.js_complete('random649a90fe51e5620'); });
})();
//]]>
</script>

                </div>
            </div>
        </div>
    </footer>
    
    
    
</div>

</body>
</html>