
<?php
include("dis_book.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Delete Book</title>
    <style>
        input {
            width: 290px;
        }

        label {
            font-weight: bold;
        }
    </style>
</head>

<body style="background-color: #CFF4FC;">
    
        
    <div class="container  mt-5 ">
    <hr>
        <div class="d-flex justify-content-between align-items-center">
            <h1>Delete Book</h1>
        </div>
        <div class="container mt-5">
        
        <center>
        <form method="POST" action="" >
                <table class="table table-bordered" style="background-color:rgb(50,100,150); width:450px ;">
                    <tr>
                        <td> <label class="text-white">Book Id</label></td>
                        <td><input type="text" name="book_id" value="<?php echo @$_POST['book_id']?>"></td>
                    </tr>
       
                    <tr>
                        <td style="text-align: center;" colspan="2"><input class="btn btn-dark" type="submit" name="submit" value="Delete"></td>
                    </tr>


                </table>
        </form>
        </center>
    </div>
    <?php
    include("../oci.php");

    
    // Prepare PL/SQL statement
    $sql = 'BEGIN delete_book(:book_id); END;';
    $stid = oci_parse($conn, $sql);


    // set variables
    $input_string0 =  @$_POST['book_id'];
    $truncated_string0 = substr($input_string0, 0, 50);
   
    
    // Bind variables to placeholders
    oci_bind_by_name($stid, ':book_id', $truncated_string0);
    
    if (isset($_POST['submit'])) {
    
    
        // Execute PL/SQL statement
        $result = oci_execute($stid);

        if ($result) {
            echo " record deleted successfully";
            // header("Location:dis_book.php");
            header("Refresh:0");

        
        } else {
            echo "Error: " . $sql . "<br>" . oci_error($conn);
        }
}

    oci_free_statement($stid);
    oci_close($conn);

    ?>

</body>

</html>



