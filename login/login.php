<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="login.css">
  <title>login</title>
</head>

<body>

  <div class="login-page">
    <div class="form">
      <form action="" class="login-form" method="POST">
        <input type="text" name="username" placeholder="username" required>
        <input type="password" name="password" placeholder="password" required>
        <input style="background-color: greenyellow;" type="submit" name="submit" value="login"></input>
      </form>
    </div>
  </div>

  <?php
  include("../oci.php");

  $username = @$_POST['username'];
  $password = @$_POST['password'];
  // Prepare a SQL statement to select the user's record
  $sql = 'SELECT * FROM users WHERE user_name = :username AND password = :password';

  // Bind the values for the placeholders
  $stmt = oci_parse($conn, $sql);
  oci_bind_by_name($stmt, ':username', $username);
  oci_bind_by_name($stmt, ':password', $password);



  oci_execute($stmt);

  // Fetch the user's record from the result set
  $user = oci_fetch_array($stmt, OCI_ASSOC + OCI_RETURN_NULLS);
  // Check if the user's record was found
  if (isset($_POST['submit'])) {
    if ($user) {
      // echo "accessed";
      header("Location:home.php");
      exit();
    } else {
      echo "not accessed";
    }
  }
  oci_free_statement($stmt);
  oci_close($conn);

  ?>
  <script>
    $('.message a').click(function() {
      $('form').animate({
        height: "toggle",
        opacity: "toggle"
      }, "slow");
    });
  </script>
</body>

</html>