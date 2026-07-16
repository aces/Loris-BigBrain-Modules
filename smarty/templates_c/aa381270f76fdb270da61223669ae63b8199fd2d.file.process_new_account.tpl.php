<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-08-01 14:21:18
         compiled from "/var/www/loris/smarty/templates/process_new_account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2938277785b61fa1e3fc3e6-40054901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa381270f76fdb270da61223669ae63b8199fd2d' => 
    array (
      0 => '/var/www/loris/smarty/templates/process_new_account.tpl',
      1 => 1414163396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2938277785b61fa1e3fc3e6-40054901',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'css' => 0,
    'study_logo' => 0,
    'study_title' => 0,
    'success' => 0,
    'error_message' => 0,
    'rand' => 0,
    'studylinks' => 0,
    'link' => 0,
    'currentyear' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5b61fa1e89c025_03032502',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b61fa1e89c025_03032502')) {function content_5b61fa1e89c025_03032502($_smarty_tpl) {?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
" type="text/css" />
<link rel="stylesheet" href="../bootstrap-3.1.1/css/bootstrap.css">
<!-- shortcut icon that displays on the browser window -->
<link rel="shortcut icon" href="images/mni_icon.ico" type="image/ico" />
<!-- page title -->
<title>Request LORIS Account</title>
<!--  end page header -->
</head>

<body>
<div class ="logo">

    </div>
    
    <div class="navbar navbar-default" role="navigation" style="height:90px">
        <div class="container">
            <a class="navbar-brand" href="#" style="align:center;">
                <img src="<?php echo $_smarty_tpl->tpl_vars['study_logo']->value;?>
" border="0" width="64" height="57" />
                <?php echo $_smarty_tpl->tpl_vars['study_title']->value;?>

            </a>
        </div>
    </div>
<div class="row panel panel-default col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
<div class="panel-body">
<?php if (!$_smarty_tpl->tpl_vars['success']->value) {?>
<div class="col-xs-12">
<?php if ($_smarty_tpl->tpl_vars['error_message']->value!='') {?>
            <p>The following errors have occured while submitting form :

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
<?php }?>

<div class="col-xs-12">
    <center>
    <img src="../images/LORIS_logo_141007.svg" class="img-responsive" alt="Responsive image" onerror="this.src='images/LORIS_Logo_141007.png'" align="middle" width="92%">
    </center>
    <br>
</div>
<center><h2>Request Account</h2></center>
<h3>Please fill in the form below. We will contact you once your account has been approved.</h3>

<form action="process_new_account.php" method="post" name="form1" id="form1" class="form-horizontal">
<div class="form-group">
    <label  class="col-sm-4 control-label" size="75">First Name:</label>
    <div class="col-sm-6">
        <input name="name" type="text" id="name" size="20" />
    </div>
</div>
<div class="form-group">
   <label class="col-sm-4 control-label">Last Name:</label>
    <div class="col-sm-6">
       <input name="lastname" type="text" id="lastname"/>
    </div>
</div>
<div class="form-group">
<label class="col-sm-4 control-label">Email Address: </label>
      <div class="col-sm-6">
         <input name="from" type="text" id="from"/>
     </div>
</div>
<div class="form-group">
<label class="col-sm-4 control-label">Type verification code:</label>
 <div class="col-sm-6">
<input name="verif_box" type="text" id="verif_box" />
<img src="verificationimage.php?num=<?php echo $_smarty_tpl->tpl_vars['rand']->value;?>
" alt="verification image, type it in the box" width="50" height="24" align="absbottom" /><br />
</div>
</div>
<div class="form-group">
            <div class="col-sm-offset-4 col-sm-10">
                <input name="Submit" class="btn btn-primary col-xs-4" type="submit" value="Submit"/>
            </div>
</div>
<br><br><br>
<div class="row">
                <table class="LoginFooter" align="center">
                    <tr>
                    <hr width = 70st
                    <td width="100%">
                    <ul id="navlist" style="margin-top: 5px; margin-bottom: 2px;">

                    <li id="active">|</li>
                    <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['studylinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['link']->value['windowName'];?>
"><?php echo $_smarty_tpl->tpl_vars['link']->value['label'];?>
</a> | </li>
                    <?php } ?>

                    </ul>
                    </td>
                    </tr>
                    <tr>
                    <!--td align="center" colspan="1"><br><font color="#C40A29">A WebGL-compatible browser is required for full functionality.</font></td-->
                    </tr>       
                    <tr>
                    <td align="center" colspan="1" style="color:#808080" >A WebGL-compatible browser is required for full functionality (Mozilla Firefox, Google Chrome)</td>
                    </tr>   
                    <tr>
                    <td align="center" colspan="1" style="color:#808080" >Powered by LORIS &copy; <?php echo $_smarty_tpl->tpl_vars['currentyear']->value;?>
. All rights reserved.</td>
                    </tr>   
                    <tr>
                    <td align="center" colspan="1"style="color: #808080">Created by <a href="http://mcin-cnim.ca" style="color: #064785" target="_blank">MCIN</a></td>
                    </tr>
                    <tr>
                    <td align="center" colspan="1" style="color: #808080"> Developed at <a href="http://www.mni.mcgill.ca" style="color: #064785" target="_blank">Montreal Neurological Institute and Hospital</a></td>

                    </tr>
                </table>
                </div>
</form>
</div>
<?php }?>
</div></div>
</body>
</html>
<?php }} ?>
