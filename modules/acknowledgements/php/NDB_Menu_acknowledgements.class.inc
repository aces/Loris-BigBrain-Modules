<?php
/**
 * This contains a stub so that the acknowledgements page can load.
 *
 * All content is in the template.
 */
require_once "NDB_Menu.class.inc";

class NDB_Menu_acknowledgements extends NDB_Menu
{
    /**
     * The acknowledgements page. Since this is a public
     * Loris instance, everyone has access.
     */
    function _hasAccess()
    {
        return true;
    }

    /**
     * Constructor does nothing since this page content is static.
     */
    function acknowledgments()
    {
    }
}
?>
