<?php
// $query="select * from author";
// $records=mysqli_query($con,$query);

$result = mysqli_query($con, "SELECT author_id, author_name FROM author");

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["author_id"]. " - Name: " . $row["author_name"]."<br>";
  }
} else {
  echo "0 results";
}




// while (mysqli_fetch_array($records)) {
//     $result = oci_result($records, "border=1");
// }
