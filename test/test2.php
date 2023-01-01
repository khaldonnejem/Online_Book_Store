<?php

// Connect to the database using the ODBC driver
$conn = odbc_connect('orclpdb', 'khaldon', 'khaldon');

if (!$conn) {
    // Connection failed
    die('Could not connect to the database: ' . odbc_error());
}

// Connection was successful
echo 'Connected to the database';

odbc_close($conn);

?>
