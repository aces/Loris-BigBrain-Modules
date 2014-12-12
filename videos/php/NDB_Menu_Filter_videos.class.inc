<?php
require_once 'NDB_Menu_Filter.class.inc';

/**
* The candidate list menu
 * @package main
*/
class NDB_Menu_Filter_videos extends NDB_Menu_Filter
{
    /**
    * overloading this method to allow access to site users (their own site only) and users w/ multisite privs
    * @note   overloaded function
    * @return bool
    * @access private
    */
    function _hasAccess()
    {
        // create user object
        $user =& User::singleton();
        if(PEAR::isError($user)) {
            return PEAR::raiseError("User Error: ".$user->getMessage());
        }

        return true;
    }

    function _setupVariables() {
        $this->headers = array('Description', 
				'Size', 
				'Resolution', 
				'Encoding', 
				'Comments',
				'Last Modified', 
				'View', 
				'Download' 
				);
        return true;
    }

    function _setupFilterForm() {
        return true;
    }
    function _getList() {

        $db =& Database::singleton();
        if(PEAR::isError($db)) {
            return PEAR::raiseError("User Error: ".$db->getMessage());
        }

	$list = array();
        return $list;
    }

    function _setDataTableRows($count)
    {
        // print out
        $x = 0;
        foreach ($this->list as $item) {
            //count column
            $this->tpl_data['items'][$x][0]['value'] = $x + $count;
            //print out data rows
            $i = 1;
            foreach ($item as $key => $val) {
                if($key === 'exists') {
                    $this->tpl_data['items'][$x]['exists'] = $val;
                    continue;
                }
                //if it's a non-PSC user show the URL to the timepoint list on PSCID field
                $this->tpl_data['items'][$x][$i]['name'] = $key;
                $this->tpl_data['items'][$x][$i]['value'] = $val;
		 // get feedback information for each displayed candidate record
                $i++;
            }

            $x++;
        }

        return true;
    }
}
?>
