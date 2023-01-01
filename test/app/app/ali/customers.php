<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>customers  information </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <div class="container mt-5 ">
    <h1>customers  information</h1>
<!-- <h1> <center> customers  information </center></h1> -->
    
      <form method="post" action="#">
       
                
                <div class="mb-5">
                    <label>Customers  id</label>
                <input type="number" placeholder="author id"
                class="form-control" name="author id"/>
                </div>

                <div class="mb-5">

                    <label>First name</label>
                <input type="text" placeholder="first name"
                class="form-control" name="first name"/>
                </div>

                <div class="mb-5">

                    <label>Last name</label>
                <input type="text" placeholder="last name"
                class="form-control" name="last name"/>
                </div>

                <div class="mb-5">

                    <label>Email</label>
                <input type="email" placeholder="email"
                class="form-control" name="email"/>
                </div>
                          
            <div class="text-center">
              
               <div class="mb-3">
                <a class="btn btn-primary w-25 " href="authors.php" >GO TO BACK</a>
                <br>
                <br>

               <button type="button" class="btn btn-outline-dark w-25">send</button>
                
              <button class="btn btn-outline-danger w-25 " href="home.php" >BACK TO HOME</button>
              
                
              
            </div>
            </div>

      </form>
    

</body>

</html>