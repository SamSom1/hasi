<?php
  require ('header.php');
  $cat = $_GET['cat'];
  $results = mysql_query("SELECT para FROM content WHERE  para_ID='$cat'");
  if( mysql_num_rows($results) > 0 )
  {
   $row = mysql_fetch_array( $results );
   echo $row['para'];
  }
?>
