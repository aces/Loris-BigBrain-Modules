<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-07-20 04:25:21
         compiled from "/var/www/loris/smarty/templates/lost_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:647031636597068f182f325-32841018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f310d82aa65650826a5b63188dcedf75299100dd' => 
    array (
      0 => '/var/www/loris/smarty/templates/lost_password.tpl',
      1 => 1414163396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '647031636597068f182f325-32841018',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'study_logo' => 0,
    'study_title' => 0,
    'error_message' => 0,
    'confirm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_597068f18c9f10_88869989',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597068f18c9f10_88869989')) {function content_597068f18c9f10_88869989($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<!-- shortcut icon that displays on the browser window -->
<link rel="shortcut icon" href="images/mni_icon.ico" type="image/ico" />
<!-- page title -->
<title>Lost Password</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--  end page header -->
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

<form action="lost_password.php" target="_self" method="post">
	<div class="row">
		<div class="col-xs-12">
			<div class="col-sm-2 col-xs-3 col-sm-offset-2">
				<img src="images/LORIS_logo_141007.svg" class="img-responsive" alt="Responsive image" align="left">
			</div>
			<div class="col-sm-6 col-xs-9">
				<?php if ($_smarty_tpl->tpl_vars['error_message']->value) {?>
					<div class="form-group has-error">
                        <label class="control-label">
                            <?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>

                        </label>
                    </div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['confirm']->value) {?>
					<div class="form-group has-success">
					  	<label class="control-label">
					  		<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>

					  	</label>
					</div>
				<?php }?>
				Please enter your username below, and a new password will be sent to you.<br><br>
				<div class="form-group">
					<label class="col-xs-2">
                        User:
                    </label>
                    <div class="col-xs-6">
                        <input class="form-control input-sm" tabindex="1" type="text" size="40" name="username" />
                    </div>
                    <div class="col-xs-4">
                        <input class="btn btn-sm btn-primary col-xs-12" type="submit" name="submit" value="Submit" class="button" />
                    </div>
	  			</div>
	  			<br>
	  			<div class="col-xs-10 col-xs-offset-2">
	  				<a href="main.php">Return to login screen</a>
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
</form>

</body>
</html>
<?php }} ?>
