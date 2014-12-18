<?php
/**
 * This contains a stub so that the test_name=bigbrain page will be
 * recognized by Loris.
 *
 * The bulk of this work is done in the template using javascript.
 */
require_once "NDB_Menu_Filter.class.inc";

class NDB_Menu_Filter_bigbrain extends NDB_Menu_Filter
{

    function _hasAccess()
    {
        return true;
    }
}
?>
