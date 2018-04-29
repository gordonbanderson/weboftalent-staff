<?php

namespace WebOfTalent\Staff;

use SilverStripe\ORM\FieldType\DBBoolean;
use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\CheckboxField;
use WebOfTalent\Portlets\RenderableAsPortlet;

/**
* Defines the StaffFolder page type.
*/
class StaffFolder extends \Page implements RenderableAsPortlet
{
    private static $db = array(
        'LinkToIndividualStaffPages' => DBBoolean::class,
    );
    private static $has_one = array(
        'MainImage' => Image::class,
    );

    private static $icon = 'weboftalent/staff: icons/employees.png';


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
