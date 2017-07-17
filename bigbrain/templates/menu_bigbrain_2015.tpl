{literal}
<script type="text/javascript" src="js/jquery/jquery.mousewheel.min.js"></script>
<h1 class="title">
BigBrain Release 2015
</h1>
<p><b>The BigBrain dataset</b> is the result of a collaborative effort between the teams of <A HREF="http://www.fz-juelich.de/portal/EN/AboutUs/Institutes_Facilities/Institutes/InstituteNeuroscienceMedicine/_node.html">Dr. Katrin Amunts and Dr. Karl Zilles</A> (<A HREF="http://www.fz-juelich.de/portal/EN/Home/home_node.html">Forschungszentrum J&uuml;lich)</A> and <A HREF="https://cbrain.mcgill.ca/">Dr. Alan Evans</A> (<A HREF="http://www.mni.mcgill.ca/">Montreal Neurological Institute</A>). For research purposes only, no commercial use without written consent.</p>

<h3>New in BigBrain Release 2015</h3>
<ul>
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
<ul><li><b>In the left pane:  </b>Click and move the orange line across the image. Depending on the speed of your connection, it might take a few seconds for the right pane image to fully load. </br></li><li><b>In the right pane:  </b>Image loaded by default is in downsampled resolution of ??μm.  Click on "Show High Resolution Image" for full resolution. Use the mouse's wheel (up/down arrows and a/z keys are alternatives) to zoom in and out of the section. Left click and move to explore different section regions at higher resolution. Section numbers are displayed to the right.
</li></ul>

<h3>To download BigBrain</h3>The full resolution histological MINC or PNG file of a selected section can be obtained by clicking on the download links to the right of the viewer.
</br>
</br>
</br>

<script type="text/javascript" src="/GetJS.php?Module=bigbrain&file=openseadragon.js"></script>
<div id="coronal" class="col-xs-4" style="height: 400px;"></div>
<div id="sagittal" class="col-xs-4" style="height: 400px;"></div>
<div id="axial" class="col-xs-4" style="height: 400px;"></div>

<style>
    /* give it a coloured border just for development testing */
    .overlay {
        border-top: thin solid;
        border-left: thin solid;
    }
    .coronal-axis {
        border-color: #00EE00
    }
    .sagittal-axis {
        border-color: red
    }
    .axial-axis {
        border-color: #0000FF
    }
</style>

<script type="text/javascript">
    var dzi_files = {
        "Coronal" : [],
        "Sagittal" : [],
        "Axial" : []
    };
    var slice = {
	"Coronal" : 3333,
        "Sagittal" : 3333,
        "Axial" : 3333
    };
    var temp = "";
    for(var i = 1; i <= 7404; i++) {
        if(i < 10) {
            temp = "pm000" + i + "o.dzi";
        } else if(i < 100) {
            temp = "pm00" + i + "o.dzi";
        } else if(i < 1000) {
            temp = "pm0" + i + "o.dzi";
        } else {
            temp = "pm" + i + "o.dzi";
        }
        
        if(i <= 5711) {
            dzi_files.Axial.push("/images/BigBrain/Axial/Dzi/" + temp);
        }
        if(i <= 6572) {
            dzi_files.Sagittal.push("/images/BigBrain/Sagittal/Dzi/" + temp);
        }
        dzi_files.Coronal.push("/images/BigBrain/Coronal/Dzi/" + temp);
    }    
    var viewerCoronal = OpenSeadragon({
        id: "coronal",
        prefixUrl: "/bigbrain/images/",
        tileSources: dzi_files.Coronal,
        sequenceMode: true,
        gestureSettingsMouse:   { scrollToZoom: true,  clickToZoom: false,  dblClickToZoom: false, pinchToZoom: false, flickEnabled: false, flickMinSpeed: 120, flickMomentum: 0.25, pinchRotate: false },
        preserveViewport: true,
        initialPage: slice.Coronal
    });
    var viewerSagittal = OpenSeadragon({
        id: "sagittal",
        prefixUrl: "/bigbrain/images/",
        tileSources: dzi_files.Sagittal,
        sequenceMode: true,
        gestureSettingsMouse:   { scrollToZoom: true,  clickToZoom: false,  dblClickToZoom: false, pinchToZoom: false, flickEnabled: false, flickMinSpeed: 120, flickMomentum: 0.25, pinchRotate: false },
        preserveViewport: true,
        initialPage: slice.Sagittal
    });
    var viewerAxial = OpenSeadragon({
        id: "axial",
        prefixUrl: "/bigbrain/images/",
        tileSources: dzi_files.Axial,
        sequenceMode: true,
        gestureSettingsMouse:   { scrollToZoom: true,  clickToZoom: false,  dblClickToZoom: false, pinchToZoom: false, flickEnabled: true, flickMinSpeed: 120, flickMomentum: 0.25, pinchRotate: false },
        preserveViewport: true,
        initialPage: slice.Axial
    });
  
    viewerCoronal.removeAllHandlers("canvas-release");
 
    viewerCoronal.addHandler('canvas-click', function(event) {
        // The canvas-click event gives us a position in web coordinates.
        var webPoint = event.position;

        var viewportPoint = viewerCoronal.viewport.pointFromPixel(webPoint);

        var imagePoint = viewerCoronal.viewport.viewportToImageCoordinates(viewportPoint);

        slice.Sagittal = parseInt(imagePoint.x);
        slice.Axial = 5711 - parseInt(imagePoint.y);

        viewerCoronal.removeOverlay('sagittalOverlayC');
        viewerCoronal.removeOverlay('axialOverlayC');
        overlayCoronal();

        viewerSagittal.open(dzi_files.Sagittal[slice.Sagittal]);
        viewerAxial.open(dzi_files.Axial[slice.Axial]);
    });
    viewerSagittal.addHandler('canvas-click', function(event) {
        // The canvas-click event gives us a position in web coordinates.
        var webPoint = event.position;

        var viewportPoint = viewerSagittal.viewport.pointFromPixel(webPoint);

        var imagePoint = viewerSagittal.viewport.viewportToImageCoordinates(viewportPoint);

        slice.Coronal = parseInt(imagePoint.x);
        slice.Axial = 5711 - parseInt(imagePoint.y);

        viewerSagittal.removeOverlay('coronalOverlayS');
        viewerSagittal.removeOverlay('axialOverlayS');
        overlaySagittal();

        viewerCoronal.open(dzi_files.Coronal[parseInt(imagePoint.x)]);
        viewerAxial.open(dzi_files.Axial[5711 - parseInt(imagePoint.y)]);
    });
    viewerAxial.addHandler('canvas-click', function(event) {
        // The canvas-click event gives us a position in web coordinates.
        var webPoint = event.position;

        var viewportPoint = viewerAxial.viewport.pointFromPixel(webPoint);

        var imagePoint = viewerAxial.viewport.viewportToImageCoordinates(viewportPoint);

        slice.Sagittal = parseInt(imagePoint.x);
        slice.Coronal = 7404 - parseInt(imagePoint.y);

        viewerAxial.removeOverlay('sagittalOverlayA');
        viewerAxial.removeOverlay('coronalOverlayA');
        overlayAxial();

        viewerSagittal.open(dzi_files.Sagittal[parseInt(imagePoint.x)]);
        viewerCoronal.open(dzi_files.Coronal[7404 - parseInt(imagePoint.y)]);
    });

