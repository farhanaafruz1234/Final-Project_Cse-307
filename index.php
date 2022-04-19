<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <title>Homepage</title>
  
</head>

<body>
 
</body>

</html>

<?php 
  include "./DB/database.php";
  $conn = OpenConnection();
  $result = mysqli_query($conn,"DELETE FROM currentuser");
  CloseConnection($conn);
?>