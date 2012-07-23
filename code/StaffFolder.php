<?php
/**
 * Defines the StaffFolder page type
 */
class StaffFolder extends Page {
   static $db = array(
   );
   static $has_one = array(
   );
   
   static $allowed_children = array('Staff');
}
 
class StaffFolder_Controller extends Page_Controller {
  public function StaffFolderCacheKey() {
    $start = isset( $_GET['start'] ) ? (int)( Convert::raw2sql( $_GET['start'] ) ) : 0;
    return implode( '_', array(
        'StaffFolders',
        $this->Locale,
        $this->Aggregate( 'Staff' )->Max( 'LastEdited' ),
        $this->Aggregate( 'StaffFolder' )->Max( 'LastEdited' ),
        '_',
        $start
      ) );
  }
}
 
?>
