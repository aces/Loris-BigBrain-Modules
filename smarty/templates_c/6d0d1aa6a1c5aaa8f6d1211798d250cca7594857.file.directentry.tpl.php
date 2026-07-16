<?php /* Smarty version Smarty-3.1.21-dev, created on 2026-07-13 10:53:46
         compiled from "/var/www/loris/smarty/templates/directentry.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13550208676a54fbfa6e7951-08007949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d0d1aa6a1c5aaa8f6d1211798d250cca7594857' => 
    array (
      0 => '/var/www/loris/smarty/templates/directentry.tpl',
      1 => 1414163396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13550208676a54fbfa6e7951-08007949',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'css' => 0,
    'study_title' => 0,
    'test_name_js' => 0,
    'dynamictabs' => 0,
    'finalpage' => 0,
    'complete' => 0,
    'pageNum' => 0,
    'totalPages' => 0,
    'error_message' => 0,
    'mantis_url' => 0,
    'workspace' => 0,
    'review' => 0,
    'key' => 0,
    'prevpage' => 0,
    'nextpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6a54fbfa9b5386_99869116',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6a54fbfa9b5386_99869116')) {function content_6a54fbfa9b5386_99869116($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/usr/share/php/smarty3/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="direct.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
" type="text/css" />
<link rel="shortcut icon" href="images/mni_icon.ico" type="image/ico" />
<title><?php echo $_smarty_tpl->tpl_vars['study_title']->value;?>
</title>

<link type="text/css" href="css/jquery-ui-1.10.4.custom.css" rel="Stylesheet" />	
<?php echo '<script'; ?>
 src="js/jquery/jquery-1.11.0.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery/jquery-ui-1.10.4.custom.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/modules/direct_entry.js"><?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['test_name_js']->value) {?>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['test_name_js']->value;?>
"><?php echo '</script'; ?>
>
<?php }?>
</head>

<body>
<?php if ($_smarty_tpl->tpl_vars['dynamictabs']->value!="dynamictabs") {?>
<table border="0" cellpadding="3" cellspacing="2" width="100%" class="mainlayout">
    <tr>
        <th align="left" background="images/title_background.jpg" class="banner" colspan="2">
            <?php echo $_smarty_tpl->tpl_vars['study_title']->value;?>

        </th>
    </tr>

    <tr>
    <!-- user info table -->
         <td width="50%" colspan="2" valign="bottom" align="left" nowrap="nowrap" class="controlPanelSection">
            Date: <?php echo smarty_modifier_date_format(time(),"%B %e %Y");?>

            <?php if ($_smarty_tpl->tpl_vars['finalpage']->value||$_smarty_tpl->tpl_vars['complete']->value) {?>
            <?php } elseif ($_smarty_tpl->tpl_vars['pageNum']->value&&$_smarty_tpl->tpl_vars['totalPages']->value) {?>
            Page <?php echo $_smarty_tpl->tpl_vars['pageNum']->value;?>
 of <?php echo $_smarty_tpl->tpl_vars['totalPages']->value;?>

            <?php }?>
        </td>
    </tr>
    <tr>
        <!-- main page table tags -->
        <td width="100%" class="tabox" valign="top">

            <!-- Start workspace area -->
<!--h1 align="right"><a href="javascript:open_help_section()" ><u>Help</u></a>  </h1-->
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['error_message']->value!='') {?>
            <p>The following errors occured while attempting to display this page:

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
                <li><strong><?php echo $_smarty_tpl->tpl_vars['error_message']->value[$_smarty_tpl->getVariable('smarty')->value['section']['error']['index']];?>
</strong></li>
    <?php endfor; endif; ?>
            </ul>
            
            If this error persists, please <a target="mantis" href="<?php echo $_smarty_tpl->tpl_vars['mantis_url']->value;?>
">report a bug to your administrator</a>.</p>
            <p><a href="javascript:history.back(-1)">Please click here to go back</a>.</p>
<?php } else { ?>

        <!-- included file -->
<?php if ($_smarty_tpl->tpl_vars['finalpage']->value) {?> 
<?php echo $_smarty_tpl->tpl_vars['workspace']->value;?>

<h1 align="center">Review Page</h1>
<p>Please review the data entered below. Unanswered questions are highlighted in red. Please use the back button to go access the previous pages and enter any data that is missing.</p>
<p>Unanswered questions are highlighted in red.</p>
<?php if ($_smarty_tpl->tpl_vars['review']->value) {?>
<hr>
<br><br>
<?php echo $_smarty_tpl->tpl_vars['review']->value;?>

<?php }?>
<hr>
<form id="test_form" method="post">
<br>
<br>
<br>
<h1>Survey Comments</h1>
<br>
<br>
<table class="instrument">
    <tr>
        <td>How would you rate the ease of filling out this survey?</td>
        <td>
            <input type="radio" name="ease" value="1"> Very easy
            <input type="radio" name="ease" value="2"> Moderately easy
            <input type="radio" name="ease" value="3"> Average
            <input type="radio" name="ease" value="4"> Moderately difficult
            <input type="radio" name="ease" value="5"> Difficult
    </tr>
    <tr>
        <td>Do you have any other comments ?</td>
        <td><textarea name="comments" id="comments" rows="5" placeholder="Enter any comments about this survey here"></textarea></td>
    </tr>
    <tr>
        <td class="note" colspan="2">
            <b>Please note that once data is submitted you will not be able to modify it.</b>
        </td>
    </tr>
</table>
<input type="hidden" name="FinalPageSubmission" value="Yes">
<input type="button" onclick="location.href='survey.php?key=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
&pageNum=<?php echo $_smarty_tpl->tpl_vars['prevpage']->value;?>
'" value="Go Back">
<button id="complete" style="font-weight: bold;">
<span style="display: none" id="key"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</span>
Submit data
</button>
</form>
<?php } else { ?>
<table align="center">
<tr>
    <td>
            
        <?php echo $_smarty_tpl->tpl_vars['workspace']->value;?>

    </td>
</tr>
<?php if (($_smarty_tpl->tpl_vars['nextpage']->value||$_smarty_tpl->tpl_vars['prevpage']->value)&&!$_smarty_tpl->tpl_vars['complete']->value) {?>

<tr id="buttons">
    <td colspan="2">
    <?php if ($_smarty_tpl->tpl_vars['prevpage']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['prevpage']->value=='top') {?>
            <button id="goback">Save and Go Back</button>
        <?php } else { ?>
            <button id="goback">Save and Go Back</button>
        <?php }?>
        <span style="display: none" id="prevpage"><?php echo $_smarty_tpl->tpl_vars['prevpage']->value;?>
</span>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['nextpage']->value) {?> 
    <button id="savecontinue">
        <span style="display: none" id="nextpage"><?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
</span>
        <span style="display: none" id="key"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</span>
        Save and Continue
    </button>
    <?php } else { ?>
    <button id="finalize">
        <span style="display: none" id="key"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</span>
        Save and Finalize
    </button>
    <?php }?>
    </td>
</tr>
<?php }?> 
</table>
<?php }?>
        </td>
    </tr>
</table>
<?php }?>

</body>
</html>
<?php }} ?>
