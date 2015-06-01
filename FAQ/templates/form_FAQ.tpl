{literal}
<h1 class="title">
FAQ
</h1>
<h3>
Below you will find answers to some frequently Asked Questions
</h3>

<dl class="question">
    <dt>What is the bigbrain?</dt>
    <dd>The bigbrain is the brain of a 65yo man with no neurological or psychiatric
       diseases in clinical records at time of death. The brain was embedded in
       parafin and sectionned in 7404 coronal histological sections (20 microns),
       stained for cell bodies. The bigbrain is the digitized reconstruction of
       the hi-res histological sections (20 microns isotropic).
    </dd>

    <dt>What are all the volumes listed in the table?</dt>
    <dd>The volumes are represented in either stereotaxic space (MNI-ICBM152 or
       MNI-SYN24) or in native histological space. The stereotaxic registration
       is not perfect but it is very good. The templates for registration
       (ICBM152 and SYN24) are made available in those tables. The bigbrain
       volumes are offered at 100, 200, 300, 400 microns isotropic in both
       minc and nii formats.
    </dd>

    <dt>Why is the aligned bigbrain showing such strong asymmetry?</dt>
    <dd>The asymmetry results from aligning the histology sections to the
    MRI of the brain after it was extracted from the skull and set in
    formalin. We do not have a post-mortem MRI of the undistorted brain
    inside the head.</dd>

    <dt>The intensities are wrong in the nii volumes. How can I view them correctly?</dt>
    <dd>There was a problem with the initial data conversion to nii format. The nii
    volumes have been replaced on Sept 3, 2013. You will have to download the
    new volumes to view them in fslview, mricron or afni tools.
    </dd>

    <dt>Where are the 100um nii volumes?</dt>
    <dd>The 100um nii volumes cannot be created because they are too large for the
    data converter.</dd>

    <dt>How can I download the minc volumes? The files appear incomplete.</dt>
    <dd> Your browser may be limiting the maximum size of the file to transfer.
    This is problematic for the 100-micron minc volumes.</dd>

    <dt>How can I view the minc volumes?</dt>
    <dd>minc is an imaging format developed at the MNI. To obtain binaries (mostly
            Linux and OSX) of the minc tools,
    <a href="http://www.bic.mni.mcgill.ca/ServicesSoftware/HomePage"> download the minc Tool Kit here</a>.
    The viewers are called Register and Display.</dd>

    <dt>How do I view the volumes online?</dt>
    <dd> The web-based viewer is TissueStack. Documentation is available at
    <a href="http://www.tissuestack.org/">at the TissueStack site</a>.
    As you will soon discover, there is a limitation in the zoom factor in
    TissueStack.
    </dd>

    <dt>Is there an MRI of the bigbrain?</dt>
    <dd>Yes, there is one of the fixed brain, but it is of poor quality. It should
    be made available soon.</dd>

    <dt> How can I view the volumes as in the bigbrain videos?</dt>
    <dd> The bigbrain videos were created using Atelier3D, a licensed software which
    is currently not distributed. The volume read in Atelier3D is at 20-micron
    isotropic, which is too big for file transfers. This is why reduced volumes
    at 100, 200, 300, 400 microns have been created.</dd>

    <dt>Is there sound to the bigbrain videos?</dt>
    <dd>No.</dd>

    <dt>Is there a way to mass-download the data files?</dt>
    <dd> Yes. As of March 12th, 2014, all sections and volumes are available on an anonymous FTP server located at the same address as this site. We recommand connecting to the FTP server using a command line or GUI client, but not a web browser.</dd>
</dl>
{/literal}
