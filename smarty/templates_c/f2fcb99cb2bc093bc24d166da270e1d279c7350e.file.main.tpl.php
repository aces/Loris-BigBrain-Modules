<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-06-12 14:20:03
         compiled from "/var/www/loris/project/templates/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1009988486596cf6e800b705-31222377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2fcb99cb2bc093bc24d166da270e1d279c7350e' => 
    array (
      0 => '/var/www/loris/project/templates/main.tpl',
      1 => 1623521910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1009988486596cf6e800b705-31222377',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_596cf6e8472b15_31897585',
  'variables' => 
  array (
    'dynamictabs' => 0,
    'css' => 0,
    'test_name_css' => 0,
    'study_title' => 0,
    'test_name_js' => 0,
    'test_name' => 0,
    'candID' => 0,
    'sessionID' => 0,
    'commentID' => 0,
    'subtest' => 0,
    'hasHelpEditPermission' => 0,
    'PopUpFeedbackBVL' => 0,
    'user' => 0,
    'control_panel' => 0,
    'sandbox' => 0,
    'tabs' => 0,
    'tab' => 0,
    'mySubtab' => 0,
    'releaseDepend' => 0,
    'release' => 0,
    'console' => 0,
    'crumbs' => 0,
    'error_message' => 0,
    'mantis_url' => 0,
    'candidate' => 0,
    'name' => 0,
    'SupplementalSessionStatuses' => 0,
    'timePoint' => 0,
    'value' => 0,
    'status' => 0,
    'workspace' => 0,
    'links' => 0,
    'link' => 0,
    'currentyear' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596cf6e8472b15_31897585')) {function content_596cf6e8472b15_31897585($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="height:100%; background:transparent">
    <?php if ($_smarty_tpl->tpl_vars['dynamictabs']->value!="dynamictabs") {?>
    <head>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
" type="text/css" />
        <link rel="shortcut icon" href="images/mni_icon.ico" type="image/ico" />
        <?php echo '<script'; ?>
 src="js/jquery/jquery-1.11.0.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery/jquery-ui-1.10.4.custom.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.dynamictable.js"><?php echo '</script'; ?>
>
        <!-- Custom JavaScript for the Menu Toggle -->
   
        <link type="text/css" href="css/loris-jquery/jquery-ui-1.10.4.custom.min.css" rel="Stylesheet" />

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/custom-css.css">
        <!-- <link rel="stylesheet" href="bootstrap-3.1.1/css/magic-bootstrap.css"> -->

        <!-- Module-specific CSS -->
        <?php if ($_smarty_tpl->tpl_vars['test_name_css']->value) {?>
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['test_name_css']->value;?>
" type="text/css" />
        <?php }?>

        <!-- Latest compiled and minified JavaScript -->
        <?php echo '<script'; ?>
 src="bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <title>
            <?php echo $_smarty_tpl->tpl_vars['study_title']->value;?>

        </title>

        <?php if ($_smarty_tpl->tpl_vars['test_name_js']->value) {?>
            <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['test_name_js']->value;?>
"><?php echo '</script'; ?>
>
        <?php }?>

        
            <?php echo '<script'; ?>
 language="javascript" type="text/javascript"> 
                
                var FeedbackButtonBoolean;

                function FeedbackButtonClicked() {
                    document.cookie = "FeedbackButtonBoolean = true";
                    
                    var thisUrl = "feedback_bvl_popup.php?test_name=<?php echo $_smarty_tpl->tpl_vars['test_name']->value;?>
&candID=<?php echo $_smarty_tpl->tpl_vars['candID']->value;?>
&sessionID=<?php echo $_smarty_tpl->tpl_vars['sessionID']->value;?>
&commentID=<?php echo $_smarty_tpl->tpl_vars['commentID']->value;?>
";
                    
                    w = window.open(thisUrl, "MyWindow", "width=800, height=600, resizable=yes, scrollbars=yes, status=no, toolbar=no, location=no, menubar=no");
                    w.focus();
                }

                function feedback_bvl_popup(features) { 
                    if (getCookie('FeedbackButtonBoolean')) {
                    
                    var myUrl = "feedback_bvl_popup.php?test_name=<?php echo $_smarty_tpl->tpl_vars['test_name']->value;?>
&candID=<?php echo $_smarty_tpl->tpl_vars['candID']->value;?>
&sessionID=<?php echo $_smarty_tpl->tpl_vars['sessionID']->value;?>
&commentID=<?php echo $_smarty_tpl->tpl_vars['commentID']->value;?>
";
                    
                    w = window.open(myUrl, "MyWindow", "width=800, height=600, resizable=yes, scrollbars=yes, status=no, toolbar=no, location=no, menubar=no");
                    w.focus();
                    }
                }

                function getCookie(c_name) {
                    "use strict";
                    var cookies = document.cookie.split("; "),
                        i,
                        cookie;
                    for (i = 0; i < cookies.length; i += 1) {
                        cookie = cookies[i].split("=");
                        if (cookie[0] === c_name) {
                            return cookie[1];
                        }
                    }
                    return undefined;
                }
                $(document).ready(function(){
                    $("#menu-toggle").click(function(e) {
                        e.preventDefault();
                        $(".wrapper").toggleClass("active");
                    });
                    $(".dropdown").hover(function(){
                        $(this).toggleClass('open');
                    });
                    $(".help-button").click(function(e) {
                        var getParams = {};
                        
                        <?php if ($_smarty_tpl->tpl_vars['test_name']->value) {?>
                            getParams.test_name = "<?php echo strtr($_smarty_tpl->tpl_vars['test_name']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['subtest']->value) {?>
                            getParams.subtest = "<?php echo strtr($_smarty_tpl->tpl_vars['subtest']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";
                        <?php }?>
                        
                        document.cookie = 'LastUrl=; expires=Thu, 01-Jan-70 00:00:01 GMT;';
                        $.get("AjaxHelper.php?Module=help_editor&script=help.php", getParams, function (content) {
                                var div = document.createElement("div"),
                                    pre = document.createElement("pre"),
                                    btn = document.createElement("BUTTON"),
                                    edit = document.createElement("BUTTON"),
                                    text = document.createTextNode("Edit"),
                                    button = document.createTextNode("Close");

                                pre.innerHTML = "<h3>" + content.topic + "</h3>";
                                pre.innerHTML += content.content;
                                pre.innerHTML =  pre.innerHTML + "<hr>Last updated: " + content.updated ;
                                btn.appendChild(button);
                                btn.className="btn btn-default";
                                btn.setAttribute("id","helpclose");
                                edit.appendChild(text);
                                edit.className="btn btn-default";
                                edit.setAttribute("id", "helpedit");
                                div.appendChild(pre);
                                div.appendChild(btn);
                                
                                <?php if ($_smarty_tpl->tpl_vars['hasHelpEditPermission']->value) {?>
                                    div.appendChild(edit);
                                <?php }?>
                                
                                document.getElementById('page').appendChild(div);
                                div.setAttribute("class", "help-content");
                                btn.addEventListener("click", function(e) {
                                    $(div).hide();      
                                    e.preventDefault(); 
                                }) ;
                                edit.addEventListener("click", function(e) {
                                    document.cookie = "LastUrl = " + document.location.toString();
                                    window.open("main.php?test_name=help_editor&subtest=edit_help_content&section="
                                    +getParams.test_name+"&subsection="+getParams.subtest, "_self");      
                                    e.preventDefault(); 
                                }) ;
                        }, "json");
                        e.preventDefault();
                    });

                    $(".dynamictable").DynamicTable();
                });

                
            <?php echo '</script'; ?>
>
        
        <link type="text/css" href="css/jqueryslidemenu.css" rel="Stylesheet" />
        <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery/jqueryslidemenu.js"><?php echo '</script'; ?>
>
        <link href="css/simple-sidebar.css" rel="stylesheet">

         <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    </head>
    <?php }?>
    <body <?php if ($_smarty_tpl->tpl_vars['PopUpFeedbackBVL']->value&&($_smarty_tpl->tpl_vars['user']->value['permissions']['superuser']==true||$_smarty_tpl->tpl_vars['user']->value['permissions']['access_all_profiles']==true||$_smarty_tpl->tpl_vars['user']->value['user_from_study_site']==true)) {?>
                    onload="feedback_bvl_popup();" 
            <?php }?>
    >
    <div id="wrap">
        <?php if ($_smarty_tpl->tpl_vars['dynamictabs']->value!="dynamictabs") {?>
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
               <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" 
                        data-target="#example-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="glyphicon glyphicon-chevron-down" style="color:white"></span>
                    </button>
                    <button type="button" class="navbar-toggle help-button">
                        <span class="sr-only">Toggle navigation</span>
                        <img width=17 src=images/help.gif>
                    </button>

                    <!-- toggle sidebar in mobile view -->
                    <?php if ($_smarty_tpl->tpl_vars['control_panel']->value) {?>
                        <a id="menu-toggle" href="#" class="navbar-brand">
                            <span class="glyphicon glyphicon-th-list"></span>
                        </a>
                    <?php }?>

                    <a class="navbar-brand" href="main.php">LORIS<?php if ($_smarty_tpl->tpl_vars['sandbox']->value) {?>: DEV<?php }?></a>
               </div>
               <div class="collapse navbar-collapse" id="example-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['tab']->value['Visible']==1&&$_smarty_tpl->tpl_vars['tab']->value['subtabs']) {?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle">
                                        <?php echo $_smarty_tpl->tpl_vars['tab']->value['Label'];?>
 <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php  $_smarty_tpl->tpl_vars['mySubtab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mySubtab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tab']->value['subtabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mySubtab']->key => $_smarty_tpl->tpl_vars['mySubtab']->value) {
$_smarty_tpl->tpl_vars['mySubtab']->_loop = true;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['mySubtab']->value['Visible']==1) {?>
                                            <li>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['mySubtab']->value['Link'];?>
">
                                                            <?php echo $_smarty_tpl->tpl_vars['mySubtab']->value['Label'];?>

                                                        </a>
                                            </li>
                                            <?php }?>
                                        <?php } ?>
                                    </ul>
                                </li> 
                            <?php }?>
                        <?php } ?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php if ($_smarty_tpl->tpl_vars['releaseDepend']->value==true) {?>
			<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-right:25px;">
                                Release: <?php echo $_smarty_tpl->tpl_vars['release']->value;?>

                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="main.php?test_name=<?php echo $_smarty_tpl->tpl_vars['test_name']->value;?>
&release=2015">
                                        2015
                                    </a>
                                </li>
                                <li>
                                    <a href="main.php?test_name=<?php echo $_smarty_tpl->tpl_vars['test_name']->value;?>
&release=2013">
                                        2013
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <?php }?>
                        <li class="hidden-xs hidden-sm">
