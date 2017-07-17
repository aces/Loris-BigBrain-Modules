{literal}
<script type="text/javascript" src="js/jquery/jquery.mousewheel.min.js"></script>
<h1 class="title">
BigBrain
</h1>
<p><b>The BigBrain dataset</b> is the result of a collaborative effort between the teams of <A HREF="http://www.fz-juelich.de/portal/EN/AboutUs/Institutes_Facilities/Institutes/InstituteNeuroscienceMedicine/_node.html">Dr. Katrin Amunts and Dr. Karl Zilles</A> (<A HREF="http://www.fz-juelich.de/portal/EN/Home/home_node.html">Forschungszentrum J&uuml;lich)</A> and <A HREF="https://cbrain.mcgill.ca/">Dr. Alan Evans</A> (<A HREF="http://www.mni.mcgill.ca/">Montreal Neurological Institute</A>). For research purposes only, no commercial use without written consent.</p>

<h3>To browse through BigBrain</h3>
<ul><li><b>In the left pane:  </b>Click and move the orange line across the image. Depending on the speed of your connection, it might take a few seconds for the right pane image to fully load. </br></li><li><b>In the right pane:  </b>Use the mouse's wheel (up/down arrows and a/z keys are alternatives) to zoom in and out of the section. Left click and move to explore different section regions at higher resolution. Section numbers are displayed to the right.
</li></ul>

<h3>To download BigBrain</h3>The full resolution histological MINC or PNG file of a selected section can be obtained by clicking on the download links to the right of the viewer.
</br>
</br>
</br>

<div class="row">
    <div class="col-xs-2">
        <label>Select Viewer</label>
    </div>
    <div class="col-xs-4">
        <select id="viewerSelect" class="form-control">
            <option value=0>Coronal</option>
            <option value=1>Sagittal</option>
            <option value=2>Axial</option>
        </select>
    </div>
</div>

<div id="content" style="height:460px">
    <div id="viewer" style="margin-top: 20px; position:absolute;">
        <div id="navigation">
	    <button type="button" name="button" class="button" id="prevslice">Previous Section</button>
	    <button type="button" name="button" class="button" id="nextslice">Next Section</button>
	    <button type="button" name="button" class="button" id="getHighRes">Show High Resolution Image</button>
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
</div>

<!-- Script -->
<script>
$(function() {

        BigBrain.init(document.getElementById('selectorView'),document.getElementById('sliceView'));

        });
</script>
{/literal}
