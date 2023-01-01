<?php
include("../oci.php");



$stid = oci_parse($conn, 'SELECT country_id,country_name FROM country');
oci_execute($stid);


while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    // print_r($row)  . '<br>';
    echo $row["COUNTRY_ID"]. ':' .  $row["COUNTRY_NAME"] . '<br>';
  
}

oci_close($conn);
?>