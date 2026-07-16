<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-03-04 15:26:14
         compiled from "/var/www/loris/modules/bigbrain/templates/menu_bigbrain_2015.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189387339596cf7d823b3c6-01553480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73a002ed6a7aa33ad1eb7a0f5efa61c319541c46' => 
    array (
      0 => '/var/www/loris/modules/bigbrain/templates/menu_bigbrain_2015.tpl',
      1 => 1551731172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189387339596cf7d823b3c6-01553480',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_596cf7d82914b4_20664100',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596cf7d82914b4_20664100')) {function content_596cf7d82914b4_20664100($_smarty_tpl) {?>
<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery/jquery.mousewheel.min.js"><?php echo '</script'; ?>
>
<h1 class="title">
BigBrain Release 2015
</h1>
<p><b>The BigBrain dataset</b> is the result of a collaborative effort between the teams of <A HREF="http://www.fz-juelich.de/portal/EN/AboutUs/Institutes_Facilities/Institutes/InstituteNeuroscienceMedicine/_node.html">Dr. Katrin Amunts and Dr. Karl Zilles</A> (<A HREF="http://www.fz-juelich.de/portal/EN/Home/home_node.html">Forschungszentrum J&uuml;lich)</A> and <A HREF="https://cbrain.mcgill.ca/">Dr. Alan Evans</A> (<A HREF="http://www.mni.mcgill.ca/">Montreal Neurological Institute</A>). For research purposes only, no commercial use without written consent.</p>

<hr>
<h3><font color="red">Big Brain Workshop 2017 - Montreal</font></h3>

<p><b><a href="https://mcin.ca/bigbrain-workshop-2017-montreal-from-open-data-to-novel-applications/">From open data to novel applications - November 3rd</a></b></p>
<!--p><b><a href="https://mcin-cnim.ca/bigbrain-workshop-2017-montreal-from-open-data-to-novel-applications/">From open data to novel applications - November 3rd</a></b></p-->
<hr>

<h3>New in BigBrain Release 2015</h3>
<ul>
<li><b>Improved alignment and optical balancing</b></li>
    <li><b><a href="ftp://bigbrain.loris.ca/BigBrainRelease.2015/2D_Final_Sections/">DeepZoom File Format:</a></b> These are the full, highest resolution (20 μm) png images in DZI format (ImageMagick DeepZoom) and can be viewed with OpenSeadragon (web-based).</li>
    <li><b><a href="ftp://bigbrain.loris.ca/BigBrainRelease.2015/3D_Blocks/">3D Blocks:</a></b> These are blocks at high resolution (40 μm) in histological space that together compose the entire BigBrain (with white background and a few mm
                 overlap). The legend volume indicates in which block a 
                 voxel at (x,y,z) lies in. Contact us if you want blocks 
                 at other resolutions.
    </li>
    <li><b><a href="ftp://bigbrain.loris.ca/BigBrainRelease.2015/3D_ROIs/">3D ROI:</a></b> These are regional blocks at highest and variable downsampled resolutions (20 μm+) of common regions
               regions of interest like visual cortex, hippocampus, etc.
               Contact us if you want a special block that is not 
               available in this list.
    </li>
	
</ul>

<h3>To browse through BigBrain</h3>
To view BigBrain online use <a href="https://www.humanbrainproject.eu/en/explore-the-brain/" target="_blank">Human Brain Project's</a> neuroglancer viewer. <a href="https://neuroglancer.humanbrainproject.org/#!{'layers':{'BigBrain':{'type':'image'_'source':'precomputed://https://neuroglancer.humanbrainproject.org/precomputed/BigBrainRelease.2015/8bit'_'transform':[[1_0_0_-70666600]_[0_1_0_-70000000]_[0_0_1_-58777700]_[0_0_0_1]]}_'classif':{'type':'segmentation'_'source':'precomputed://https://neuroglancer.humanbrainproject.org/precomputed/BigBrainRelease.2015/classif'_'segments':['0'_'100'_'200']_'transform':[[1_0_0_-70666600]_[0_1_0_-72910000]_[0_0_1_-58777700]_[0_0_0_1]]}}_'navigation':{'pose':{'position':{'voxelSize':[21166.666015625_20000_21166.666015625]_'voxelCoordinates':[-30.226560592651367_243.21095275878906_484.2291259765625]}}_'zoomFactor':563818.3562426177}_'perspectiveOrientation':[0.3140767216682434_-0.7418519854545593_0.4988985061645508_-0.3195493221282959]_'perspectiveZoom':1922235.5293810747}" target="_blank">Click here</a> to launch the browser.


<?php }} ?>
