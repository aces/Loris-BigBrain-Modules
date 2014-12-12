
{literal}
<script src="js/jquery/jQuery.base64.js"></script>
<script type="text/javascript" src="js/jquery/jquery.mousewheel.min.js"></script>
<html width="100%">
<h1 class="title">
FAQ
</h1>
<body width="100%">

<table width='100%'>
    <tr>
        <td width='100%'>
        <p><font size='2'><b>Below you will find answers to some frequently Asked Questions</b>

	</font></p>
<!--<p>Please note: if you do not see the two panes side-by-side, please increase the size of your browser window or zoom out in the browser's "View" menu.  
<p> To browse through the BigBrain, click and move the orange line across the image in the left pane. Depending on the speed of your connection, it might take a few seconds for the right pane image to fully load. 
In the right pane, use the mouse's wheel (up/down arrows and a/z keys are alternatives) to zoom in and out of the section, left click and move to explore different section regions at higher resolution. Section numbers are displayed below. 
To download the full resolution histological MINC or PNG file of a selected section, click on the download link below the viewer. To see more detailed slice information and for quality control capabilities, please click on the <a href='mri_browser.php?'>Imaging Browser </a>link.-->
	</td>
    </tr>
</table>


<p><font class = "question">
<b>Q:</b> What is the bigbrain?
</font>
</p>
<b>A:</b> The bigbrain is the brain of a 65yo woman with no neurological or psychiatric
   diseases in clinical records at time of death. The brain was embedded in
   parafin and sectionned in 7404 coronal histological sections (20 microns),
   stained for cell bodies. The bigbrain is the digitized reconstruction of
   the hi-res histological sections (20 microns isotropic).
<br/>
<br/>
<br/>

<p class = "question">
<b>Q:</b> What are all the volumes listed in the table?
</p>
<b>A:</b> The volumes are represented in either stereotaxic space (MNI-ICBM152 or
   MNI-SYN24) or in native histological space. The stereotaxic registration
   is not perfect but it is very good. The templates for registration
   (ICBM152 and SYN24) are made available in those tables. The bigbrain
   volumes are offered at 100, 200, 300, 400 microns isotropic in both
   minc and nii formats.
<br/>
<br/>
<br/>

<p class = "question">
<b>Q:</b> Why is the aligned bigbrain showing such strong asymmetry?
</p>
<b>A:</b> The asymmetry results from aligning the histology sections to the
   MRI of the brain after it was extracted from the skull and set in
   formalin. We do not have a post-mortem MRI of the undistorted brain 
   inside the head.
<br/>
<br/>
<br/>

<p class = "question">
<b>Q:</b> The intensities are wrong in the nii volumes. How can I view them correctly?
</p>
<b>A:</b> There was a problem with the initial data conversion to nii format. The nii
   volumes have been replaced on Sept 3, 2013. You will have to download the
   new volumes to view them in fslview, mricron or afni tools.
<br/>
<br/>
<br/>

<p class = "question">
<b>Q:</b> Where are the 100um nii volumes?
</p>
<b>A:</b> The 100um nii volumes cannot be created because they are too large for the
   data converter.
<br/>
<br/>
<br/>


<p class = "question">
<b>Q:</b> How can I download the minc volumes? The files appear incomplete.
</p>
<b>A:</b> Your browser may be limiting the maximum size of the file to transfer.
   This is problematic for the 100-micron minc volumes.
<br/>
<br/>
<br/>

<p class = "question">
<b>Q:</b> How can I view the minc volumes?
</p>
<b>A:</b> minc is an imaging format developed at the MNI. To obtain binaries (mostly
   Linux and OSX) of the minc tools, 
   <a href="http://www.bic.mni.mcgill.ca/ServicesSoftware/HomePage"> download the minc Tool Kit here</a>.
   The viewers are called Register and Display.
<br/>
<br/>
<br/>

<p class = "question">
<b>Q:</b> How do I view the volumes online?
</p>
<b>A:</b> The web-based viewer is TissueStack. Documentation is available at 
   <a href="http://www.tissuestack.org/">at the TissueStack site</a>.
   As you will soon discover, there is a limitation in the zoom factor in
   TissueStack.
<br/>
<br/>
<br/>

<p class = "question">
<b>Q:</b> Is there an MRI of the bigbrain?
</p>
<b>A:</b> Yes, there is one of the fixed brain, but it is of poor quality. It should
   be made available soon.
<br/>
<br/>
<br/>

<p class = "question">
<b>Q:</b> How can I view the volumes as in the bigbrain videos?
</p>
<b>A:</b> The bigbrain videos were created using Atelier3D, a licensed software which
   is currently not distributed. The volume read in Atelier3D is at 20-micron
   isotropic, which is too big for file transfers. This is why reduced volumes
   at 100, 200, 300, 400 microns have been created.
<br/>
<br/>
<br/>

<p class = "question">
<b>Q:</b> Is there sound to the bigbrain videos?
</p>
<b>A:</b> No.
<br/>
<br/>
<br/>

<p class = "question">
<b>Q:</b> Is there a way to mass-download the data files?
</p>
<b>A:</b> Yes. As of March 12th, 2014, all sections and volumes are available on an anonymous FTP server located at the same address as this site. We recommand connecting to the FTP server using a command line or GUI client, but not a web browser.
<br/>
<br/>
<br/>

</p>

</br>
</br>
</br>


<div>
</div>
</body>
</html>
{/literal}
