<?php

namespace WebOfTalent\Staff;

use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\ORM\FieldType\DBBoolean;
use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\EmailField;

/**
* Defines the StaffPage page type.
*/
class Staff extends \Page
{
    private static $db = array(
        'TelephoneNumberDesk' => 'Varchar',
        'TelephoneNumberMobile' => 'Varchar',
        'Email' => 'Varchar',
        'ShowOnHomePage' => DBBoolean::class,
        'JobTitle' => 'Varchar',
        'ShortBiography' => 'HTMLText'
    );

    private static $has_one = array(
        'Photo' => Image::class,
    );

    private static $icon = 'weboftalent/staff: icons/employee.png';


    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $shortBioField = new HTMLEditorField('ShortBiography');
        $shortBioField->setRows(4);
        $fields->addFieldToTab('Root.Main',
            $shortBioField,
            'Content'
        );

        $fields->addFieldToTab('Root.Image', new UploadField('Photo'));

        $fields->addFieldToTab('Root.JobDetail', new TextField('JobTitle', _t('Staff.JOB_TITLE', 'Job Title')));

        $fields->addFieldToTab('Root.JobDetail', new EmailField('Email'));
        $fields->addFieldToTab('Root.JobDetail', new TextField('TelephoneNumberDesk'));
        $fields->addFieldToTab('Root.JobDetail', new TextField('TelephoneNumberMobile'));

        $fields->renameField('TelephoneNumberDesk', 'Telephone Number (Landline)');
        $fields->renameField('TelephoneNumberMobile', 'Telephone Number (Mobile)');
        $fields->renameField('Content', 'Biography');

        return $fields;
    }
}

