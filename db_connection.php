<?php
 $server_name = "localhost";
 $username = "root";
 $password ="";
 $database_name = "practice";
 
 $conn = mysqli_connect($server_name, $username, $password,$database_name);
 if(!$conn)
 {
     die("Connection Failed:" . mysqli_connect_error());
 }

 if(isset($_POST['submit']))
 {
     $name = $_POST['name'];
     $password = $_POST['password'];

     $sql_query = "INSERT INTO sign_in (name,password)
     VALUES ('$name','$password')";

     if (mysqli_query($conn, $sql_query))
     {
         echo "Successful";
     }
     else
     {
         echo "Error: " . $sql . "" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>