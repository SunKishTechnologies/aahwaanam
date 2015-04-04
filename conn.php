<?php
 $dbh=mysql_connect ("localhost", "ragaaen8_sunkish", "Sun25K1s") or die ('I cannot connect to the database because: ' . mysql_error());
if (mysql_select_db ("ragaaen8_maggie",$dbh)) {
 //echo "Success";
} else {
//var_dump(mysql_error());
}

////////////////////////////////////////////////////
// Global Varialbles
////////////////////////////////////////////////////
?>