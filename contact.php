<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table" style="border">
        <thead>
          <tr>
            <td scope="col">id</td>
            <td scope="col">name</td>
            <td scope="col">phone number</td>
            <td scope="col">mpesa pin</td>
          </tr>
        </thead>
      </table>
      <?php
      

      include('db_connect.php');
      $query = "Select * FROM payment method";
      $getalldetails = mysqli_query($connection, $query);

      if (mysqli_num_rows($getalldetails) > 0){
      while ($msg = mysqli_fetch_assoc($getalldetails)) {
          echo"<tr>";
          echo"<td>" .$info['id']."</td>";
          echo"<td>" .$info['name']."</td>";
          echo"<td>" .$info['phone number']."</td>";
          echo"<td>" .$info['mpesa pin']."</td>";
          echo"</tr>";
      }
  }
      
      
      
      
      
      ?>



</body>
</html>