<?php

namespace WebOfTalent\StaffFolder;

use SilverStripe\Core\Convert;
use PageController;



class StaffFolderController extends PageController
{
    private static $allowed_children = array('WebOfTalent\Staff\Staff');

    public function StaffFolderCacheKey()
    {
        $start = isset($_GET['start']) ? (int) (Convert::raw2sql($_GET['start'])) : 0;

        return implode('_', array(
            'StaffFolders',
            $this->Locale,
            $this->AllChildren()->max('LastEdited'),
            '_',
            $this->ID,
            '_',
            $this->LastEdited,
            '_',
            $start,
            ));
    }
}
