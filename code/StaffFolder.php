<?php
/**
 * Defines the StaffFolder page type
 */
class StaffFolder extends Page implements RenderableAsPortlet {
  static $db = array(
    'LinkToIndividualStaffPages' => 'Boolean'
  );
  static $has_one = array(
    'MainImage' => 'Image'
  );

  static $allowed_children = array( 'Staff' );

  function getCMSFields() {
    $fields = parent::getCMSFields();
    $fields->addFieldToTab( 'Root.Content.Image', new ImageField( 'MainImage' ) );
    $fields->addFieldToTab( 'Root.Content.Layout', new CheckboxField( 'LinkToIndividualStaffPages', 'If biographies are short, leave this as false to only show a single page of staff' ) );

    return $fields;
  }

  public function getPortletTitle() {
    return $this->Title;
  }


  // FIXME - make this more efficient
  public function getPortletImage() {
    if ( $this->MainImageID ) {
      return DataObject::get_by_id( 'Image', $this->MainImageID );
    } else {
      return null;
    }

  }



  public function getPortletCaption() {
    return '';
  }

}

class StaffFolder_Controller extends Page_Controller {
  public function StaffFolderCacheKey() {
    $start = isset( $_GET['start'] ) ? (int)( Convert::raw2sql( $_GET['start'] ) ) : 0;
    return implode( '_', array(
        'StaffFolders',
        $this->Locale,
        $this->Aggregate( 'Staff' )->Max( 'LastEdited' ),
        '_',
        $this->ID,
        '_',
        $this->Aggregate( 'StaffFolder' )->Max( 'LastEdited' ),
        '_',
        $start
      ) );
  }
}

?>
