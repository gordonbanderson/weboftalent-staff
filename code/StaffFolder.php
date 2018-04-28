<?php

namespace WebOfTalent\StaffFolder;

use SilverStripe\ORM\FieldType\DBBoolean;
use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\CheckboxField;
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

    public function getPortletImage()
    {
        return $this->MainImage();
    }

    public function getPortletCaption()
    {
        return '';
    }
}
