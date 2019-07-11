
<?php 

$mysqli = new mysqli('localhost', 'root', '', 'redroster') or 
 die(mysqli_error($mysqli));

 if(isset($_POST['submit'])){
    $names = $_POST['names'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];

    $mysqli->query(
        " INSERT INTO comments(names,email,comments) VALUES('$names', '$email', '$comments') "
        )  or die($mysqli->error);

 }

?>