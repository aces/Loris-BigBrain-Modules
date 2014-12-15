<?php
/**
 * This is a stub to load the Big Brain video.
 * This was originally based on the Loris video uploader, but has since
 * been modified to be a static page with the Big Brain video embedded.
 */
require_once 'NDB_Menu_Filter.class.inc';

/**
 * Stub so that videos page loads.
 */
class NDB_Menu_Filter_videos extends NDB_Menu_Filter
{
    /**
     * Since BigBrain is public, everyone has access.
     */
    function _hasAccess()
    {
        return true;
    }

}
?>
