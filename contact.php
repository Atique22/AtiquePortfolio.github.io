
<?php
//error_reporting(0);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "atique_portfolio";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }


  // collect value of input field
            $NAME = $_POST['Name'];
            $EMAIL = $_POST['Email'];
            $PROJECT = $_POST['Project'];
            $MESSAGE = $_POST['Message'];

     if (!empty($NAME) || !empty($MESSAGE) ||  !empty($EMAIL) || !empty($PROJECT) ) {

///inserted data
         $sql = "INSERT INTO contact VALUES ('','$NAME', '$EMAIL', '$PROJECT','$MESSAGE')";

// sql data
            if ($conn->query($sql) === TRUE) {
                echo "<br> successfully! <br>";
             }
            else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

      }
      else {
        echo "<br> Plz fill out complete form! <br>";
      }

$conn->close();
?>

