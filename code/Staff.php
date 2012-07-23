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
  
  
  function getCMSFields() {
    $fields = parent::getCMSFields();
    $fields->addFieldToTab("Root.Content.Image", new ImageField('Photo'));

    $fields->addFieldToTab("Root.Content.Main", new TextField('JobTitle'));
    
    $fields->addFieldToTab("Root.Content.JobDetail", new EmailField('Email'));
    $fields->addFieldToTab("Root.Content.JobDetail", new TextField('TelephoneNumberDesk'));
    $fields->addFieldToTab("Root.Content.JobDetail", new TextField('TelephoneNumberMobile'));
    
    $fields->renameField("TelephoneNumberDesk", "Telephone Number (Landline)");
    $fields->renameField("TelephoneNumberMobile", "Telephone Number (Mobile)");
    
   
   // $fields->addFieldToTab("Root.Content.Main", new CheckboxField('ShowOnHomePage'));

    /*
    $fields->addFieldToTab('Root.Content.Main', new CalendarDateField('Date'), 'Content');
    $fields->addFieldToTab('Root.Content.Main', new TextField('Author'), 'Content');
    */
    return $fields;
  }
  
}

class Staff_Controller extends Page_Controller {
  
}

?>
