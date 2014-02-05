<?php
/**
* Defines the StaffPage page type
*/
class Staff extends Page {
  static $db = array(
  'TelephoneNumberDesk' => 'Varchar',
  'TelephoneNumberMobile' => 'Varchar',
  'Email' => 'Varchar',
  'ShowOnHomePage' => 'Boolean',
  'JobTitle' => 'Text'
  );
  static $has_one = array(
  'Photo' => 'Image'
  );

  private static $icon = 'weboftalent-staff/icons/employee.png'; 

  
  
  function getCMSFields() {
    $fields = parent::getCMSFields();
    $fields->addFieldToTab("Root.Image", new UploadField('Photo'));

    $fields->addFieldToTab("Root.JobDetail", new TextField('JobTitle', _t('Staff.JOB_TITLE', 'Job Title')));
    
    $fields->addFieldToTab("Root.JobDetail", new EmailField('Email'));
    $fields->addFieldToTab("Root.JobDetail", new TextField('TelephoneNumberDesk'));
    $fields->addFieldToTab("Root.JobDetail", new TextField('TelephoneNumberMobile'));
    
    $fields->renameField("TelephoneNumberDesk", "Telephone Number (Landline)");
    $fields->renameField("TelephoneNumberMobile", "Telephone Number (Mobile)");
    
   
   // $fields->addFieldToTab("Root.Main", new CheckboxField('ShowOnHomePage'));

    /*
    $fields->addFieldToTab('Root.Main', new CalendarDateField('Date'), 'Content');
    $fields->addFieldToTab('Root.Main', new TextField('Author'), 'Content');
    */
    return $fields;
  }
  
}

class Staff_Controller extends Page_Controller {
  
}

?>
