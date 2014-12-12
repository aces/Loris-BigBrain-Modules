<?php
require_once "Utility.class.inc";
require_once "NDB_Form.class.inc";

/**
 * Conflict resolver
 * @package main
 */
class NDB_Form_bigbrain extends NDB_Form
{
    
    function _hasAccess()
    {
        return true;
    }


    function bigbrain()
    {
        $DB =& Database::singleton();
    }
}
?>
