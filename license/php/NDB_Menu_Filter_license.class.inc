<?php
/**
 * This contains a stub to allow Loris to access the contact page.
 *
 * Since the content is static, everything is in the template.
 */
require_once 'NDB_Menu_Filter.class.inc';

class NDB_Menu_Filter_license extends NDB_Menu_Filter
{
    /**
     * Since this is a public instance, everyone should have access.
     */
    function _hasAccess()
    {
        return true;
    }
}
?>
