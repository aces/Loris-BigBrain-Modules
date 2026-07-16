<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-06-16 12:08:08
         compiled from "/var/www/loris/project/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109602058596cf91f158f87-35709047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd98f73276e7479b5e07ceb5f38311e91a1b343a' => 
    array (
      0 => '/var/www/loris/project/templates/login.tpl',
      1 => 1623859491,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109602058596cf91f158f87-35709047',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_596cf91f1dde62_81414103',
  'variables' => 
  array (
    'title' => 0,
    'action' => 0,
    'currentyear' => 0,
    'studylinks' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596cf91f1dde62_81414103')) {function content_596cf91f1dde62_81414103($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="height:100%">
<head>
<meta charset="utf-8"/>
<!-- shortcut icon that displays on the browser window -->
<link rel="shortcut icon" href="images/mni_icon.ico" type="image/ico" />
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/custom-css.css">
<!-- page title -->
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

<!-- About this Javascript. As time goes on, one may need to update this file with new browsers and latest versions -->

<?php echo '<script'; ?>
 type="text/javascript">
<!--
var BrowserDetect = {
init: function () {
	      this.browser = this.searchString(this.dataBrowser) || "An unknown browser";
	      this.version = this.searchVersion(navigator.userAgent)
		      || this.searchVersion(navigator.appVersion)
		      || "an unknown version";
	      this.OS = this.searchString(this.dataOS) || "an unknown OS";
      },
searchString: function (data) {
		      for (var i=0;i<data.length;i++)	{
			      var dataString = data[i].string;
			      var dataProp = data[i].prop;
			      this.versionSearchString = data[i].versionSearch || data[i].identity;
			      if (dataString) {
				      if (dataString.indexOf(data[i].subString) != -1)
					      return data[i].identity;
			      }
			      else if (dataProp)
				      return data[i].identity;
		      }
	      },
searchVersion: function (dataString) {
		       var index = dataString.indexOf(this.versionSearchString);
		       if (index == -1) return;
		       return parseFloat(dataString.substring(index+this.versionSearchString.length+1));
	       },
dataBrowser: [
	     { 	string: navigator.userAgent,
subString: "OmniWeb",
	   versionSearch: "OmniWeb/",
	   identity: "OmniWeb"
	     },
	     {
string: navigator.vendor,
	subString: "Apple",
	identity: "Safari"
	     },
	     {
prop: window.opera,
      identity: "Opera"
	     },
	     {
string: navigator.vendor,
	subString: "iCab",
	identity: "iCab"
	     },
	     {
string: navigator.vendor,
	subString: "KDE",
	identity: "Konqueror"
	     },
	     {
string: navigator.userAgent,
	subString: "Firefox",
	identity: "Firefox"
	     },
	     {
string: navigator.vendor,
	subString: "Camino",
	identity: "Camino"
	     },
	     {		// for newer Netscapes (6+)
string: navigator.userAgent,
	subString: "Netscape",
	identity: "Netscape"
	     },
	     {
string: navigator.userAgent,
	subString: "MSIE",
	identity: "Explorer",
	versionSearch: "MSIE"
	     },
	     {
string: navigator.userAgent,
	subString: "Gecko",
	identity: "Mozilla",
	versionSearch: "rv"
	     },
	     { 		// for older Netscapes (4-)
string: navigator.userAgent,
	subString: "Mozilla",
	identity: "Netscape",
	versionSearch: "Mozilla"
	     }
      ],
	      dataOS : [
	      {
string: navigator.platform,
	subString: "Win",
	identity: "Windows"
	      },
	      {
string: navigator.platform,
	subString: "Mac",
	identity: "Mac"
	      },
	      {
string: navigator.platform,
	subString: "Linux",
	identity: "Linux"
	      }
      ]

};
BrowserDetect.init();

// -->
<?php echo '</script'; ?>
>
<style>
.loginheader {
background: #064785;
color: #fff;
padding-top: 10px;
font-size: 130%;
text-align: center;
}
.footer{
	opacity: 0.8;
	bottom: 0;
	position: absolute;
	width: 100%;
}
#img-bb{
	height: 70%;
	margin-bottom: 100px;
	bottom: 0px;
	position: absolute;
	z-index: -1;
	margin-top: 120px;
	top: 0;
}
#img-bb>img {
    max-width: 100%;
    max-height: 100%;
    display: block;
    margin-left: auto;
    margin-right: auto;
}
</style>


<meta name="viewport" content="width=device-width, initial-scale=1" />

</head>
<body background="" class="LoginBackground">
	<div class ="logo">

	</div>
	
 	<div class="navbar navbar-default" role="navigation">
 		<center>
	 		<div class="container loginheader">
			 	Montreal Neurological Institute | Forschungszentrum Jülich <br>
				<b>BigBrain LORIS Database</b>	
		 	</div>
	 	</center>
 	</div>

 	<form action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="post">
 		<input name="username" value="bb_user" type="hidden"/>
 		<input name="password" type="hidden" value="publicpassword"/>
 		<center>
 			<input class="btn btn-primary" name="login" type="submit" value="&nbsp;&nbsp; &nbsp;&nbsp; ENTER &nbsp;&nbsp; &nbsp;&nbsp; " />
 		</center>
 	</form>
 
	<div id="img-bb" class="col-xs-12">
		<img src="images/bigbrain_cover_Feb_26_2015.png">
	</div>	
 		</center>


	<div class="footer navbar-bottom">
		<div align="center" colspan="1" style="color:#064785" >
                    Visit <a href="http://bigbrainproject.org" style="color:#064785; target="_blank"><b>BigBrainProject.org</b></a> for more information
        </div>
        <div align="center" colspan="1" style="color:#808080" >
            <b>Supported Browsers:</b> Mozilla Firefox, Google Chrome.
        </div>
        <div align="center" colspan="1">
            <a href="https://bigbrain-ftp.loris.ca/bigbrain-ftp/"><b>Raw data also available using Anonymous FTP:</b> View and connect with FTP client.</a>
        </div>
        <div align="center" colspan="1" style="color:#808080" >
           <a href="http://LORIS.CA" style="color:#064785" target="_blank">Powered by LORIS</a> &copy; <?php echo $_smarty_tpl->tpl_vars['currentyear']->value;?>
 All rights reserved.  <a href="http://mcin.ca" target="_blank">Created by MCIN</a>
        </div>
  		<div align="center" colspan="1" style="color:blue">
<br>
<!--
            <a href="http://mcin.ca" style="color: blue;" target="_blank">Created by MCIN</a>
--->
        </div>
    </div>



<!-- old study web links positioning
<table class="StudyWeblinks" align="center">
<tr>
<div id="footerLinks">
<td width="100%">
<ul id="navlist" style="margin-top: 5px; margin-bottom: 2px;" >

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
</div>
</tr>

</table>
-->
<!--img src="images/mni_logo.png" class="watermark" alt="Montreal Neurological Institute" border="0" width="100" height="83"-->



<?php echo '<script'; ?>
 type='text/javascript'>
<!--
if(BrowserDetect.browser == "Explorer") {
	document.write('<p align="center"><b>The browser you are using (Internet Explorer) is not compatible with this database!</b><br>For full functionality please download the latest version of <a href="http://www.mozilla.com/" target="blank">Firefox.</a></p>');
}
// -->	
<?php echo '</script'; ?>
>



	</form>
</body>
	</html>
<?php }} ?>
