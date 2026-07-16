<?php
/**
 * This contains the FAQ page for the Loris instance.
 * The NDB_Form_FAQ is required so that Loris knows to load the module,
 * however doesn't do anything since the page contains only static content.
 *
 * All the content is contained in the template
 */
require_once "NDB_Form.class.inc";

/**
 * The class for the FAQ page
 */
class NDB_Form_FAQ extends NDB_Form
{
    /**
     * Everyone has access to this page since it's public.
     */
    function _hasAccess()
    {
        return true;
    }

    /**
     * Constructor for the page. Does nothing.
     */
    function FAQ()
    {
    }
}
?>
