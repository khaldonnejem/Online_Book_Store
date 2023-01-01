<?php
include("../oci.php");

// Select records from the table
// $stid = oci_parse($con, 'SELECT * FROM author');
// oci_execute($stid);

// // Fetch all rows as an associative array
// $rows = oci_fetch_all($stid, $result);
//     // Print the results
// foreach ($result as $row) {
//     print_r($row);`
// }

// oci_close($con);




// $stid = oci_parse($conn, 'SELECT * FROM author');
// oci_execute($stid);
// $rows = oci_fetch_all($stid, $result);
// var_dump($result);
// foreach ($result as $row) {
//         print_r($row);
//     // echo $row[0]. ':'. $row[1].'<br>';
//     }


$stid = oci_parse($conn, 'SELECT author_id,author_name FROM author');
oci_execute($stid);


while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    // print_r($row)  . '<br>';
    echo $row["AUTHOR_ID"]. ':' .  $row["AUTHOR_NAME"] . '<br>';
  
}

oci_close($conn);

?>



