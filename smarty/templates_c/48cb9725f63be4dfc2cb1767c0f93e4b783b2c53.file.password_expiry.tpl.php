<?php /* Smarty version Smarty-3.1.21-dev, created on 2023-03-25 16:13:09
         compiled from "/var/www/loris/smarty/templates/password_expiry.tpl" */ ?>
<?php /*%%SmartyHeaderCode:599331293641f55d5627e14-87681800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48cb9725f63be4dfc2cb1767c0f93e4b783b2c53' => 
    array (
      0 => '/var/www/loris/smarty/templates/password_expiry.tpl',
      1 => 1414163396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '599331293641f55d5627e14-87681800',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'study_logo' => 0,
    'study_title' => 0,
    'action' => 0,
    'error_message' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_641f55d5b4b621_83545072',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_641f55d5b4b621_83545072')) {function content_641f55d5b4b621_83545072($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<!-- shortcut icon that displays on the browser window -->
<link rel="shortcut icon" href="images/mni_icon.ico" type="image/ico" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- page title -->
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>

<body>

<div class="navbar navbar-default" role="navigation" style="height:90px">
    <div class="container">
        <a class="navbar-brand" href="#" style="align:center;">
            <img src="<?php echo $_smarty_tpl->tpl_vars['study_logo']->value;?>
" border="0" width="64" height="57" />
            <?php echo $_smarty_tpl->tpl_vars['study_title']->value;?>

        </a>
    </div>
</div>

<form action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="post">
    <div class="row">
        <div class="col-xs-12">
            <div class="col-sm-2 col-xs-3 col-sm-offset-2">
                <img src="images/LORIS_logo_141007.svg" class="img-responsive" alt="Responsive image" align="left">
            </div>
            <div class="col-sm-6 col-xs-9">
                <strong>
                    Password Strength Rules
                </strong>
                <ul>
                    <li>
                        The password must be at least 8 characters long
                    </li>
                    <li>
                        The password must contain at least 1 letter, 1 number and 1 character from !@#$%^&amp;*()
                    </li>
                    <li>
                        The password and the user name must not be the same
                    </li>
                    <li>
                        The password and the email address must not be the same
                    </li>
                </ul>
                <strong>
                    Update Password
                </strong>
                <br><br>
                <div class="col-xs-12">
                    <?php if ($_smarty_tpl->tpl_vars['error_message']->value) {?>
                        <div class="form-group has-error">
                            <label class="control-label">
                                <?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>

                            </label>
                        </div>
                    <?php }?>
                    <div class="form-group col-xs-12">
                        <label class="col-xs-4">
                            New Password:
                        </label>
                        <div class="col-xs-6">
                            <input class="form-control input-sm" name="password" tabindex="1" type="password" />
                        </div>
                    </div>
                    <div class="form-group col-xs-12">
                        <label class="col-xs-4">
                            Confirm Password:
                        </label>
                        <div class="col-xs-6">
                            <input class="form-control input-sm" name="confirm" tabindex="2" type="password" />
                        </div>
                    </div>
                    <div class="form-group col-xs-12">
                        <div class="col-xs-4">
                            <input class="btn btn-sm btn-primary col-xs-12" name="expiry" value="Save" type="submit" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-4 col-xs-offset-5">
                <br>Created by <a href="http://mcin-cnim.ca" target="_blank">MCIN</a>
            </div>
            <div class="col-xs-4 col-xs-offset-4  ">
                Developed at <a href="www.mni.mcgill.ca" target="_blank">Montreal Neurological Institute and Hospital</a>
            </div>
        </div>
    </div>

<input type="hidden" name="login" value="true" />
<input type="hidden" name="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" />

</form>

</body>
</html>
<?php }} ?>
