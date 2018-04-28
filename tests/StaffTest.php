<?php

use SilverStripe\Control\Email\Email;
use SilverStripe\Dev\SapphireTest;

class StaffTest extends SapphireTest
{
    public function testGetCMSFields()
    {
        $staff = new Staff();
        $fields = $staff->getCMSFields();
        $imageFields = $this->getFieldNamesForTab($fields, 'Root.Image');
        $this->assertEquals(array('Photo'), $imageFields);

        $jobFields = $this->getFieldNamesForTab($fields, 'Root.JobDetail');
        $expected = array('JobTitle', Email::class, 'TelephoneNumberDesk',
                                'TelephoneNumberMobile');
        $this->assertEquals($expected, $jobFields);
    }


    private function getFieldnamesForTab($fields, $tabName) {
        $tab = $fields->findOrMakeTab($tabName);
        $fields = $tab->fieldList();
        $names = array();
        foreach ($fields as $field) {
            array_push($names, $field->getName());
        }
        return $names;
    }

}
