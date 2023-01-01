<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Books information </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container mt-5 ">
    <h1>Books information</h1>

    
      <form method="post" action="#">

      

        <div class="row">
          <div class="col-md-5">
            <div class="mb-3">

              <label>book id</label>
              <input type="number" placeholder="book id"
               class="form-control" name="book id" />
            </div>
          </div>

          <div class="col-md-5">
            <div class="mb-5">

              <label>language id</label>
              <input type="number" placeholder="language id" 
              class="form-control" name="language id" />
              </div>

            </div>
          
          <div class="col-md-10">
           
              <div class="mb-5">
                <label>Title</label>
                <input type="text" placeholder="Title" 
                class="form-control" name="Title" />

              </div>
            </div>

            <div class="row">

            <div class=" col-md-5">
            <div class="mb-5">
              <label>isbn 13</label>
              <input type="text" placeholder="isbn 13"
               class="form-control" name="isbn 13" />
            </div>
            </div>

           
            <div class=" col-md-5">           
            <div class="mb-5">
            <label>num page</label>
              <input type="number" placeholder="num page"
               class="form-control" name=" num page" />
            </div>
            </div>

            <div class=" col-md-5">           
            <div class="mb-5">
            <label>publisher id </label>
              <input type="number" placeholder="publisher id"
               class="form-control" name="publisher id" />
            </div>
            </div>

            <div class="col-md-5">
              
              <div class="mb-5">
              <label> publiction date</label>
              <input type="date" placeholder="publiction date"
              class="form-control" name="publiction date"/>
            </div>
            </div>

           
            <div class="text-center">
               <div class="mb-3">
                
               <button type="button" class="btn btn-outline-dark w-25">send</button>

              <a class="btn btn-outline-danger w-25" href="home.php" >BACK TO HOME</a>
            </div>
            </div>

      </form>
    

</body>

</html>