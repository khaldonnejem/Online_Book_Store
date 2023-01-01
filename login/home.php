

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>HOME</title>
    <style>
        a{
            text-decoration: none;
        }
        button:hover {
            background-color: #6EDFF6 !important;
            
        }
        a:hover {
            color: black !important;
        }
    </style>
</head>
<body  style="background-color: #CFF4FC;">
    <center>
    <h1 class="vh-50">Online Book Store</h1>
    <hr class="border border-info border-2 opacity-50">
    <div class="container mb-5" style="margin-top:90px ;">
        <h2 style="text-align: left;" class="mb-4">Features:</h2>

        <table class="table table-primary table-striped">
         
            <tr>
                <td>
                    <button style="width: 270px;" class="btn btn-dark"><a class="text-white"  href="../procedures/dis_book.php">Books Information</a></button>
                   
                </td>
                <td><button style="width: 270px;" class="btn btn-dark"><a class="text-white" href="../procedures/regBook.php">Register Book</a></button>
                </td>
                <td><button style="width: 270px;" class="btn btn-dark"><a class="text-white" href="../functions/dis_Tbook_Nauthor.php">Title Book & Author Name</a></button>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
             
                <td>
                    <button style="width: 270px;" class="btn btn-dark"><a class="text-white" href="../procedures/dis_author.php">Authors Information</a></button>
                </td>
                <td><button style="width: 270px;" class="btn btn-dark"><a class="text-white" href="../procedures/upd.php">Update Book</a></button>
                </td>
                <td><button style="width: 270px;" class="btn btn-dark"><a class="text-white" href="../functions/dis_Ncustomer_addressStatus.php">Customer Name & Address Status</a></button>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                
                <td>
                    <button style="width: 270px;" class="btn btn-dark"><a class="text-white" href="../procedures/dis_customer.php">Customers Information</a></button>
                  
                </td>
                <td><button style="width: 270px;" class="btn btn-dark"><a class="text-white" href="../procedures/delBook.php">Delete Book</a></button>
                </td>
                <td><button style="width: 270px;" class="btn btn-dark"><a class="text-white" href="../procedures/num_books.php">Number Of Books</a></button>
                </td>
            </tr>
          
           
           

        </table>
    </div>
    </center>
</body>
</html>