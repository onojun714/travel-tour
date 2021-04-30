<?php 
include 'travel-action.php';                                                  
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Confirm Member Infomation</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <link rel="stylesheet" href="css/styles.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <style>
        body { -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; font-family: 'Merriweather Sans', sans-serif; letter-spacing: 0px; font-size: 14px; color: #36333c; font-weight: 400; line-height: 26px; background-color: #25274d; }
        .wrapper { margin: 0px 41px 41px 41px; }
        h1, h2, h3, h4, h5, h6 { letter-spacing: 0px; font-weight: 300; color: #1c1e22; margin: 0px 0px 15px 0px; font-family: 'Merriweather Sans', sans-serif; }
        h1 { font-size: 40px; }
        h2 { font-size: 34px; }
        h3 { font-size: 24px; font-weight: 400; }
        h4 { font-size: 20px; font-weight: 400; }
        h5 { font-size: 16px; }
        h6 { font-size: 14px; }
        p { margin: 0 0 20px; line-height: 2; }
        p:last-child { margin: 0px; }
        ul, ol { }
        a { text-decoration: none; color: #121113; -webkit-transition: all 0.3s; -moz-transition: all 0.3s; transition: all 0.3s; }
        a:focus, a:hover { text-decoration: none; color: #3d0f82; }
        .content{padding-top:60px; padding-bottom:60px; margin-top: 2%;}
        .mb30{margin-bottom:30px;}
        .btn { font-family: 'Merriweather Sans', sans-serif; font-size: 16px; text-transform: capitalize; font-weight: 700; padding: 14px 40px; letter-spacing: 0px; border-radius: 50px; line-height: 2; -webkit-transition: all 0.3s; -moz-transition: all 0.3s; transition: all 0.3s; word-wrap: break-word; white-space: normal !important; }
        .btn-primary { background-color: #fcd55a; color: #121113; border: 2px solid #fcd55a; }
        .btn-primary:hover { background-color: #efbf25; color: #121113; border: 2px solid #efbf25; }
        .btn-primary.focus, .btn-primary:focus { background-color: #efbf25; color: #121113; border: 2px solid #efbf25; box-shadow: 0 0 0 0.2rem rgba(239, 191, 37, .5); color: #121113; }

        label { }
        .control-label { font-size: 16px; color: #20232b; margin-bottom: 8px; letter-spacing: 0px; font-weight: 400; }
        .form-control:focus { }
        textarea.form-control { height: 120px; }
        .required { }
        .form-group { margin-bottom: 5px; }
        select.form-control:not([size]):not([multiple]) { height: 70px; }
        .hero-section .form-control { border: 1px solid #8c897d; height: 58px; }
        .form-control { border-radius: 8px; font-size: 16px; font-weight: 400; width: 100%; height: 70px; padding: 14px 18px; line-height: 1.42857143; border: 1px solid #dedbe3; background-color: #f8f8f9; letter-spacing: 0px; margin-bottom: 16px; -webkit-box-shadow: inset 0 0px 0px rgba(0, 0, 0, .075); box-shadow: inset 0 0px 0px rgba(0, 0, 0, .075); -webkit-appearance: none; }
        .form-control:focus { color: #121113 !important; outline: 0; -webkit-box-shadow: none; box-shadow: none; border-color: #d6dadf; }
        input::-webkit-input-placeholder { color: #121113 !important; }
        textarea::-webkit-input-placeholder { color: #121113 !important; }
        .input-group-addon { background-color: transparent; border: 1px solid #eee; border-radius: 0px; position: absolute; right: 16px; top: 23px; font-size: 12px; }
        .focus { border: 1px solid #d2cfd7; }
        .focus:focus { border: 1px solid #d2cfd7; }
        .has-success .form-control { border-color: #3c763d; background-color: #f8f8f9; box-shadow: none; }
        .has-success .form-control:focus { border-color: #3c763d; outline: 0; -webkit-box-shadow: none; box-shadow: none; }
        .has-error .form-control { border-color: #a94442; background-color: #f8f8f9; box-shadow: none; }
        .has-error .form-control:focus { border-color: #34b2a4; outline: 0; -webkit-box-shadow: none; box-shadow: none; }
        .input-group-addon:last-child { border-left: 0; border-right: transparent; border-top: transparent; border-bottom: transparent; }
        .input-group-addon i { color: #0e142e; }
        .btn-select { font-size: 14px; }
        select option { margin: 40px; background: rgba(255, 255, 255, 1); color: #7a7f94;
        text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4); position: relative; }
        select.form-control { position: relative; }
        select {-moz-appearance: none; border-radius: 0px; font-size: 14px; font-weight: 700; width: 100%; padding: 14px; line-height: 1.42857143; border: 1px solid #e0e5e9; background-color: #fff; -webkit-appearance: none; -webkit-box-shadow: inset 0 0px 0px rgba(0, 0, 0, .075); box-shadow: inset 0 0px 0px rgba(0, 0, 0, .075); }
        .select {position: relative; display: block; line-height: 3; overflow: hidden; }
        select { width: 100%; height: 100%; margin: 0; padding: 0 0 0 .5em; cursor: pointer; color: #FFF; font-size: 16px; }
        .select::after { position: absolute; top: 0; right: 0; bottom: 0; padding: 10px 17px 0px 0px; background: transparent; pointer-events: none; font-family: FontAwesome; content: "\f107"; font-size: 16px; }
        .select:hover::after { color: #023981; }
        .select::after { -webkit-transition: .25s all ease; -o-transition: .25s all ease; transition: .25s all ease; }
        select option { -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; cursor: pointer; padding: 10px; width: 100%; background-color: #fff; font-family: 'Merriweather Sans', sans-serif; }
        .input-group>.custom-select:not(:last-child), .input-group>.form-control:not(:last-child) { border-top-right-radius: 4px; border-bottom-right-radius: 4px; }
        #datepicker { }
        .default-skin .ui-widget-header { border: 1px solid #e4e7e9; background: #f3f6f8; color: #fff; font-weight: bold; }
        .default-skin .ui-state-highlight, .default-skin .ui-widget-content .ui-state-highlight, .default-skin .ui-widget-header .ui-state-highlight { border: 1px solid #e4e7e9; background: #f3f6f8; color: #fff; }






        .tour-booking-form { border: 1px solid #ededed; border-radius: 8px; padding: 40px; }
        .tour-form-title { border-bottom: 1px solid #ededed; padding-bottom: 25px; margin-bottom: 25px; font-size: 20px; }




        /*! jQuery UI - v1.12.1 - 2016-09-14
        * http://jqueryui.com
        * Includes: core.css, accordion.css, autocomplete.css, menu.css, button.css, controlgroup.css, checkboxradio.css, datepicker.css, dialog.css, draggable.css, resizable.css, progressbar.css, selectable.css, selectmenu.css, slider.css, sortable.css, spinner.css, tabs.css, tooltip.css, theme.css
        * To view and modify this theme, visit http://jqueryui.com/themeroller/?ffDefault=Arial%2CHelvetica%2Csans-serif&fsDefault=1em&fwDefault=normal&cornerRadius=3px&bgColorHeader=e9e9e9&bgTextureHeader=flat&borderColorHeader=dddddd&fcHeader=333333&iconColorHeader=444444&bgColorContent=ffffff&bgTextureContent=flat&borderColorContent=dddddd&fcContent=333333&iconColorContent=444444&bgColorDefault=f6f6f6&bgTextureDefault=flat&borderColorDefault=c5c5c5&fcDefault=454545&iconColorDefault=777777&bgColorHover=ededed&bgTextureHover=flat&borderColorHover=cccccc&fcHover=2b2b2b&iconColorHover=555555&bgColorActive=007fff&bgTextureActive=flat&borderColorActive=003eff&fcActive=ffffff&iconColorActive=ffffff&bgColorHighlight=fffa90&bgTextureHighlight=flat&borderColorHighlight=dad55e&fcHighlight=777620&iconColorHighlight=777620&bgColorError=fddfdf&bgTextureError=flat&borderColorError=f1a899&fcError=5f3f3f&iconColorError=cc0000&bgColorOverlay=aaaaaa&bgTextureOverlay=flat&bgImgOpacityOverlay=0&opacityOverlay=30&bgColorShadow=666666&bgTextureShadow=flat&bgImgOpacityShadow=0&opacityShadow=30&thicknessShadow=5px&offsetTopShadow=0px&offsetLeftShadow=0px&cornerRadiusShadow=8px
        * Copyright jQuery Foundation and other contributors; Licensed MIT */

        /* Layout helpers
        ----------------------------------*/

        .ui-helper-hidden { display: none; }
        .ui-helper-hidden-accessible { border: 0; clip: rect(0 0 0 0); height: 1px; margin: -1px; overflow: hidden; padding: 0; position: absolute; width: 1px; }
        .ui-helper-reset { margin: 0; padding: 0; border: 0; outline: 0; line-height: 1.3; text-decoration: none; font-size: 100%; list-style: none; }
        .ui-helper-clearfix:before, .ui-helper-clearfix:after { content: ""; display: table; border-collapse: collapse; }
        .ui-helper-clearfix:after { clear: both; }
        .ui-helper-zfix { width: 100%; height: 100%; top: 0; left: 0; position: absolute; opacity: 0; filter: Alpha(Opacity=0);    /* support: IE8 */ }
        .ui-front { z-index: 100; }

        /* Interaction Cues
        ----------------------------------*/
        .ui-state-disabled { cursor: default !important; pointer-events: none; }

        /* Icons
        ----------------------------------*/
        .ui-icon { display: inline-block; vertical-align: middle; margin-top: -.25em; position: relative; text-indent: -99999px; overflow: hidden; background-repeat: no-repeat; }
        .ui-widget-icon-block { left: 50%; margin-left: -8px; display: block; }

        /* Misc visuals
        ----------------------------------*/

        /* Overlays */

        .ui-widget-overlay { position: fixed; top: 0; left: 0; width: 100%; height: 100%; }
        .ui-accordion .ui-accordion-header { display: block; cursor: pointer; position: relative; margin: 2px 0 0 0; padding: .5em .5em .5em .7em; font-size: 100%; }
        .ui-accordion .ui-accordion-content { padding: 1em 2.2em; border-top: 0; overflow: auto; }
        .ui-autocomplete { position: absolute; top: 0; left: 0; cursor: default; }
        .ui-menu { list-style: none; padding: 0; margin: 0; display: block; outline: 0; }
        .ui-menu .ui-menu { position: absolute; }
        .ui-menu .ui-menu-item { margin: 0; cursor: pointer;    /* support: IE10, see #8844 */ list-style-image: url("data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"); }
        .ui-menu .ui-menu-item-wrapper { position: relative; padding: 3px 1em 3px .4em; }
        .ui-menu .ui-menu-divider { margin: 5px 0; height: 0; font-size: 0; line-height: 0; border-width: 1px 0 0 0; }
        .ui-menu .ui-state-focus, .ui-menu .ui-state-active { margin: -1px; }

        /* icon support */
        .ui-menu-icons { position: relative; }
        .ui-menu-icons .ui-menu-item-wrapper { padding-left: 2em; }

        /* left-aligned */
        .ui-menu .ui-icon { position: absolute; top: 0; bottom: 0; left: .2em; margin: auto 0; }

        /* right-aligned */
        .ui-menu .ui-menu-icon { left: auto; right: 0; }
        .ui-button { padding: .4em 1em; display: inline-block; position: relative; line-height: normal; margin-right: .1em; cursor: pointer; vertical-align: middle; text-align: center; -webkit-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none;    /* Support: IE <= 11 */ overflow: visible; }
        .ui-button, .ui-button:link, .ui-button:visited, .ui-button:hover, .ui-button:active { text-decoration: none; }

        /* to make room for the icon, a width needs to be set here */
        .ui-button-icon-only { width: 2em; box-sizing: border-box; text-indent: -9999px; white-space: nowrap; }

        /* no icon support for input elements */
        input.ui-button.ui-button-icon-only { text-indent: 0; }

        /* button icon element(s) */
        .ui-button-icon-only .ui-icon { position: absolute; top: 50%; left: 50%; margin-top: -8px; margin-left: -8px; }
        .ui-button.ui-icon-notext .ui-icon { padding: 0; width: 2.1em; height: 2.1em; text-indent: -9999px; white-space: nowrap; }
        input.ui-button.ui-icon-notext .ui-icon { width: auto; height: auto; text-indent: 0; white-space: normal; padding: .4em 1em; }

        /* workarounds */

        /* Support: Firefox 5 - 40 */

        input.ui-button::-moz-focus-inner, button.ui-button::-moz-focus-inner { border: 0; padding: 0; }
        .ui-controlgroup { vertical-align: middle; display: inline-block; }
        .ui-controlgroup>.ui-controlgroup-item { float: left; margin-left: 0; margin-right: 0; }
        .ui-controlgroup>.ui-controlgroup-item:focus, .ui-controlgroup>.ui-controlgroup-item.ui-visual-focus { z-index: 9999; }
        .ui-controlgroup-vertical>.ui-controlgroup-item { display: block; float: none; width: 100%; margin-top: 0; margin-bottom: 0; text-align: left; }
        .ui-controlgroup-vertical .ui-controlgroup-item { box-sizing: border-box; }
        .ui-controlgroup .ui-controlgroup-label { padding: .4em 1em; }
        .ui-controlgroup .ui-controlgroup-label span { font-size: 80%; }
        .ui-controlgroup-horizontal .ui-controlgroup-label+.ui-controlgroup-item { border-left: none; }
        .ui-controlgroup-vertical .ui-controlgroup-label+.ui-controlgroup-item { border-top: none; }
        .ui-controlgroup-horizontal .ui-controlgroup-label.ui-widget-content { border-right: none; }
        .ui-controlgroup-vertical .ui-controlgroup-label.ui-widget-content { border-bottom: none; }

        /* Spinner specific style fixes */
        .ui-controlgroup-vertical .ui-spinner-input {    /* Support: IE8 only, Android < 4.4 only */
        width: 75%; width: calc(100% - 2.4em); }
        .ui-controlgroup-vertical .ui-spinner .ui-spinner-up { border-top-style: solid; }
        .ui-checkboxradio-label .ui-icon-background { box-shadow: inset 1px 1px 1px #ccc; border-radius: .12em; border: none; }
        .ui-checkboxradio-radio-label .ui-icon-background { width: 16px; height: 16px; border-radius: 1em; overflow: visible; border: none; }
        .ui-checkboxradio-radio-label.ui-checkboxradio-checked .ui-icon, .ui-checkboxradio-radio-label.ui-checkboxradio-checked:hover .ui-icon { background-image: none; width: 8px; height: 8px; border-width: 4px; border-style: solid; }
        .ui-checkboxradio-disabled { pointer-events: none; }
        .ui-datepicker { width: 17em; padding: .2em .2em 0; display: none; }
        .ui-datepicker .ui-datepicker-header { position: relative; padding: .2em 0; }
        .ui-datepicker .ui-datepicker-prev, .ui-datepicker .ui-datepicker-next { position: absolute; top: 2px; width: 1.8em; height: 1.8em; }
        .ui-datepicker .ui-datepicker-prev-hover, .ui-datepicker .ui-datepicker-next-hover { top: 1px; }
        .ui-datepicker .ui-datepicker-prev { left: 2px; }
        .ui-datepicker .ui-datepicker-next { right: 2px; }
        .ui-datepicker .ui-datepicker-prev-hover { left: 1px; }
        .ui-datepicker .ui-datepicker-next-hover { right: 1px; }
        .ui-datepicker .ui-datepicker-prev span, .ui-datepicker .ui-datepicker-next span { display: block; position: absolute; left: 50%; margin-left: -8px; top: 50%; margin-top: -8px; }
        .ui-datepicker .ui-datepicker-title { margin: 0 2.3em; line-height: 1.8em; text-align: center; font-size: 14px; text-transform: uppercase; }
        .ui-datepicker .ui-datepicker-title select { font-size: 1em; margin: 1px 0; }
        .ui-datepicker select.ui-datepicker-month, .ui-datepicker select.ui-datepicker-year { width: 45%; }
        .ui-datepicker table { width: 100%; font-size: .9em; border-collapse: collapse; margin: 0 0 .4em; }
        .ui-datepicker th { padding: .7em .3em; text-align: center; font-weight: bold; border: 0; }
        .ui-datepicker td { border: 0; padding: 1px; }
        .ui-datepicker td span, .ui-datepicker td a { display: block; padding: .2em; text-align: right; text-decoration: none; }
        .ui-datepicker .ui-datepicker-buttonpane { background-image: none; margin: .7em 0 0 0; padding: 0 .2em; border-left: 0; border-right: 0; border-bottom: 0; }
        .ui-datepicker .ui-datepicker-buttonpane button { float: right; margin: .5em .2em .4em; cursor: pointer; padding: .2em .6em .3em .6em; width: auto; overflow: visible; }
        .ui-datepicker .ui-datepicker-buttonpane button.ui-datepicker-current { float: left; }

        /* with multiple calendars */
        .ui-datepicker.ui-datepicker-multi { width: auto; }
        .ui-datepicker-multi .ui-datepicker-group { float: left; }
        .ui-datepicker-multi .ui-datepicker-group table { width: 95%; margin: 0 auto .4em; }
        .ui-datepicker-multi-2 .ui-datepicker-group { width: 50%; }
        .ui-datepicker-multi-3 .ui-datepicker-group { width: 33.3%; }
        .ui-datepicker-multi-4 .ui-datepicker-group { width: 25%; }
        .ui-datepicker-multi .ui-datepicker-group-last .ui-datepicker-header, .ui-datepicker-multi .ui-datepicker-group-middle .ui-datepicker-header { border-left-width: 0; }
        .ui-datepicker-multi .ui-datepicker-buttonpane { clear: left; }
        .ui-datepicker-row-break { clear: both; width: 100%; font-size: 0; }

        /* RTL support */
        .ui-datepicker-rtl { direction: rtl; }
        .ui-datepicker-rtl .ui-datepicker-prev { right: 2px; left: auto; }
        .ui-datepicker-rtl .ui-datepicker-next { left: 2px; right: auto; }
        .ui-datepicker-rtl .ui-datepicker-prev:hover { right: 1px; left: auto; }
        .ui-datepicker-rtl .ui-datepicker-next:hover { left: 1px; right: auto; }
        .ui-datepicker-rtl .ui-datepicker-buttonpane { clear: right; }
        .ui-datepicker-rtl .ui-datepicker-buttonpane button { float: left; }
        .ui-datepicker-rtl .ui-datepicker-buttonpane button.ui-datepicker-current, .ui-datepicker-rtl .ui-datepicker-group { float: right; }
        .ui-datepicker-rtl .ui-datepicker-group-last .ui-datepicker-header, .ui-datepicker-rtl .ui-datepicker-group-middle .ui-datepicker-header { border-right-width: 0; border-left-width: 1px; }

        /* Icons */
        .ui-datepicker .ui-icon { display: block; text-indent: -99999px; overflow: hidden; background-repeat: no-repeat; left: .5em; top: .3em; }
        .ui-dialog { position: absolute; top: 0; left: 0; padding: .2em; outline: 0; }
        .ui-dialog .ui-dialog-titlebar { padding: .4em 1em; position: relative; }
        .ui-dialog .ui-dialog-title { float: left; margin: .1em 0; white-space: nowrap; width: 90%; overflow: hidden; text-overflow: ellipsis; }
        .ui-dialog .ui-dialog-titlebar-close { position: absolute; right: .3em; top: 50%; width: 20px; margin: -10px 0 0 0; padding: 1px; height: 20px; }
        .ui-dialog .ui-dialog-content { position: relative; border: 0; padding: .5em 1em; background: none; overflow: auto; }
        .ui-dialog .ui-dialog-buttonpane { text-align: left; border-width: 1px 0 0 0; background-image: none; margin-top: .5em; padding: .3em 1em .5em .4em; }
        .ui-dialog .ui-dialog-buttonpane .ui-dialog-buttonset { float: right; }
        .ui-dialog .ui-dialog-buttonpane button { margin: .5em .4em .5em 0; cursor: pointer; }
        .ui-dialog .ui-resizable-n { height: 2px; top: 0; }
        .ui-dialog .ui-resizable-e { width: 2px; right: 0; }
        .ui-dialog .ui-resizable-s { height: 2px; bottom: 0; }
        .ui-dialog .ui-resizable-w { width: 2px; left: 0; }
        .ui-dialog .ui-resizable-se, .ui-dialog .ui-resizable-sw, .ui-dialog .ui-resizable-ne, .ui-dialog .ui-resizable-nw { width: 7px; height: 7px; }
        .ui-dialog .ui-resizable-se { right: 0; bottom: 0; }
        .ui-dialog .ui-resizable-sw { left: 0; bottom: 0; }
        .ui-dialog .ui-resizable-ne { right: 0; top: 0; }
        .ui-dialog .ui-resizable-nw { left: 0; top: 0; }
        .ui-draggable .ui-dialog-titlebar { cursor: move; }
        .ui-draggable-handle { -ms-touch-action: none; touch-action: none; }
        .ui-resizable { position: relative; }
        .ui-resizable-handle { position: absolute; font-size: 0.1px; display: block; -ms-touch-action: none; touch-action: none; }
        .ui-resizable-disabled .ui-resizable-handle, .ui-resizable-autohide .ui-resizable-handle { display: none; }
        .ui-resizable-n { cursor: n-resize; height: 7px; width: 100%; top: -5px; left: 0; }
        .ui-resizable-s { cursor: s-resize; height: 7px; width: 100%; bottom: -5px; left: 0; }
        .ui-resizable-e { cursor: e-resize; width: 7px; right: -5px; top: 0; height: 100%; }
        .ui-resizable-w { cursor: w-resize; width: 7px; left: -5px; top: 0; height: 100%; }
        .ui-resizable-se { cursor: se-resize; width: 12px; height: 12px; right: 1px; bottom: 1px; }
        .ui-resizable-sw { cursor: sw-resize; width: 9px; height: 9px; left: -5px; bottom: -5px; }
        .ui-resizable-nw { cursor: nw-resize; width: 9px; height: 9px; left: -5px; top: -5px; }
        .ui-resizable-ne { cursor: ne-resize; width: 9px; height: 9px; right: -5px; top: -5px; }
        .ui-progressbar { height: 2em; text-align: left; overflow: hidden; }
        .ui-progressbar .ui-progressbar-value { margin: -1px; height: 100%; }
        .ui-progressbar .ui-progressbar-overlay { background: url("data:image/gif;base64,R0lGODlhKAAoAIABAAAAAP///yH/C05FVFNDQVBFMi4wAwEAAAAh+QQJAQABACwAAAAAKAAoAAACkYwNqXrdC52DS06a7MFZI+4FHBCKoDeWKXqymPqGqxvJrXZbMx7Ttc+w9XgU2FB3lOyQRWET2IFGiU9m1frDVpxZZc6bfHwv4c1YXP6k1Vdy292Fb6UkuvFtXpvWSzA+HycXJHUXiGYIiMg2R6W459gnWGfHNdjIqDWVqemH2ekpObkpOlppWUqZiqr6edqqWQAAIfkECQEAAQAsAAAAACgAKAAAApSMgZnGfaqcg1E2uuzDmmHUBR8Qil95hiPKqWn3aqtLsS18y7G1SzNeowWBENtQd+T1JktP05nzPTdJZlR6vUxNWWjV+vUWhWNkWFwxl9VpZRedYcflIOLafaa28XdsH/ynlcc1uPVDZxQIR0K25+cICCmoqCe5mGhZOfeYSUh5yJcJyrkZWWpaR8doJ2o4NYq62lAAACH5BAkBAAEALAAAAAAoACgAAAKVDI4Yy22ZnINRNqosw0Bv7i1gyHUkFj7oSaWlu3ovC8GxNso5fluz3qLVhBVeT/Lz7ZTHyxL5dDalQWPVOsQWtRnuwXaFTj9jVVh8pma9JjZ4zYSj5ZOyma7uuolffh+IR5aW97cHuBUXKGKXlKjn+DiHWMcYJah4N0lYCMlJOXipGRr5qdgoSTrqWSq6WFl2ypoaUAAAIfkECQEAAQAsAAAAACgAKAAAApaEb6HLgd/iO7FNWtcFWe+ufODGjRfoiJ2akShbueb0wtI50zm02pbvwfWEMWBQ1zKGlLIhskiEPm9R6vRXxV4ZzWT2yHOGpWMyorblKlNp8HmHEb/lCXjcW7bmtXP8Xt229OVWR1fod2eWqNfHuMjXCPkIGNileOiImVmCOEmoSfn3yXlJWmoHGhqp6ilYuWYpmTqKUgAAIfkECQEAAQAsAAAAACgAKAAAApiEH6kb58biQ3FNWtMFWW3eNVcojuFGfqnZqSebuS06w5V80/X02pKe8zFwP6EFWOT1lDFk8rGERh1TTNOocQ61Hm4Xm2VexUHpzjymViHrFbiELsefVrn6XKfnt2Q9G/+Xdie499XHd2g4h7ioOGhXGJboGAnXSBnoBwKYyfioubZJ2Hn0RuRZaflZOil56Zp6iioKSXpUAAAh+QQJAQABACwAAAAAKAAoAAACkoQRqRvnxuI7kU1a1UU5bd5tnSeOZXhmn5lWK3qNTWvRdQxP8qvaC+/yaYQzXO7BMvaUEmJRd3TsiMAgswmNYrSgZdYrTX6tSHGZO73ezuAw2uxuQ+BbeZfMxsexY35+/Qe4J1inV0g4x3WHuMhIl2jXOKT2Q+VU5fgoSUI52VfZyfkJGkha6jmY+aaYdirq+lQAACH5BAkBAAEALAAAAAAoACgAAAKWBIKpYe0L3YNKToqswUlvznigd4wiR4KhZrKt9Upqip61i9E3vMvxRdHlbEFiEXfk9YARYxOZZD6VQ2pUunBmtRXo1Lf8hMVVcNl8JafV38aM2/Fu5V16Bn63r6xt97j09+MXSFi4BniGFae3hzbH9+hYBzkpuUh5aZmHuanZOZgIuvbGiNeomCnaxxap2upaCZsq+1kAACH5BAkBAAEALAAAAAAoACgAAAKXjI8By5zf4kOxTVrXNVlv1X0d8IGZGKLnNpYtm8Lr9cqVeuOSvfOW79D9aDHizNhDJidFZhNydEahOaDH6nomtJjp1tutKoNWkvA6JqfRVLHU/QUfau9l2x7G54d1fl995xcIGAdXqMfBNadoYrhH+Mg2KBlpVpbluCiXmMnZ2Sh4GBqJ+ckIOqqJ6LmKSllZmsoq6wpQAAAh+QQJAQABACwAAAAAKAAoAAAClYx/oLvoxuJDkU1a1YUZbJ59nSd2ZXhWqbRa2/gF8Gu2DY3iqs7yrq+xBYEkYvFSM8aSSObE+ZgRl1BHFZNr7pRCavZ5BW2142hY3AN/zWtsmf12p9XxxFl2lpLn1rseztfXZjdIWIf2s5dItwjYKBgo9yg5pHgzJXTEeGlZuenpyPmpGQoKOWkYmSpaSnqKileI2FAAACH5BAkBAAEALAAAAAAoACgAAAKVjB+gu+jG4kORTVrVhRlsnn2dJ3ZleFaptFrb+CXmO9OozeL5VfP99HvAWhpiUdcwkpBH3825AwYdU8xTqlLGhtCosArKMpvfa1mMRae9VvWZfeB2XfPkeLmm18lUcBj+p5dnN8jXZ3YIGEhYuOUn45aoCDkp16hl5IjYJvjWKcnoGQpqyPlpOhr3aElaqrq56Bq7VAAAOw=="); height: 100%; filter: alpha(opacity=25);    /* support: IE8 */ opacity: 0.25; }
        .ui-progressbar-indeterminate .ui-progressbar-value { background-image: none; }
        .ui-selectable { -ms-touch-action: none; touch-action: none; }
        .ui-selectable-helper { position: absolute; z-index: 100; border: 1px dotted black; }
        .ui-selectmenu-menu { padding: 0; margin: 0; position: absolute; top: 0; left: 0; display: none; }
        .ui-selectmenu-menu .ui-menu { overflow: auto; overflow-x: hidden; padding-bottom: 1px; }
        .ui-selectmenu-menu .ui-menu .ui-selectmenu-optgroup { font-size: 1em; font-weight: bold; line-height: 1.5; padding: 2px 0.4em; margin: 0.5em 0 0 0; height: auto; border: 0; }
        .ui-selectmenu-open { display: block; }
        .ui-selectmenu-text { display: block; margin-right: 20px; overflow: hidden; text-overflow: ellipsis; }
        .ui-selectmenu-button.ui-button { text-align: left; white-space: nowrap; width: 14em; }
        .ui-selectmenu-icon.ui-icon { float: right; margin-top: 0; }
        .ui-slider { position: relative; text-align: left; }
        .ui-slider .ui-slider-handle { position: absolute; z-index: 2; width: 1.2em; height: 1.2em; cursor: default; -ms-touch-action: none; touch-action: none; }
        .ui-slider .ui-slider-range { position: absolute; z-index: 1; font-size: .7em; display: block; border: 0; background-position: 0 0; }

        /* support: IE8 - See #6727 */
        .ui-slider.ui-state-disabled .ui-slider-handle, .ui-slider.ui-state-disabled .ui-slider-range { filter: inherit; }
        .ui-slider-horizontal { height: .8em; }
        .ui-slider-horizontal .ui-slider-handle { top: -.3em; margin-left: -.6em; }
        .ui-slider-horizontal .ui-slider-range { top: 0; height: 100%; }
        .ui-slider-horizontal .ui-slider-range-min { left: 0; }
        .ui-slider-horizontal .ui-slider-range-max { right: 0; }
        .ui-slider-vertical { width: .8em; height: 100px; }
        .ui-slider-vertical .ui-slider-handle { left: -.3em; margin-left: 0; margin-bottom: -.6em; }
        .ui-slider-vertical .ui-slider-range { left: 0; width: 100%; }
        .ui-slider-vertical .ui-slider-range-min { bottom: 0; }
        .ui-slider-vertical .ui-slider-range-max { top: 0; }
        .ui-sortable-handle { -ms-touch-action: none; touch-action: none; }
        .ui-spinner { position: relative; display: inline-block; overflow: hidden; padding: 0; vertical-align: middle; }
        .ui-spinner-input { border: none; background: none; color: inherit; padding: .222em 0; margin: .2em 0; vertical-align: middle; margin-left: .4em; margin-right: 2em; }
        .ui-spinner-button { width: 1.6em; height: 50%; font-size: .5em; padding: 0; margin: 0; text-align: center; position: absolute; cursor: default; display: block; overflow: hidden; right: 0; }

        /* more specificity required here to override default borders */
        .ui-spinner a.ui-spinner-button { border-top-style: none; border-bottom-style: none; border-right-style: none; }
        .ui-spinner-up { top: 0; }
        .ui-spinner-down { bottom: 0; }
        .ui-tabs { position: relative;    /* position: relative prevents IE scroll bug (element with position: relative inside container with overflow: auto appear as "fixed") */ padding: .2em; }
        .ui-tabs .ui-tabs-nav { margin: 0; padding: .2em .2em 0; }
        .ui-tabs .ui-tabs-nav li { list-style: none; float: left; position: relative; top: 0; margin: 1px .2em 0 0; border-bottom-width: 0; padding: 0; white-space: nowrap; }
        .ui-tabs .ui-tabs-nav .ui-tabs-anchor { float: left; padding: .5em 1em; text-decoration: none; }
        .ui-tabs .ui-tabs-nav li.ui-tabs-active { margin-bottom: -1px; padding-bottom: 1px; }
        .ui-tabs .ui-tabs-nav li.ui-tabs-active .ui-tabs-anchor, .ui-tabs .ui-tabs-nav li.ui-state-disabled .ui-tabs-anchor, .ui-tabs .ui-tabs-nav li.ui-tabs-loading .ui-tabs-anchor { cursor: text; }
        .ui-tabs-collapsible .ui-tabs-nav li.ui-tabs-active .ui-tabs-anchor { cursor: pointer; }
        .ui-tabs .ui-tabs-panel { display: block; border-width: 0; padding: 1em 1.4em; background: none; }
        .ui-tooltip { padding: 8px; position: absolute; z-index: 9999; max-width: 300px; }
        body .ui-tooltip { border-width: 2px; }

        /* Component containers
        ----------------------------------*/
        .ui-widget { font-family: 'Merriweather Sans', sans-serif; font-size: 1em; }
        .ui-widget .ui-widget { font-size: 1em; }
        .ui-widget input, .ui-widget select, .ui-widget textarea, .ui-widget button { font-family: Arial, Helvetica, sans-serif; font-size: 1em; }
        .ui-widget.ui-widget-content { border: 1px solid #bfc4c5; }
        .ui-widget-content { border: 1px solid #bfc4c5; background: #ffffff; color: #333333; }
        .ui-widget-content a { color: #333333; }
        .ui-widget-header { border: 1px solid #eeeeee; background: #eeeeee; color: #121113; font-weight: bold; }
        .ui-widget-header a { color: #333333; }

        /* Interaction states
        ----------------------------------*/
        .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default, .ui-button,/* We use html here because we need a greater specificity to make sure disabled
        works properly when clicked or hovered */

        html .ui-button.ui-state-disabled:hover, html .ui-button.ui-state-disabled:active { border: 1px solid #eeeeee; background: #eee; font-weight: normal; color: #121113; font-weight: 400; }
        .ui-state-default a, .ui-state-default a:link, .ui-state-default a:visited, a.ui-button, a:link.ui-button, a:visited.ui-button, .ui-button { color: #3d0f82; text-decoration: none; }
        .ui-state-hover, .ui-widget-content .ui-state-hover, .ui-widget-header .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus, .ui-widget-header .ui-state-focus, .ui-button:hover, .ui-button:focus { border: 1px solid #3d0f82; background: #3d0f82; font-weight: normal; color: #fff; }
        .ui-state-hover a, .ui-state-hover a:hover, .ui-state-hover a:link, .ui-state-hover a:visited, .ui-state-focus a, .ui-state-focus a:hover, .ui-state-focus a:link, .ui-state-focus a:visited, a.ui-button:hover, a.ui-button:focus { border: 1px solid #3d0f82; background: #3d0f82; font-weight: normal; color: #fff; }
        .ui-visual-focus { box-shadow: 0 0 3px 1px rgb(94, 158, 214); }
        .ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active, a.ui-button:active, .ui-button:active, .ui-button.ui-state-active:hover { border: 1px solid #3d0f82; background: #3d0f82; font-weight: normal; color: #ffffff; }
        .ui-icon-background, .ui-state-active .ui-icon-background { border: #003eff; background-color: #ffffff; }
        .ui-state-active a, .ui-state-active a:link, .ui-state-active a:visited { color: #ffffff; text-decoration: none; }

        /* Interaction Cues
        ----------------------------------*/
        .ui-state-highlight, .ui-widget-content .ui-state-highlight, .ui-widget-header .ui-state-highlight { border: 1px solid #3d0f82; background: #3d0f82; font-weight: normal; color: #fff; }
        .ui-state-checked { border: 1px solid #dad55e; background: #fffa90; }
        .ui-state-highlight a, .ui-widget-content .ui-state-highlight a, .ui-widget-header .ui-state-highlight a { color: #777620; }
        .ui-state-error, .ui-widget-content .ui-state-error, .ui-widget-header .ui-state-error { border: 1px solid #f1a899; background: #fddfdf; color: #5f3f3f; }
        .ui-state-error a, .ui-widget-content .ui-state-error a, .ui-widget-header .ui-state-error a { color: #5f3f3f; }
        .ui-state-error-text, .ui-widget-content .ui-state-error-text, .ui-widget-header .ui-state-error-text { color: #5f3f3f; }
        .ui-priority-primary, .ui-widget-content .ui-priority-primary, .ui-widget-header .ui-priority-primary { font-weight: bold; }
        .ui-priority-secondary, .ui-widget-content .ui-priority-secondary, .ui-widget-header .ui-priority-secondary { opacity: .7; filter: Alpha(Opacity=70);    /* support: IE8 */ font-weight: normal; }
        .ui-state-disabled, .ui-widget-content .ui-state-disabled, .ui-widget-header .ui-state-disabled { opacity: .35; filter: Alpha(Opacity=35);    /* support: IE8 */ background-image: none; }
        .ui-state-disabled .ui-icon { filter: Alpha(Opacity=35);    /* support: IE8 - See #6059 */ }

        /* Icons
        ----------------------------------*/

        /* states and images */

        .ui-icon { width: 16px; height: 16px; }
        .ui-icon, .ui-widget-content .ui-icon { background-image: url("images/ui-icons_444444_256x240.png"); }
        .ui-widget-header .ui-icon { background-image: url("../images/ui-icons_444444_256x240.png "); }
        .ui-state-hover .ui-icon, .ui-state-focus .ui-icon, .ui-button:hover .ui-icon, .ui-button:focus .ui-icon { background-image: url("../images/ui-icons_555555_256x240.png"); }
        .ui-state-active .ui-icon, .ui-button:active .ui-icon { background-image: url("images/ui-icons_ffffff_256x240.png"); }
        .ui-state-highlight .ui-icon, .ui-button .ui-state-highlight.ui-icon { background-image: url("images/ui-icons_777620_256x240.png"); }
        .ui-state-error .ui-icon, .ui-state-error-text .ui-icon { background-image: url("images/ui-icons_cc0000_256x240.png"); }
        .ui-button .ui-icon { background-image: url("images/ui-icons_777777_256x240.png"); }

        /* positioning */
        .ui-icon-blank { background-position: 16px 16px; }
        .ui-icon-caret-1-n { background-position: 0 0; }
        .ui-icon-caret-1-ne { background-position: -16px 0; }
        .ui-icon-caret-1-e { background-position: -32px 0; }
        .ui-icon-caret-1-se { background-position: -48px 0; }
        .ui-icon-caret-1-s { background-position: -65px 0; }
        .ui-icon-caret-1-sw { background-position: -80px 0; }
        .ui-icon-caret-1-w { background-position: -96px 0; }
        .ui-icon-caret-1-nw { background-position: -112px 0; }
        .ui-icon-caret-2-n-s { background-position: -128px 0; }
        .ui-icon-caret-2-e-w { background-position: -144px 0; }
        .ui-icon-triangle-1-n { background-position: 0 -16px; }
        .ui-icon-triangle-1-ne { background-position: -16px -16px; }
        .ui-icon-triangle-1-e { background-position: -32px -16px; }
        .ui-icon-triangle-1-se { background-position: -48px -16px; }
        .ui-icon-triangle-1-s { background-position: -65px -16px; }
        .ui-icon-triangle-1-sw { background-position: -80px -16px; }
        .ui-icon-triangle-1-w { background-position: -96px -16px; }
        .ui-icon-triangle-1-nw { background-position: -112px -16px; }
        .ui-icon-triangle-2-n-s { background-position: -128px -16px; }
        .ui-icon-triangle-2-e-w { background-position: -144px -16px; }
        .ui-icon-arrow-1-n { background-position: 0 -32px; }
        .ui-icon-arrow-1-ne { background-position: -16px -32px; }
        .ui-icon-arrow-1-e { background-position: -32px -32px; }
        .ui-icon-arrow-1-se { background-position: -48px -32px; }
        .ui-icon-arrow-1-s { background-position: -65px -32px; }
        .ui-icon-arrow-1-sw { background-position: -80px -32px; }
        .ui-icon-arrow-1-w { background-position: -96px -32px; }
        .ui-icon-arrow-1-nw { background-position: -112px -32px; }
        .ui-icon-arrow-2-n-s { background-position: -128px -32px; }
        .ui-icon-arrow-2-ne-sw { background-position: -144px -32px; }
        .ui-icon-arrow-2-e-w { background-position: -160px -32px; }
        .ui-icon-arrow-2-se-nw { background-position: -176px -32px; }
        .ui-icon-arrowstop-1-n { background-position: -192px -32px; }
        .ui-icon-arrowstop-1-e { background-position: -208px -32px; }
        .ui-icon-arrowstop-1-s { background-position: -224px -32px; }
        .ui-icon-arrowstop-1-w { background-position: -240px -32px; }
        .ui-icon-arrowthick-1-n { background-position: 1px -48px; }
        .ui-icon-arrowthick-1-ne { background-position: -16px -48px; }
        .ui-icon-arrowthick-1-e { background-position: -32px -48px; }
        .ui-icon-arrowthick-1-se { background-position: -48px -48px; }
        .ui-icon-arrowthick-1-s { background-position: -64px -48px; }
        .ui-icon-arrowthick-1-sw { background-position: -80px -48px; }
        .ui-icon-arrowthick-1-w { background-position: -96px -48px; }
        .ui-icon-arrowthick-1-nw { background-position: -112px -48px; }
        .ui-icon-arrowthick-2-n-s { background-position: -128px -48px; }
        .ui-icon-arrowthick-2-ne-sw { background-position: -144px -48px; }
        .ui-icon-arrowthick-2-e-w { background-position: -160px -48px; }
        .ui-icon-arrowthick-2-se-nw { background-position: -176px -48px; }
        .ui-icon-arrowthickstop-1-n { background-position: -192px -48px; }
        .ui-icon-arrowthickstop-1-e { background-position: -208px -48px; }
        .ui-icon-arrowthickstop-1-s { background-position: -224px -48px; }
        .ui-icon-arrowthickstop-1-w { background-position: -240px -48px; }
        .ui-icon-arrowreturnthick-1-w { background-position: 0 -64px; }
        .ui-icon-arrowreturnthick-1-n { background-position: -16px -64px; }
        .ui-icon-arrowreturnthick-1-e { background-position: -32px -64px; }
        .ui-icon-arrowreturnthick-1-s { background-position: -48px -64px; }
        .ui-icon-arrowreturn-1-w { background-position: -64px -64px; }
        .ui-icon-arrowreturn-1-n { background-position: -80px -64px; }
        .ui-icon-arrowreturn-1-e { background-position: -96px -64px; }
        .ui-icon-arrowreturn-1-s { background-position: -112px -64px; }
        .ui-icon-arrowrefresh-1-w { background-position: -128px -64px; }
        .ui-icon-arrowrefresh-1-n { background-position: -144px -64px; }
        .ui-icon-arrowrefresh-1-e { background-position: -160px -64px; }
        .ui-icon-arrowrefresh-1-s { background-position: -176px -64px; }
        .ui-icon-arrow-4 { background-position: 0 -80px; }
        .ui-icon-arrow-4-diag { background-position: -16px -80px; }
        .ui-icon-extlink { background-position: -32px -80px; }
        .ui-icon-newwin { background-position: -48px -80px; }
        .ui-icon-refresh { background-position: -64px -80px; }
        .ui-icon-shuffle { background-position: -80px -80px; }
        .ui-icon-transfer-e-w { background-position: -96px -80px; }
        .ui-icon-transferthick-e-w { background-position: -112px -80px; }
        .ui-icon-folder-collapsed { background-position: 0 -96px; }
        .ui-icon-folder-open { background-position: -16px -96px; }
        .ui-icon-document { background-position: -32px -96px; }
        .ui-icon-document-b { background-position: -48px -96px; }
        .ui-icon-note { background-position: -64px -96px; }
        .ui-icon-mail-closed { background-position: -80px -96px; }
        .ui-icon-mail-open { background-position: -96px -96px; }
        .ui-icon-suitcase { background-position: -112px -96px; }
        .ui-icon-comment { background-position: -128px -96px; }
        .ui-icon-person { background-position: -144px -96px; }
        .ui-icon-print { background-position: -160px -96px; }
        .ui-icon-trash { background-position: -176px -96px; }
        .ui-icon-locked { background-position: -192px -96px; }
        .ui-icon-unlocked { background-position: -208px -96px; }
        .ui-icon-bookmark { background-position: -224px -96px; }
        .ui-icon-tag { background-position: -240px -96px; }
        .ui-icon-home { background-position: 0 -112px; }
        .ui-icon-flag { background-position: -16px -112px; }
        .ui-icon-calendar { background-position: -32px -112px; }
        .ui-icon-cart { background-position: -48px -112px; }
        .ui-icon-pencil { background-position: -64px -112px; }
        .ui-icon-clock { background-position: -80px -112px; }
        .ui-icon-disk { background-position: -96px -112px; }
        .ui-icon-calculator { background-position: -112px -112px; }
        .ui-icon-zoomin { background-position: -128px -112px; }
        .ui-icon-zoomout { background-position: -144px -112px; }
        .ui-icon-search { background-position: -160px -112px; }
        .ui-icon-wrench { background-position: -176px -112px; }
        .ui-icon-gear { background-position: -192px -112px; }
        .ui-icon-heart { background-position: -208px -112px; }
        .ui-icon-star { background-position: -224px -112px; }
        .ui-icon-link { background-position: -240px -112px; }
        .ui-icon-cancel { background-position: 0 -128px; }
        .ui-icon-plus { background-position: -16px -128px; }
        .ui-icon-plusthick { background-position: -32px -128px; }
        .ui-icon-minus { background-position: -48px -128px; }
        .ui-icon-minusthick { background-position: -64px -128px; }
        .ui-icon-close { background-position: -80px -128px; }
        .ui-icon-closethick { background-position: -96px -128px; }
        .ui-icon-key { background-position: -112px -128px; }
        .ui-icon-lightbulb { background-position: -128px -128px; }
        .ui-icon-scissors { background-position: -144px -128px; }
        .ui-icon-clipboard { background-position: -160px -128px; }
        .ui-icon-copy { background-position: -176px -128px; }
        .ui-icon-contact { background-position: -192px -128px; }
        .ui-icon-image { background-position: -208px -128px; }
        .ui-icon-video { background-position: -224px -128px; }
        .ui-icon-script { background-position: -240px -128px; }
        .ui-icon-alert { background-position: 0 -144px; }
        .ui-icon-info { background-position: -16px -144px; }
        .ui-icon-notice { background-position: -32px -144px; }
        .ui-icon-help { background-position: -48px -144px; }
        .ui-icon-check { background-position: -64px -144px; }
        .ui-icon-bullet { background-position: -80px -144px; }
        .ui-icon-radio-on { background-position: -96px -144px; }
        .ui-icon-radio-off { background-position: -112px -144px; }
        .ui-icon-pin-w { background-position: -128px -144px; }
        .ui-icon-pin-s { background-position: -144px -144px; }
        .ui-icon-play { background-position: 0 -160px; }
        .ui-icon-pause { background-position: -16px -160px; }
        .ui-icon-seek-next { background-position: -32px -160px; }
        .ui-icon-seek-prev { background-position: -48px -160px; }
        .ui-icon-seek-end { background-position: -64px -160px; }
        .ui-icon-seek-start { background-position: -80px -160px; }

        /* ui-icon-seek-first is deprecated, use ui-icon-seek-start instead */
        .ui-icon-seek-first { background-position: -80px -160px; }
        .ui-icon-stop { background-position: -96px -160px; }
        .ui-icon-eject { background-position: -112px -160px; }
        .ui-icon-volume-off { background-position: -128px -160px; }
        .ui-icon-volume-on { background-position: -144px -160px; }
        .ui-icon-power { background-position: 0 -176px; }
        .ui-icon-signal-diag { background-position: -16px -176px; }
        .ui-icon-signal { background-position: -32px -176px; }
        .ui-icon-battery-0 { background-position: -48px -176px; }
        .ui-icon-battery-1 { background-position: -64px -176px; }
        .ui-icon-battery-2 { background-position: -80px -176px; }
        .ui-icon-battery-3 { background-position: -96px -176px; }
        .ui-icon-circle-plus { background-position: 0 -192px; }
        .ui-icon-circle-minus { background-position: -16px -192px; }
        .ui-icon-circle-close { background-position: -32px -192px; }
        .ui-icon-circle-triangle-e { background-position: -48px -192px; }
        .ui-icon-circle-triangle-s { background-position: -64px -192px; }
        .ui-icon-circle-triangle-w { background-position: -80px -192px; }
        .ui-icon-circle-triangle-n { background-position: -96px -192px; }
        .ui-icon-circle-arrow-e { background-position: -112px -192px; }
        .ui-icon-circle-arrow-s { background-position: -128px -192px; }
        .ui-icon-circle-arrow-w { background-position: -144px -192px; }
        .ui-icon-circle-arrow-n { background-position: -160px -192px; }
        .ui-icon-circle-zoomin { background-position: -176px -192px; }
        .ui-icon-circle-zoomout { background-position: -192px -192px; }
        .ui-icon-circle-check { background-position: -208px -192px; }
        .ui-icon-circlesmall-plus { background-position: 0 -208px; }
        .ui-icon-circlesmall-minus { background-position: -16px -208px; }
        .ui-icon-circlesmall-close { background-position: -32px -208px; }
        .ui-icon-squaresmall-plus { background-position: -48px -208px; }
        .ui-icon-squaresmall-minus { background-position: -64px -208px; }
        .ui-icon-squaresmall-close { background-position: -80px -208px; }
        .ui-icon-grip-dotted-vertical { background-position: 0 -224px; }
        .ui-icon-grip-dotted-horizontal { background-position: -16px -224px; }
        .ui-icon-grip-solid-vertical { background-position: -32px -224px; }
        .ui-icon-grip-solid-horizontal { background-position: -48px -224px; }
        .ui-icon-gripsmall-diagonal-se { background-position: -64px -224px; }
        .ui-icon-grip-diagonal-se { background-position: -80px -224px; }

        /* Misc visuals
        ----------------------------------*/

        /* Corner radius */

        .ui-corner-all, .ui-corner-top, .ui-corner-left, .ui-corner-tl { border-top-left-radius: 3px; }
        .ui-corner-all, .ui-corner-top, .ui-corner-right, .ui-corner-tr { border-top-right-radius: 3px; }
        .ui-corner-all, .ui-corner-bottom, .ui-corner-left, .ui-corner-bl { border-bottom-left-radius: 3px; }
        .ui-corner-all, .ui-corner-bottom, .ui-corner-right, .ui-corner-br { border-bottom-right-radius: 3px; }

        /* Overlays */
        .ui-widget-overlay { background: #aaaaaa; opacity: .3; filter: Alpha(Opacity=30);    /* support: IE8 */ }
        .ui-widget-shadow { -webkit-box-shadow: 0px 0px 5px #666666; box-shadow: 0px 0px 5px #666666; }


    </style>



  </head>
  <body>
    <div id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
          <div class="container">
              <a class="navbar-brand js-scroll-trigger" href="index.php"><i class="fas fa-plane"></i> Travel Tour</a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  Menu
                  <i class="fas fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php#search"><i class="fas fa-search"></i></a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php#projects">Tour Contents</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php#signup">About Us</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="contact_us.php">Contact Us</a></li>
                    <?php if(empty($_SESSION)){ ?>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login.php">Confirm/Log In</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="register.php"><i class="fas fa-user-edit"></i> Register</a></li>
                    <?php
                    }else{
                     echo '<li class="nav-item"><a class="nav-link js-scroll-trigger" href="confirm_member.php">Member info</a></li>';
                     echo '<li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">Logout</a></li>';
                    } ?>
                  </ul>
              </div>
          </div>
      </nav>
    </div>
     <!-- Masthead-->
     <!-- <header class="masthead">
        <div class="container d-flex h-100 align-items-center"> -->

            <div class="content">
            <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb30 mt-2 text-center">
                            <h2 class="text-white"><i class="fas fa-user-edit"></i> Confirm Member Information</h2>
                        </div>
                    </div>
                <div class="row">     
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb30">
                        <div class="tour-booking-form bg-light">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <h4 class="tour-form-title"><i class="fas fa-edit"></i> Member Information</h4>
                                    </div>
                                <form action="travel-action.php" method="post" class="w-100">
                                    <div class="d-flex">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="control-label" for="name">First Name</label>
                                                <p><?php echo $_POST['first']; ?></p>
                                                <input id="fname" name="first" type="hidden" value="<?php echo $_POST['first']; ?>" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="control-label" for="name">Last Name</label>
                                                <p><?php echo $_POST['last']; ?></p>
                                                <input id="lname" name="last" type="hidden" value="<?php echo $_POST['last']; ?>" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="control-label" for="bday">Birthday</label>
                                                <p><?php echo $_POST['bday']; ?></p>
                                                <input id="bday" name="bday" type="hidden" value="<?php echo $_POST['bday']; ?>" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="control-label" for="phone"> Phone Number</label>
                                                <p><?php echo $_POST['phonum']; ?></p>
                                                <input id="phone" name="phonum" type="hidden" value="<?php echo $_POST['phonum']; ?>" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="control-label" for="email"> Email</label>
                                                <p><?php echo $_POST['mail']; ?></p>
                                                <input id="email" name="mail" type="hidden" value="<?php echo $_POST['mail']; ?>" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="control-label" for="password"> Password</label>
                                                <p><?php echo $_POST['psw']; ?></p>
                                                <input id="password" name="psw" type="hidden" value="<?php echo $_POST['psw']; ?>" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="city"> Address</label>
                                            <p><?php echo $_POST['city']; ?></p>
                                            <input id="city" name="city" type="hidden" value="<?php echo $_POST['city']; ?>" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="control-label" for="credit_num"> Credit Number</label>
                                                <p><?php echo $_POST['crenum']; ?></p>
                                                <input id="credit_num" name="crenum" type="hidden" value="<?php echo $_POST['crenum']; ?>" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="control-label" for="passport_no"> Passport No</label>
                                                <p><?php echo $_POST['passno']; ?></p>
                                                <input id="passport_no" name="passno" type="hidden" value="<?php echo $_POST['passno']; ?>" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="textarea">Describe Your Travel Requirements</label>
                                            <textarea class="form-control" id="textarea" name="textarea" rows="4" placeholder="Write Your Requirements"></textarea>
                                        </div>
                                    </div> -->
                                    <div class="d-flex">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mt-5 mb-5">
                                            <button type="submit" name="" class="btn btn-light btn-block">Back to Register Form</button>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mt-5 mb-5">
                                            <button type="submit" name="register_btn" class="btn btn-primary btn-block">Modify your Info</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>              
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  text-center mt20">
                            © Japan Heritage
                    </div>
                </div>
            </div>
        </div>
      <!-- </div>
    </header> -->
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>