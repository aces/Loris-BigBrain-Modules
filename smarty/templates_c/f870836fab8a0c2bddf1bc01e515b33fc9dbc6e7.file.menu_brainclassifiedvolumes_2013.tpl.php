<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-01-03 05:07:12
         compiled from "/var/www/loris/modules/brainclassifiedvolumes/templates/menu_brainclassifiedvolumes_2013.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14086064965a4cab507a74c5-89113912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f870836fab8a0c2bddf1bc01e515b33fc9dbc6e7' => 
    array (
      0 => '/var/www/loris/modules/brainclassifiedvolumes/templates/menu_brainclassifiedvolumes_2013.tpl',
      1 => 1500299990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14086064965a4cab507a74c5-89113912',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a4cab50a333b8_90795454',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4cab50a333b8_90795454')) {function content_5a4cab50a333b8_90795454($_smarty_tpl) {?><style type="text/css">
  .table-hover>tbody>tr:hover>th.header{
    background-color: #064785;
  }
</style>
<h1>3D Classified Volumes Data Release 2013</h1>

<table class="dynamictable table table-hover table-primary table-bordered" border="0" width="100%">
  <thead>
      <tr class="header">
          <th>Description</th>
          <th>Resolution</th>
          <th>Encoding</th>
          <th>Comments</th>
          <th>View</th>
          <th colspan="2">Download</th>
     </tr>
 </thead>
 <tbody>
    <tr>
      <th colspan="5" class="info">MNI ICBM 152 Space (ICBM 2009b Nonlinear Symmetric)</th>
      <th class="header">Minc</th>
      <th class="header">NIfTI</th>
    </tr>
    <tr>
      <td class="description">Full Classified Volume, 100um</td>
      <td class="resolution">100um isotropic (1970x2330x1890)</td>
      <td class="encoding">8-bit unsigned byte</td>
      <td class="comments"></td>
      <td>
      </td>
      <td class="download">
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/AjaxHelper.php?Module=brainclassifiedvolumes&get_surface.php&script=get_classifiedvolumes.php&release=2013&file=full_cls_100um_2009b_sym.mnc">Minc<br>(171 MB)</a>
      </td>
      <td>File too large</td>
    </tr>
    <tr>
      <td class="description">Full Classified Volume, 200um</td>
      <td class="resolution">200um isotropic (985x1165x945)</td>
      <td class="encoding">8-bit unsigned byte</td>
      <td class="comments"></td>
      <td class="view">
      </td>
      <td class="download">
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/AjaxHelper.php?Module=brainclassifiedvolumes&get_classifiedvolumes.php&script=get_classifiedvolumes.php&release=2013&file=full_cls_200um_2009b_sym.mnc">Minc<br>(30 MB)</a>
      </td>
      <td class="download">
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/AjaxHelper.php?Module=brainclassifiedvolumes&get_classifiedvolumes.php&script=get_classifiedvolumes.php&release=2013&file=full_cls_200um_2009b_sym.nii.gz">NIfTI<br>(26 MB)</a>
      </td>
    </tr>
    <tr>
      <td class="description">Full Classified Volume, 300um</td>
      <td class="resolution">300um isotropic (657x777x630)</td>
      <td class="encoding">8-bit unsigned byte</td>
      <td class="comments"></td>
      <td class="view">
      </td>
      <td class="download">
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/AjaxHelper.php?Module=brainclassifiedvolumes&get_classifiedvolumes.php&script=get_classifiedvolumes.php&release=2013&file=full_cls_300um_2009b_sym.mnc">Minc<br>(10 MB)</a>
      </td>
      <td class="download">
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/AjaxHelper.php?Module=brainclassifiedvolumes&get_classifiedvolumes.php&script=get_classifiedvolumes.php&release=2013&file=full_cls_300um_2009b_sym.nii.gz">NIfTI<br>(9 MB)</a>
      </td>
    </tr>
    <tr>
      <td class="description">Full Classified Volume, 400um</td>
      <td class="resolution">400um isotropic (493x583x473)</td>
      <td class="encoding">8-bit unsigned byte</td>
      <td class="comments"></td>
      <td class="view">
      </td>
      <td class="download">
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/AjaxHelper.php?Module=brainclassifiedvolumes&get_classifiedvolumes.php&script=get_classifiedvolumes.php&release=2013&file=full_cls_400um_2009b_sym.mnc">Minc<br>(5 MB)</a>
      </td>
      <td class="download">
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/AjaxHelper.php?Module=brainclassifiedvolumes&get_classifiedvolumes.php&script=get_classifiedvolumes.php&release=2013&file=full_cls_400um_2009b_sym.nii.gz">NIfTI<br>(4 MB)</a>
      </td>
    </tr>
    <tr>
      <th class="info" colspan="5">7T syn24 template in MNI Space</th>
      <th class="header">Minc</th>
      <th class="header">NIfTI</th>
    </tr>
    <tr>
      <td colspan="8">No Data</td>
    </tr>
    <tr>
      <th class="info" colspan="5" >Histological Space</th>
      <th class="header">Minc</th>
      <th class="header">NIfTI</th>
    </tr>
    <tr>
      <td class="description">Full Classified Volume, 100um</td>
      <td class="resolution">100um isotropic (1970x2330x1890)</td>
      <td class="encoding">8-bit unsigned byte</td>
      <td class="comments"></td>
      <td>
      </td>
      <td class="download">
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/AjaxHelper.php?Module=brainclassifiedvolumes&get_surface.php&script=get_classifiedvolumes.php&release=2013&file=full_cls_100um.mnc">Minc<br>(78 MB)</a>
      </td>
      <td>File too large</td>
    </tr>
    <tr>
      <td class="description">Full Classified Volume, 200um</td>
      <td class="resolution">200um isotropic (985x1165x945)</td>
      <td class="encoding">8-bit unsigned byte</td>
      <td class="comments"></td>
      <td class="view">
      </td>
      <td class="download">
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/AjaxHelper.php?Module=brainclassifiedvolumes&get_classifiedvolumes.php&script=get_classifiedvolumes.php&release=2013&file=full_cls_200um.mnc">Minc<br>(13 MB)</a>
      </td>
      <td class="download">
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/AjaxHelper.php?Module=brainclassifiedvolumes&get_classifiedvolumes.php&script=get_classifiedvolumes.php&release=2013&file=full_cls_200um.nii.gz">NIfTI<br>(12 MB)</a>
      </td>
    </tr>
    <tr>
      <td class="description">Full Classified Volume, 300um</td>
      <td class="resolution">300um isotropic (657x777x630)</td>
      <td class="encoding">8-bit unsigned byte</td>
      <td class="comments"></td>
      <td class="view">
      </td>
      <td class="download">
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/AjaxHelper.php?Module=brainclassifiedvolumes&get_classifiedvolumes.php&script=get_classifiedvolumes.php&release=2013&file=full_cls_300um.mnc">Minc<br>(5 MB)</a>
      </td>
      <td class="download">
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/AjaxHelper.php?Module=brainclassifiedvolumes&get_classifiedvolumes.php&script=get_classifiedvolumes.php&release=2013&file=full_cls_300um.nii.gz">NIfTI<br>(4 MB)</a>
      </td>
    </tr>
    <tr>
      <td class="description">Full Classified Volume, 400um</td>
      <td class="resolution">400um isotropic (493x583x473)</td>
      <td class="encoding">8-bit unsigned byte</td>
      <td class="comments"></td>
      <td class="view">
      </td>
      <td class="download">
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/AjaxHelper.php?Module=brainclassifiedvolumes&get_classifiedvolumes.php&script=get_classifiedvolumes.php&release=2013&file=full_cls_400um.mnc">Minc<br>(2 MB)</a>
      </td>
      <td class="download">
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/AjaxHelper.php?Module=brainclassifiedvolumes&get_classifiedvolumes.php&script=get_classifiedvolumes.php&release=2013&file=full_cls_400um.nii.gz">NIfTI<br>(2 MB)</a>
      </td>
    </tr>
  </tbody>
</table>
<?php }} ?>
