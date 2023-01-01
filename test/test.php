<?php

    // Step 1: Connect to ODBC data source

    // The odbc_connect() function is used to connect to an ODBC data source. Note that the function takes three mandatory parameters: the data source name, username and password. If your database is not password-protected or doesn't require a username, leave these parameters empty. In the following example, a connection is established using the odbc_connect() function in PHP.
$user = "khaldon"; 
$password = "khaldon";
// $ODBCConnection = odbc_connect("Driver={Devart ODBC driver for Oracle};Direct=true;Host=myhost;Port=myport;Service Name=myservicename;User ID=myuserid;password=mypassword", $user, $password);
$ODBCConnection = odbc_connect("Driver={Devart ODBC driver for Oracle};Direct=true;Host=127.0.0.1;Port=myport;Service Name=orcl;User ID=khaldon;password=khaldon", $user, $password);



    //Step 2: Execute an SQL statement

    // If connection is successful, the odbc_exec() function is used to execute a SELECT        statement against the dept table in the autotest database.
$SQLQuery = "SELECT * FROM autotest.dept";
$RecordSet = odbc_exec($ODBCConnection, $SQLQuery);

    //     Step 3: Print the result set

    // The odbc_fetch_row() function is used to return records from the result set. While odbc_fetch_row() returns rows, the odbc_result_set() function prints a set of result in HTML table. After all rows from the result set have been printed, the odbc_close() function closes the connection.
    while (odbc_fetch_row($RecordSet)) {
        $result = odbc_result_all($RecordSet, "border=1");
    }
    odbc_close($ODBCConnection);
    ?>  

<!-- You can modify this script by specifying general settings for each Devart ODBC driver to use any of them with your PHP projects. -->

