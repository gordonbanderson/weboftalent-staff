<?php

use SilverStripe\ORM\FieldType\DBBoolean;
use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Core\Convert;
use PageController;
/**
* Defines the StaffFolder page type.
*/
class StaffFolder extends Page implements RenderableAsPortlet
    {
    public static $db = array(
        'LinkToIndividualStaffPages' => DBBoolean::class,
    );
    public static $has_one = array(
        'MainImage' => Image::class,
    );

    private static $icon = 'weboftalent-staff/icons/employees.png';

    public static $allowed_children = array('Staff');

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Image', new UploadField('MainImage'));
        $fields->addFieldToTab('Root.Layout', new CheckboxField('LinkToIndividualStaffPages', 'If biographies are short, leave this as false to only show a single page of staff'));

        return $fields;
    }

    public function getPortletTitle()
    {
        return $this->Title;
    }

    // FIXME - make this more efficient
    public function getPortletImage()
    {
        return $this->MainImage();
    }

    public function getPortletCaption()
    {
        return '';
    }
}

class StaffFolder_Controller extends PageController
{
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
            )
        );
    }
}