<!---
                            <a href="#" class="navbar-brand pull-right help-button">
                                <img width=17 src=images/help.gif>
                            </a>
--->
                        </li>
                        <li>
<!---
                            <p class="navbar-text">
                                &nbsp;&nbsp;  Site: <?php echo $_smarty_tpl->tpl_vars['user']->value['Site'];?>
 &nbsp;
                            </p>
--->
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-right:25px;">
                                <?php echo $_smarty_tpl->tpl_vars['user']->value['Real_name'];?>
 <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
<!---
                                <li>
                                    <a href="main.php?test_name=user_accounts&subtest=my_preferences">
                                        My Preferences
                                    </a>
                                </li>
--->
                                <li>
                                    <a href="main.php?logout=true">
                                        Log Out
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
               </div>
            </nav>
        <?php }?>
        <div id="page" class="container-fluid">
            <?php if ($_smarty_tpl->tpl_vars['control_panel']->value) {?>
                <div class="wrapper">
                <!-- Sidebar -->
            
                    <div id="sidebar-wrapper" class="sidebar-div">
                        <div id="sidebar-content">
                            <?php echo $_smarty_tpl->tpl_vars['control_panel']->value;?>

                        </div>
                    </div>
            
        <!--    Want to wrap page content only when sidebar is in view
                if not then just put page content in the div #page    -->
        <div id="page-content-wrapper">
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['dynamictabs']->value=="dynamictabs") {?>
                <?php if ($_smarty_tpl->tpl_vars['console']->value) {?>
                    <div class="alert alert-warning" role="alert">
                        <h3>Console Output</h3>
                        <div>
                        <pre><?php echo $_smarty_tpl->tpl_vars['console']->value;?>
</pre>
                        </div>
                    </div>
                <?php }?>

            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['dynamictabs']->value!="dynamictabs") {?>
            
                <br><br><br>
            <div class="page-content inset">
                <?php if ($_smarty_tpl->tpl_vars['console']->value) {?>
                    <div class="alert alert-warning" role="alert">
                        <h3>Console Output</h3>
                        <div>
                        <pre><?php echo $_smarty_tpl->tpl_vars['console']->value;?>
</pre>
                        </div>
                    </div>

                <?php }?>
                <!-- <div class="panel panel-primary"> -->
                    
                    <?php if ($_smarty_tpl->tpl_vars['crumbs']->value!='') {?>
                        <div class="alert alert-info alert-sm">
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['crumb'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['name'] = 'crumb';
$_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['crumbs']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['crumb']['total']);
?>
                                <?php if ($_smarty_tpl->tpl_vars['test_name']->value=="conflicts_resolve") {?>
                                    <a href="main.php/<?php echo $_smarty_tpl->tpl_vars['crumbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['crumb']['index']]['query'];?>
" class="text-default" style="color: white">
                                        <label>Conflicts Resolver</label>
                                    </a> 
                                    <?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['crumb']['last']) {?>
                                        &gt; 
                                    <?php }?>
                                <?php } elseif ($_smarty_tpl->tpl_vars['test_name']->value=="statistics_dd_site") {?>
                                    <a href="main.php/<?php echo $_smarty_tpl->tpl_vars['crumbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['crumb']['index']]['query'];?>
" class="text-default">
                                        <label>Double Data Entry Site Statistics</label>
                                    </a> 
                                    <?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['crumb']['last']) {?>
                                        &gt; 
                                    <?php }?>
                                <?php } else { ?>
                                    <a href="main.php?<?php echo $_smarty_tpl->tpl_vars['crumbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['crumb']['index']]['query'];?>
" style="color: white">
                                        <label><?php echo $_smarty_tpl->tpl_vars['crumbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['crumb']['index']]['text'];?>
</label>
                                    </a> 
                                    <?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['crumb']['last']) {?>
                                        &gt; 
                                    <?php }?>
                                <?php }?>
                            <?php endfor; endif; ?>
                        </div>
                    <?php }?>
                        <div>
                            <?php if ($_smarty_tpl->tpl_vars['error_message']->value!='') {?>
                                <p>
                                    The following errors occured while attempting to display this page:
                                    <ul>
                                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['error'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['error']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['name'] = 'error';
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['error_message']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['error']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['error']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['error']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['error']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['error']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['error']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['total']);
?>
                                            <li>
                                                <strong>
                                                    <?php echo $_smarty_tpl->tpl_vars['error_message']->value[$_smarty_tpl->getVariable('smarty')->value['section']['error']['index']];?>

                                                </strong>
                                            </li>
                                        <?php endfor; endif; ?>
                                    </ul>

                                    If this error persists, please 
                                    <a target="mantis" href="<?php echo $_smarty_tpl->tpl_vars['mantis_url']->value;?>
">
                                        report a bug to your administrator
                                    </a>.
                                </p>
                                <p>
                                    <a href="javascript:history.back(-1)">
                                        Please click here to go back
                                    </a>.
                                </p>
                            <?php } elseif ($_smarty_tpl->tpl_vars['test_name']->value=='') {?>
                                <h1 style="align:center" class="text-primary">
                                    Welcome to the LORIS Database!
                                </h1>
                                <div style="max-width:700px">
                                    This database provides an on-line mechanism to store both MRI and behavioral data collected from various locations. Within this framework, there are several tools that will make this process as efficient and simple as possible. For more detailed information regarding any aspect of the database, please click on the Help icon at the top right. Otherwise, feel free to contact us at the DCC. We strive to make data collection almost fun.
                                </div>
                            <?php } else { ?>
                                <?php if ($_smarty_tpl->tpl_vars['candID']->value!='') {?>
                                    <!-- table with candidate profile info -->
                                    <div class="table-responsive">
                                        <table cellpadding="2" class="table table-info table-bordered" style="max-width:auto">
                                            <!-- column headings -->
                                            <thead>
                                                <tr class="info">
                                                        <th>
                                                            DOB
                                                        </th>
                                                        <?php if ($_smarty_tpl->tpl_vars['candidate']->value['EDC']!='') {?>
                                                            <th>
                                                                EDC
                                                            </th>
                                                        <?php }?>
                                                        <th>
                                                            Gender
                                                        </th>
                                                        <?php if ($_smarty_tpl->tpl_vars['candidate']->value['ProjectTitle']!='') {?>
                                                            <th>
                                                                Project
                                                            </th>
                                                        <?php }?>
                                                        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['candidate']->value['DisplayParameters']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                                                            <th>
                                                                <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

                                                            </th>
                                                        <?php } ?>
                                                        <?php if ($_smarty_tpl->tpl_vars['sessionID']->value!='') {?>
                                                            <th>
                                                                Visit Label
                                                            </th>
                                                            <th>
                                                                Visit to Site
                                                            </th>
                                                            <th>
                                                                Subproject
                                                            </th>
                                                            <th>
                                                                MR Scan Done
                                                            </th>
                                                            
                                                            <th>
                                                                Within Optimal
                                                            </th>
                                                            <th>
                                                                Within Permitted
                                                            </th>
                                                            <?php if ($_smarty_tpl->tpl_vars['SupplementalSessionStatuses']->value) {?>
                                                                <?php  $_smarty_tpl->tpl_vars['status'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['status']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['timePoint']->value['status']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['status']->key => $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['status']->key;
?>
                                                                    <th>
                                                                        <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

                                                                    </th>
                                                                <?php } ?>
                                                            <?php }?>
                                                        <?php }?>
                                                </tr>
                                            </thead>
                                            <!-- candidate data --> 
                                            <tbody>   
                                                    <tr>
                                                        <td>
                                                            <?php echo $_smarty_tpl->tpl_vars['candidate']->value['DoB'];?>

                                                        </td>
                                                        <?php if ($_smarty_tpl->tpl_vars['candidate']->value['EDC']!='') {?>
                                                            <td>
                                                                <?php echo $_smarty_tpl->tpl_vars['candidate']->value['EDC'];?>

                                                            </td>
                                                        <?php }?>
                                                        <td>
                                                            <?php echo $_smarty_tpl->tpl_vars['candidate']->value['Gender'];?>

                                                        </td>
                                                        <?php if ($_smarty_tpl->tpl_vars['candidate']->value['ProjectTitle']!='') {?>
                                                            <td>
                                                                <?php echo $_smarty_tpl->tpl_vars['candidate']->value['ProjectTitle'];?>

                                                            </td>
                                                        <?php }?>
                                                        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['candidate']->value['DisplayParameters']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                                                            <td>
                                                                <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

                                                            </td>
                                                        <?php } ?>

                                                        <?php if ($_smarty_tpl->tpl_vars['sessionID']->value!='') {?>
                                                            <!-- timepoint data -->
                                                            <td>
                                                                <?php echo $_smarty_tpl->tpl_vars['timePoint']->value['Visit_label'];?>

                                                            </td>
                                                            <td>
                                                                <?php echo $_smarty_tpl->tpl_vars['timePoint']->value['PSC'];?>

                                                            </td>
                                                            <td>
                                                                <?php echo $_smarty_tpl->tpl_vars['timePoint']->value['SubprojectTitle'];?>

                                                            </td>
                                                            <td>
                                                                <?php echo (($tmp = @$_smarty_tpl->tpl_vars['timePoint']->value['Scan_done'])===null||$tmp==='' ? "<img alt=\"Data Missing\" src=\"images/help2.gif\" width=\"12\" height=\"12\" />" : $tmp);?>

                                                            </td>
                                                            
                                                            <td>
                                                                <?php if ($_smarty_tpl->tpl_vars['timePoint']->value['WindowInfo']['Optimum']) {?>
                                                                    Yes
                                                                <?php } else { ?>
                                                                    No
                                                                <?php }?>
                                                            </td>
                                                            <td <?php if (!$_smarty_tpl->tpl_vars['timePoint']->value['WindowInfo']['Optimum']) {?>class="error"<?php }?>>
                                                                <?php if ($_smarty_tpl->tpl_vars['timePoint']->value['WindowInfo']['Permitted']) {?>
                                                                    Yes
                                                                <?php } else { ?>
                                                                    No
                                                                <?php }?>
                                                            </td>
                                                            <?php if ($_smarty_tpl->tpl_vars['SupplementalSessionStatuses']->value) {?>
                                                                <?php  $_smarty_tpl->tpl_vars['status'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['status']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['timePoint']->value['status']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['status']->key => $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->_loop = true;
?>
                                                                    <td>
                                                                        <?php echo $_smarty_tpl->tpl_vars['status']->value;?>

                                                                    </td>
                                                                <?php } ?>
                                                            <?php }?>
                                                        <?php }?>
                                                    </tr>
                                            </tbody>  
                                        </table>
                                    </div>

                                    <?php if ($_smarty_tpl->tpl_vars['sessionID']->value!='') {?>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <!-- visit statuses -->
                                                <thead>
                                                    <tr class="info">
                                                        <th nowrap="nowrap" colspan="3">
                                                            Stage
                                                        </th>
                                                        <th nowrap="nowrap" colspan="3">
                                                            Status
                                                        </th>
                                                        <th nowrap="nowrap" colspan="2">
                                                            Date
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td nowrap="nowrap" colspan="3">
                                                            Screening
                                                        </td>
                                                        <td nowrap="nowrap" colspan="3">
                                                            <?php echo $_smarty_tpl->tpl_vars['timePoint']->value['Screening'];?>

                                                        </td>
                                                        <td nowrap="nowrap" colspan="2">
                                                            <?php echo $_smarty_tpl->tpl_vars['timePoint']->value['Date_screening'];?>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td nowrap="nowrap" colspan="3">
                                                            Visit
                                                        </td>
                                                        <td nowrap="nowrap" colspan="3">
                                                            <?php echo $_smarty_tpl->tpl_vars['timePoint']->value['Visit'];?>

                                                        </td>
                                                        <td nowrap="nowrap" colspan="2">
                                                            <?php echo $_smarty_tpl->tpl_vars['timePoint']->value['Date_visit'];?>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td nowrap="nowrap" colspan="3">
                                                            Approval
                                                        </td>
                                                        <td nowrap="nowrap" colspan="3">
                                                            <?php echo $_smarty_tpl->tpl_vars['timePoint']->value['Approval'];?>

                                                        </td>
                                                        <td nowrap="nowrap" colspan="2">
                                                            <?php echo $_smarty_tpl->tpl_vars['timePoint']->value['Date_approval'];?>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    <?php }?>
                                <?php }?>
                                <div id="kgkjgkjg">
                                    <?php echo $_smarty_tpl->tpl_vars['workspace']->value;?>

                                </div>  
                            <?php }?>
                        </div>
                         
                        
                    </div>              
                
                

                   
                <!-- </div> -->
            </div>
            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['workspace']->value;?>

            <?php }?>
        </div>
        </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['dynamictabs']->value!="dynamictabs") {?>
            <?php if ($_smarty_tpl->tpl_vars['control_panel']->value) {?>
            <div id="footer" class="footer navbar-bottom wrapper">
            <?php } else { ?>
            <div id="footer" class="footer navbar-bottom">
            <?php }?>
                <div align="center" colspan="1" style="color:#808080" >
                    <a href="https://bigbrain-ftp.loris.ca/bigbrain-ftp/License.txt" class="btn btn-primary btn-small" style="color:white">Download License (txt)</a> 
                </div>
      		<div align="center" colspan="1" style="color:#808080">
                    <br>
                    Contact: <a href="mailto:info@bigbrainproject.org" style="color:#064785">
                         info@bigbrainproject.org
                    </a>
<br>
                </div>

                <center>
                    <ul id="navlist" style="margin-top: 5px; margin-bottom: 2px;">
                        <li id="active">
                            |
                        </li>
                        <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
                                <li>  
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['url'];?>
" style="color: #2FA4E7" target="<?php echo $_smarty_tpl->tpl_vars['link']->value['windowName'];?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['link']->value['label'];?>

                                    </a> 
                                    |
                                </li>
                        <?php } ?>
                    </ul>    
                </center>
                <div align="center" colspan="1" style="color:#808080" >
                    Powered by LORIS &copy; <?php echo $_smarty_tpl->tpl_vars['currentyear']->value;?>
. All rights reserved.
                </div>
      		<div align="center" colspan="1" style="color:#808080">
                    Created by <a href="http://mcin.ca/" style="color: #2FA4E7" target="_blank">
                         MCIN
                    </a>
                </div>
            </div>
        <?php }?>
    </body>
</html>
<?php }} ?>
