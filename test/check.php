<?php
include("oci.php");

// Prepare a SQL statement to select the user's record
$sql = 'SELECT * FROM users WHERE username = :username AND password = :password';

// Bind the values for the placeholders
$stmt = oci_parse($conn, $sql);
oci_bind_by_name($stmt, ':username', $username);
oci_bind_by_name($stmt, ':password', $password);

// Execute the SQL statement
oci_execute($stmt);

// Fetch the user's record from the result set
$user = oci_fetch_array($stmt, OCI_ASSOC);

// Check if the user's record was found
if ($user) {
  // The user's credentials are valid, proceed with the authentication process
} else {
  // The user's credentials are invalid, return an error or prompt the user to try again
}

// Close the database connection
oci_close($conn);

?>