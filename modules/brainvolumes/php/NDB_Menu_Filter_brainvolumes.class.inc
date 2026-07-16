<?php
/**
 * This contains the table of Brain Volumes page for the Loris instance.
 * The NDB_Menu_Filter_brianvolumes is required so that Loris knows to
 * load the module, however doesn't do anything since the page contains
 * only static content.
 *
 * All the content is contained in the template
 */

require_once 'NDB_Menu_Filter.class.inc';

/**
 * Stub class
 */
class NDB_Menu_Filter_brainvolumes extends NDB_Menu_Filter
{
    /**
     * Since BigBrain is public, everyone has access.
     */
    function _hasAccess()
    {
        return true;
    }
    
    function _setupVariables()
    {
        $config=&NDB_Config::singleton();
        $this->tpl_data['url'] = $config->getSetting('url');
        return true;
    }
}
?>