viewerCoronal.addHandler('open', function(event){
    overlayCoronal();
});
viewerSagittal.addHandler('open', function(event){
    overlaySagittal();
});
viewerAxial.addHandler('open', function(event){
    overlayAxial();
});

function overlayCoronal(){
    var eltSag = document.createElement("div");
    var eltAxi = document.createElement("div");
    eltSag.className = "overlay sagittal-axis";
    eltAxi.className = "overlay axial-axis";
    eltSag.id = 'sagittalOverlayC';
    eltAxi.id = 'axialOverlayC';
    var dimensions = viewerCoronal.source.dimensions;
    viewerCoronal.addOverlay({
        element: eltSag,
        location: viewerCoronal.viewport.imageToViewportRectangle( new OpenSeadragon.Rect(slice.Sagittal, 0, 0, dimensions.y) )
    });
    viewerCoronal.addOverlay({
        element: eltAxi,
        location: viewerCoronal.viewport.imageToViewportRectangle( new OpenSeadragon.Rect(0, 5711 - slice.Axial, dimensions.x, 0) )
    });
}
function overlaySagittal(){
    var eltCor = document.createElement("div");
    var eltAxi = document.createElement("div");
    eltCor.className = "overlay coronal-axis";
    eltAxi.className = "overlay axial-axis";
    eltCor.id = 'coronalOverlayS';
    eltAxi.id = 'axialOverlayS';
    var dimensions = viewerSagittal.source.dimensions;
    viewerSagittal.addOverlay({
        element: eltCor,
        location: viewerSagittal.viewport.imageToViewportRectangle( new OpenSeadragon.Rect(slice.Coronal, 0, 0, dimensions.y) )
    });
    viewerSagittal.addOverlay({
        element: eltAxi,
        location: viewerSagittal.viewport.imageToViewportRectangle( new OpenSeadragon.Rect(0, 5711 - slice.Axial, dimensions.x, 0) )
    });
}
function overlayAxial(){
    var eltSag = document.createElement("div");
    var eltCor = document.createElement("div");
    eltSag.className = "overlay sagittal-axis";
    eltCor.className = "overlay coronal-axis";
    eltSag.id = 'sagittalOverlayA';
    eltCor.id = 'coronalOverlayA';
    var dimensions = viewerAxial.source.dimensions;
    viewerAxial.addOverlay({
        element: eltSag,
        location: viewerAxial.viewport.imageToViewportRectangle( new OpenSeadragon.Rect(slice.Sagittal, 0, 0, dimensions.y) )
    });
    viewerAxial.addOverlay({
        element: eltCor,
        location: viewerAxial.viewport.imageToViewportRectangle( new OpenSeadragon.Rect(0, 7404 - slice.Coronal, dimensions.x, 0) )
    });
}
</script>

<!-- Script -->
<script>
$(function() {

        BigBrain.init(document.getElementById('selectorView'),document.getElementById('sliceView'));

        });
</script>
{/literal}
