<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>VBS Generator</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="style.css">
   </head>
   <body class="m-4" style="position: initial; overflow: initial;">
      <h1>VBS Generator</h1>
      <br>
      <p>Sign up or log in to access the editor.</p>
      <button class="btn btn-primary" onclick="window.open('/signup', '_self')">Sign up</button>
      <button class="btn btn-secondary" onclick="window.open('/login', '_self')">Log in</button>
      <script src="script.js"></script>
      <script src="https://kit.fontawesome.com/0edde49b86.js" crossorigin="anonymous"></script>
      <?php
      $servername = "464055";
$username = "464055";
$password = "Rodrigo2010!";

// Create connection
$con = new mysqli($servername, $username, $password);
      
      $sql = "SELECT * from VBS_Saves";

if ($result = mysqli_query($con, $sql)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
    
    // Display result
    printf("Total rows in this table :  %d\n", $rowcount);
 }
      ?>
   </body>
</html>