<?php

include("oci.php");

// Define the PL/SQL function to be executed
$query = 'BEGIN :cursor := get_book_count_by_author(); END;';

// Parse the statement
$stmt = oci_parse($conn, $query);

// Bind the output parameter
$cursor = null;
oci_bind_by_name($stmt, ':cursor', $cursor, -1, OCI_B_CURSOR);

// Execute the statement
oci_execute($stmt);

// Fetch the result set
while ($row = oci_fetch_array($cursor, OCI_ASSOC+OCI_RETURN_NULLS)) {
    // Process each row of the result set
    echo "Author: " . $row['AUTHOR_NAME'] . ", Book count: " . $row['BOOK_COUNT'] . "<br>";
}

// Close the connection
oci_close($conn);

?>
