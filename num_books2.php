<?php

include("oci.php");
$stmt = oci_parse($conn, 'BEGIN :result := num_books2(:author_name); END;');
oci_bind_by_name($stmt, ':author_name', $author_name);
oci_bind_by_name($stmt, ':result', $result, 100);
oci_execute($stmt);
$num_books = $result;

// Fetch the results
while ($row = oci_fetch_array($result, OCI_ASSOC+OCI_RETURN_NULLS)) {
    // Process the row
    echo $row['AUTHOR_ID'] . ': ' . $row['COUNT(*)'] . PHP_EOL;
}

// Close the cursor
oci_free_statement($result);

// Close the connection
oci_close($conn);


?>