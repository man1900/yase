<?php

class CrawlerFilterSetting extends REST_Model implements IModel{
  protected  $sTable = "setting";

  public function fetchArray() {
   
    $filter="tablename='IndexerFilter'";
 
    if ( isset($_SESSION['account_id']) ) { 
    return ( REST_Model::fetchArray(" WHERE account_id=".$_SESSION['account_id']." ORDER by id") );
    } else {
     return ( REST_Model::fetchArray() );
     } 
   }
};

?>
