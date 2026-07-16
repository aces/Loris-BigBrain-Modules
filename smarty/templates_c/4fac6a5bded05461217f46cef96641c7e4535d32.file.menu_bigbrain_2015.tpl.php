<?php /* Smarty version Smarty-3.1.21-dev, created on 2025-07-25 12:50:03
         compiled from "/var/www/loris/project/templates/menu_bigbrain_2015.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8156429265de98bd4a1d7b3-81949803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fac6a5bded05461217f46cef96641c7e4535d32' => 
    array (
      0 => '/var/www/loris/project/templates/menu_bigbrain_2015.tpl',
      1 => 1753462190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8156429265de98bd4a1d7b3-81949803',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5de98bd4a72907_09491691',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5de98bd4a72907_09491691')) {function content_5de98bd4a72907_09491691($_smarty_tpl) {?>
<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery/jquery.mousewheel.min.js"><?php echo '</script'; ?>
>

<p><b>The BigBrain dataset</b> is the result of a collaborative effort between the teams of Dr. Katrin Amunts and Dr. Karl Zilles, Forschungszentrum Juelich and <A HREF="http://mcin.ca/about-mcin/alans-cv/" target="_blank">Dr. Alan Evans</A> (<A HREF="https://www.mcgill.ca/neuro/" target="_blank">Montreal Neurological Institute</A>). For more information please visit the BigBrain Project website [<a href="https://bigbrainproject.org" target="_blank">https://bigbrainproject.org</a>]</p> 

<h3 class="title">BigBrain Release 2015</h3>
<ul>
<li><a href="main.php?test_name=brainvolumes&release=2015"><b>Download 3D Volumes</b></a>: Full volumes in histological space and resampled in the MNI-ICBM152 and MNI-ADNI spaces. The volumes are available in MINC and NIfTI formats, and at different resolutions (100 µm to 1 mm isotropic).
</li>
<li><a href="main.php?test_name=brainsurfaces&release=2015"><b>Download 3D Surfaces</b></a>: Grey and white matter surfaces in histological space and  resampled to the MNI152. Available in OBJ and GIfTI formats.
</li>
<li><a href="main.php?test_name=brainclassifiedvolumes&release=2015"><b>Download 3D Classified Volumes</b></a>: Full volumes with voxels classified as grey / white matter, and CSF.  Available in MINC and NIfTI. 
</li>
</ul>
 
For research purposes only. No commercial use without written consent. See <a href="#license">license</a> section below.

<h3>BigBrain Dataset Release 2013</h3>

<ul>
<li><a href="main.php?test_name=brainvolumes&release=2013"><b>Download 3D Volumes</b></a>: Full volumes in histological space and resampled in the MNI-ICBM152 and MNI-ADNI spaces. The volumes are available in MINC and NIfTI formats, and at different resolutions (100 µm to 1 mm isotropic).
</li>
<li><a href="main.php?test_name=brainsurfaces&release=2013"><b>Download 3D Surfaces</b></a>: Grey and white matter surfaces in histological space and  resampled to the MNI152. Available in OBJ and GIfTI formats.
</li>
<li><a href="main.php?test_name=brainclassifiedvolumes&release=2013"><b>Download 3D Classified Volumes</b></a>: Full volumes with voxels classified as grey / white matter, and CSF.  Available in MINC and NIfTI.
</li>
</ul>

<h3>View the Dataset Online</h3> 

<ul><li>
<a href="https://bigbrain.humanbrainproject.org/" target="_blank"><b>Open in NeHuba</b></a>: To explore the BigBrain online use NeHuBa, a web-based viewer from the <a href="https://www.humanbrainproject.eu/en/explore-the-brain/" target="_blank">Human Brain Project</a>. <a href="https://bigbrain.humanbrainproject.org/" target="_blank">Click here to launch the browser</a>.
</li>
</ul>

<h3>BigBrain License<a id="license"></a></h3> 
<ul>
<li>
<a href="https://bigbrain-ftp.loris.ca/bigbrain-ftp/License.txt">Download TEXT</a> version of license
</li>
<!---li>
<a href="ftp://bigbrain.loris.ca/License.txt">PDF version of license</a>
</li-->
</ul>
<p>
<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png"></a>
</p>
<p>
BigBrain is licensed under <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/legalcode" target="_blank">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International Public License</a>.
</p><p>
A human-readable summary of the license can be found <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank">here</a>.
</p>

<!--- 2019-12-05 CR: complicated link - caching rather than deleting ###
To view BigBrain online use <a href="https://www.humanbrainproject.eu/en/explore-the-brain/" target="_blank">Human Brain Project's</a> neuroglancer viewer. <a href="https://neuroglancer.humanbrainproject.org/#!{'layers':{'BigBrain':{'type':'image'_'source':'precomputed://https://neuroglancer.humanbrainproject.org/precomputed/BigBrainRelease.2015/8bit'_'transform':[[1_0_0_-70666600]_[0_1_0_-70000000]_[0_0_1_-58777700]_[0_0_0_1]]}_'classif':{'type':'segmentation'_'source':'precomputed://https://neuroglancer.humanbrainproject.org/precomputed/BigBrainRelease.2015/classif'_'segments':['0'_'100'_'200']_'transform':[[1_0_0_-70666600]_[0_1_0_-72910000]_[0_0_1_-58777700]_[0_0_0_1]]}}_'navigation':{'pose':{'position':{'voxelSize':[21166.666015625_20000_21166.666015625]_'voxelCoordinates':[-30.226560592651367_243.21095275878906_484.2291259765625]}}_'zoomFactor':563818.3562426177}_'perspectiveOrientation':[0.3140767216682434_-0.7418519854545593_0.4988985061645508_-0.3195493221282959]_'perspectiveZoom':1922235.5293810747}" target="_blank">Click here</a> to launch the browser.
---> 


<?php }} ?>
