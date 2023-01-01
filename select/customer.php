<?php
include("../oci.php");



$stid = oci_parse($conn, 'SELECT customer_id,first_name,last_name,email FROM customer');
oci_execute($stid);


while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    // print_r($row)  . '<br>';
    echo $row["CUSTOMER_ID"]. ':' .  $row["FIRST_NAME"] .':' .
    $row["LAST_NAME"]. ':' . $row["EMAIL"]. '<br>';
  
}

oci_close($conn);
?>