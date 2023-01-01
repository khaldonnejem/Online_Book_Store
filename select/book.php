<?php
include("../oci.php");



$stid = oci_parse($conn, 'SELECT book_id,title,isbn13,language_id,num_pages,publication_date,publisher_id FROM book');
oci_execute($stid);


while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    // print_r($row)  . '<br>';
    echo $row["BOOK_ID"]. ':&nbsp;' .  $row["TITLE"]. ':&nbsp;' . $row["ISBN13"].':&nbsp;' . $row["LANGUAGE_ID"]. ':&nbsp;' .
    $row["NUM_PAGES"]. ':&nbsp;' . $row["PUBLICATION_DATE"]. ':&nbsp;' . $row["PUBLISHER_ID"].'<br>';
  
}

oci_close($conn);
?>