<?php
/**
* Defines the StaffPage page type.
*/
class Staff extends Page
{
    public static $db = array(
        'TelephoneNumberDesk' => 'Varchar',
        'TelephoneNumberMobile' => 'Varchar',
        'Email' => 'Varchar',
        'ShowOnHomePage' => 'Boolean',
        'JobTitle' => 'Text',
    );

    public static $has_one = array(
        'Photo' => 'Image',
    );

    private static $icon = 'weboftalent-staff/icons/employee.png';


    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Image', new UploadField('Photo'));

        $fields->addFieldToTab('Root.JobDetail', new TextField('JobTitle', _t('Staff.JOB_TITLE', 'Job Title')));

        $fields->addFieldToTab('Root.JobDetail', new EmailField('Email'));
        $fields->addFieldToTab('Root.JobDetail', new TextField('TelephoneNumberDesk'));
        $fields->addFieldToTab('Root.JobDetail', new TextField('TelephoneNumberMobile'));

        $fields->renameField('TelephoneNumberDesk', 'Telephone Number (Landline)');
        $fields->renameField('TelephoneNumberMobile', 'Telephone Number (Mobile)');

        return $fields;
    }
}

class Staff_Controller extends Page_Controller
{
}
