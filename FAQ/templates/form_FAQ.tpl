{literal}
<h1 class="title">
FAQ
</h1>
<h3 style="padding-bottom:20px">
Below you will find answers to some frequently Asked Questions
</h3>

<div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                <h3 class="panel-title">
                    What is the bigbrain
                </h3>
            </a>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">
                The bigbrain is the brain of a 65yo man with no neurological or psychiatric diseases in clinical records at time of death. The brain was embedded in parafin and sectionned in 7404 coronal histological sections (20 microns), stained for cell bodies. The bigbrain is the digitized reconstruction of the hi-res histological sections (20 microns isotropic).
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                <h3 class="panel-title">
                    What are all the volumes listed in the table?
                </h3>
            </a>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse">
            <div class="panel-body">
                The volumes are represented in either stereotaxic space (MNI-ICBM152 or MNI-SYN24) or in native histological space. The stereotaxic registration is not perfect but it is very good. The templates for registration (ICBM152 and SYN24) are made available in those tables. The bigbrain volumes are offered at 100, 200, 300, 400 microns isotropic in both MINC (.mnc) and NIfTI (.nii) formats.
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                <h3 class="panel-title">
                    The intensities are wrong in the NIfTI volumes. How can I view them correctly?
                </h3>
            </a>
        </div>
        <div id="collapseThree" class="panel-collapse collapse">
            <div class="panel-body">
                There was a problem with the initial data conversion to NIfTI format. The NIfTI volumes have been replaced on Sept 3, 2013. You will have to download the new volumes to view them in fslview, mricron or afni tools.
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                <h3 class="panel-title">
                    Where are the 100um NIfTI volumes?
                </h3>
            </a>
        </div>
        <div id="collapseFour" class="panel-collapse collapse">
            <div class="panel-body">
                The 100um NIfTI volumes cannot be created because they are too large for the data converter.
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                <h3 class="panel-title">
                    How come when I download the MINC volumes the files appear incomplete?
                </h3>
            </a>
        </div>
        <div id="collapseFive" class="panel-collapse collapse">
            <div class="panel-body">
                Your browser may be limiting the maximum size of the file to transfer. This is problematic for the 100-micron MINC volumes. Use the <a href='ftp://bigbrain.loris.ca'>anonymous FTP</a> server to download these files.
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                <h3 class="panel-title">
                    How can I view the MINC volumes?
                </h3>
            </a>
        </div>
        <div id="collapseSix" class="panel-collapse collapse">
            <div class="panel-body">
                MINC is an imaging format developed at the MNI. To obtain binaries (mostly Linux and OSX) of the MINC tools, <a href="http://www.bic.mni.mcgill.ca/ServicesSoftware/HomePage">download the MINC Tool Kit.</a> The viewers are called register and Display.
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
                <h3 class="panel-title">
                    How do I view the volumes online?
                </h3>
            </a>
        </div>
        <div id="collapseSeven" class="panel-collapse collapse">
            <div class="panel-body">
                The web-based viewer is TissueStack. Documentation is available at <a href="http://www.tissuestack.org/">at the TissueStack site</a>. As you will soon discover, there is a limitation in the zoom factor in TissueStack.
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
                <h3 class="panel-title">
                    How can I view the OBJ surfaces?
                </h3>
            </a>
        </div>
        <div id="collapseEight" class="panel-collapse collapse">
            <div class="panel-body">
                TThe OBJ surfaces are viewable in <a href="https://brainbrowser.cbrain.mcgill.ca">Brainbrowser</a>, <a href="http://www.math.mcgill.ca/keith/surfstat">Surfstat (MATLAB-based) toolbox</a>, <a href="https://wiki.mouseimaging.ca/display/MICePub/brain-view">brain-view</a>, overlaid on the corresponding volume in Display, etc.
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">
                <h3 class="panel-title">
                    Is there an MRI of the bigbrain?
                </h3>
            </a>
        </div>
        <div id="collapseNine" class="panel-collapse collapse">
            <div class="panel-body">
                Yes, there is one of the fixed brain, but it is of poor quality. It is now available in the <a href="ftp://bigbrain.loris.ca/Raw_Data/MRI/">Raw_Data/MRI</a> subdirectory on the <a href='ftp://bigbrain.loris.ca'>anonymous FTP</a> server.
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">
                <h3 class="panel-title">
                    How can I view the volumes as in the bigbrain videos?
                </h3>
            </a>
        </div>
        <div id="collapseTen" class="panel-collapse collapse">
            <div class="panel-body">
                The bigbrain videos were created using Atelier3D, a licensed software which is currently not distributed. The volume read in Atelier3D is at 20-micron isotropic, which is too big for file transfers. This is why reduced volumes at 100, 200, 300, 400 microns have been created.
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">
                <h3 class="panel-title">
                    Is there sound to the bigbrain videos?
                </h3>
            </a>
        </div>
        <div id="collapseEleven" class="panel-collapse collapse">
            <div class="panel-body">
                No.
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve">
                <h3 class="panel-title">
                    Is there a way to mass-download the data files?
                </h3>
            </a>
        </div>
        <div id="collapseTwelve" class="panel-collapse collapse">
            <div class="panel-body">
                Yes. As of March 12th, 2014, all sections and volumes are available on an <a href='ftp://bigbrain.loris.ca'>anonymous FTP</a> server located at the same address as this site. We recommand connecting to the FTP server using a command line or GUI client, but not a web browser.
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen">
                <h3 class="panel-title">
                    Why is the aligned bigbrain showing such strong asymmetry?
                </h3>
            </a>
        </div>
        <div id="collapseThirteen" class="panel-collapse collapse">
            <div class="panel-body">
                The asymmetry results from aligning the histology sections to the MRI of the brain after it was extracted from the skull and set in formalin. We do not have a post-mortem MRI of the undistorted brain inside the head.
            </div>
        </div>
    </div>
</div>
{/literal}
