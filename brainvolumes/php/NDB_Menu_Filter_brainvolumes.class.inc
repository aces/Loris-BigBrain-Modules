<?php
require_once 'NDB_Menu_Filter.class.inc';

/**
* The candidate list menu
 * @package main
*/
class NDB_Menu_Filter_brainvolumes extends NDB_Menu_Filter
{
    /**
    * overloading this method to allow access to site users (their own site only) and users w/ multisite privs
    * @note   overloaded function
    * @return bool
    * @access private
    */
    function _hasAccess()
    {
        return true;
    }
}
?>
