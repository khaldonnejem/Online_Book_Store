<?php

$con = oci_connect('khaldon','khaldon','localhost/orclpdb')
                or die(oci_error());

if (!$con) {
    echo "sorry  there is some issues";
}else{
    echo "we are ready to execute";
}


oci_close($con);
// $connection->close();





?>