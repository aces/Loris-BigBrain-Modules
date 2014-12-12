
{literal}
<script src="js/jquery/jQuery.base64.js"></script>
<script type="text/javascript" src="js/jquery/jquery.mousewheel.min.js"></script>
<html width="100%">
<h1 class="title">
BigBrain
</h1>
<body width="100%">

<table width='100%'>
    <tr>
        <td width='100%'>
        <p><font size='2'><b>The BigBrain dataset</b> is the result of a collaborative effort between the teams of <A HREF="http://www.fz-juelich.de/portal/EN/AboutUs/Institutes_Facilities/Institutes/InstituteNeuroscienceMedicine/_node.html">Dr. Katrin Amunts and Dr. Karl Zilles</A> (<A HREF="http://www.fz-juelich.de/portal/EN/Home/home_node.html">Forschungszentrum J&uuml;lich)</A> and <A HREF="https://cbrain.mcgill.ca/">Dr. Alan Evans</A> (<A HREF="http://www.mni.mcgill.ca/">Montreal Neurological Institute</A>). For research purposes only, no commercial use without written consent.

	</font></p>
<!--<p>Please note: if you do not see the two panes side-by-side, please increase the size of your browser window or zoom out in the browser's "View" menu.  
<p> To browse through the BigBrain, click and move the orange line across the image in the left pane. Depending on the speed of your connection, it might take a few seconds for the right pane image to fully load. 
In the right pane, use the mouse's wheel (up/down arrows and a/z keys are alternatives) to zoom in and out of the section, left click and move to explore different section regions at higher resolution. Section numbers are displayed below. 
To download the full resolution histological MINC or PNG file of a selected section, click on the download link below the viewer. To see more detailed slice information and for quality control capabilities, please click on the <a href='mri_browser.php?'>Imaging Browser </a>link.-->
	</td>
    </tr>
</table>

<p style="float:left;" class = "tip">To browse through the BigBrain<span><b>In the left pane</b></br>Click and move the orange line across the image. Depending on the speed of your connection, it might take a few seconds for the right pane image to fully load. </br></br><b>In the right pane</b></br>Use the mouse's wheel (up/down arrows and a/z keys are alternatives) to zoom in and out of the section. Left click and move to explore different section regions at higher resolution. Section numbers are displayed to the right.
</span>

</p>
<p style="float:left; padding-left:260px" class = "tip">To download<span>The full resolution histological MINC or PNG file of a selected section can be obtained by clicking on the download links to the right of the viewer.</span></p>
</br>
</br>
</br>

<div id="content" style="height:460px">
    <div id="viewer" style="margin-top: 20px; position:absolute;">
        <div id="navigation">
	    <button type="button" name="button" class="button" id="prevslice">Previous Section</button>
	    <button type="button" name="button" class="button" id="nextslice">Next Section</button>
<!--            <a href="" id="prevslice">Previous Section</a>  
            <a href="" id="nextslice">Next Section</a>--> 
            <span id="loading">&nbsp;</span>
	    <div>&nbsp;</div>
        </div>
	
        <div id="selector" style="float: left; margin-right: 20px;">
            <canvas id="selectorView"></canvas>
        </div>
        <div id="slice" style="margin-left: 520px; float: left; position:absolute;">
            <canvas id="sliceView"></canvas> 
        </div>
	<div class="imgInfo" style="width:45%; margin-left: 1030px; float:left; position:absolute;">
	    <p><b>Section number: </b> 
            <span class="sliceId"></span></p>
            <p><b>Resolution: </b>20 microns in plane</p>
            <p id="sliceData"></p>
	</div>
    </div>
<!--
    <table style="margin-left: 20px; margin-top: 480px; margin-bottom: 50px; border-radius:4px; position:absolute; -webkit-border-radius:4px; -moz-border-radius:4px;">
        <tr>
            <th width='140px'>Section number</th>
            <th width='160px'>Resolution</th>
            <th width='400px'>Download</th>
            <th width='200px'>View</th>
        </tr>
        <tr bgcolor='#FFFFFF'>
            <td class="sliceId" align='center'>&nbsp; </td>
            <td align='center'>20 microns in plane</td>
            <td id="sliceData" align='center'></td>
            <td id="sliceViewLink" align="center"></td>
        </tr>
        <tr>
	<tr>
            <td width='100px' align='left'><b>Section number:</b></td>
            <td width='140px' class="sliceId" align='left'>&nbsp;</td>
	</tr>
	<tr>
            <td align='left'><b>Resolution:</b></td>
            <td align='left'>20 microns in plane</td>
	</tr>
	<tr>
            <td colspan='2' id="sliceData"></td>
	</tr>
    </table>-->
</div>
<!--
        <div id="navigation">
	    <button type="button" name="button" class="button" id="prevslice">Previous Section</button>
	    <button type="button" name="button" class="button" id="nextslice">Next Section</button>
            <a href="" id="prevslice">Previous Section</a>  
            <a href="" id="nextslice">Next Section</a> 
            <span id="loading">&nbsp;</span>
        </div>
-->
<!-- Script -->
<script>
$(function() {

        BigBrain.init(document.getElementById('selectorView'),document.getElementById('sliceView'));

        });
</script>

<div style="margin-top: 20px;">
<div>&nbsp;</div>
    <h3>References</h3>
    <p>&nbsp;
        <a href="/papers/HBM2014poster.pdf">Lewis, L.B. et al.:<i> BigBrain: Initial Tissue Classification and Surface Extraction</i>, HBM 2014</a>
    </p>
    <p>&nbsp;
        <a href="https://www.sciencemag.org/content/340/6139/1472.abstract">Amunts, K. et al.: "BigBrain: An Ultrahigh-Resolution 3D Human Brain Model",<i> Science</i> (2013) 340 no. 6139 1472-1475, June 2013 </a>
    </p>
    <p>&nbsp;
        <a href="/papers/Poster-A0-OHBM-2012.pdf">Bludau, S. et al.:<i> Two new Cytoarchitectonic Areas of the Human Frontal Pole</i>, OHBM 2012</a>
    </p>
    <p>&nbsp;
        <a href="/papers/HBM2010poster.pdf">Lepage, C. et al.:<i> Automatic Repair of Acquisition Defects in Reconstruction of Histology Sections of a Human Brain</i>, HBM 2010</a>
    </p>
</div>
</body>
</html>
{/literal}
